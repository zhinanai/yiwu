<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use think\Db;
use think\File;
use think\Config;
use think\Exception;
use app\common\model\User;
use app\common\model\Money;
use app\common\model\Attachment;
use app\common\model\WalletLog;
use app\common\model\IntegralLog;
use app\common\model\Business;
use OSS\OssClient;
use OSS\Core\OssException;

/**
 * 记录帐户变动
 * @param int $user_id 用户id
 * @param float $user_money 可用余额变动
 * @param string $desc 变动说明
 * @param int $fee  手续费
 * @param string $bond 保证金
 * @param float $frozen_money 冻结资金
 * @param int $user_money 奉献值
 * @return bool
 */
function accountLog($user_id, $money = 0, $desc = '', $fee = 0, $bond = '', $frozen_money = 0, $user_money = 0)
{
    /* 插入帐户变动记录 */
    $account_log = array(
        'user_id' => $user_id,
        'money' => $user_money,
        'create_time' => time(),
        'frozen_money' => $frozen_money,
        'user_money' => $user_money,
        'desc' => $desc,
        'fee' => $fee,
        'bond' => $bond
    );
    $data = Db::name('account_log')->insert($account_log);
    if ($data) {
        return true;
    } else {
        return false;
    }

}

/** 
 * 买出冻结金额
 * @param $id  用户id
 * @param $money  所需要的金额
 * @param $type 状态true 扣除金额 增加冻结金额 false  只取消冻结金额
 * @param $wallet_num 保证金 退会保证金
 * @param $status  判断是否冻结资金
 * @param $num   消费明细
 * @param $discount_ratio  打折优惠
 * @return  array  status  1  成功    
 */
function sale_amount($id, $money, $type = true, $wallet_num, $status = true,$num,$discount_ratio)
{
    Db::startTrans();
    $user = Money::where('uid', $id)->find();
    if ($user == "") {
        Db::rollback();
        return array('status' => 0, 'msg' => lang("买入失败"));
    }
    $user_money = bcsub($user->wallet_num, $money, 2);
    if (bccomp($user_money, '0', 2) < 0) {
        Db::rollback();
        return array('status' => 0, 'msg' => lang("余额不足"));
    }
    $frozen_money = bcadd($user->frozen_money, $money, 2);
    if ($type) {
        if (!walletLog($id, -$money, $user->wallet_num, $num)) {
            Db::rollback();
            return array('status' => 0, 'msg' => lang("买入失败"));
        }
        $user->wallet_num = $user_money;
        if ($status) {
            $user->frozen_money = $frozen_money;
        }

    } else {
        if (!walletLog($id, $wallet_num, $user->wallet_num, $num)) {
            Db::rollback();
            return array('status' => 0, 'msg' => lang("买入失败"));
        }
        $user->wallet_num = $user->wallet_num + $wallet_num;
        $user->frozen_money = $frozen_money;
    }
    if($discount_ratio != "0"){
        $total = $user->integral_num;
        $user->integral_num = $user->integral_num + $discount_ratio;
        $result= [
            'userid' =>$id,
            'num'    => $discount_ratio,
            'type'   => 13,
            'before_integral' => $total,
            'now_integral'    => $user->integral_num,
            'create_time'    => time()
         ];
       
       $data= IntegralLog::create($result);
       if(!$data->id){
            Db::rollback();
            return array('status' => 0, 'msg' => lang("买入失败"));  
       }
    }
    $save = $user->save();
    if ($save) {
        Db::commit();
        return array('status' => 1, 'msg' => lang("买入成功"));
    } else {
        Db::rollback();
        return array('status' => 0, 'msg' => lang("买入失败"));
    }

}
/** 
 * 登录支付密码加密
 * @param $pwd 密码
 * @param $salt 密码
 */
function pwdMd5($pwd, $salt)
{
     $user_pwd = md5(md5($pwd) . $salt);
     return $user_pwd;
}

/** 
 * 验证支付密码
 * @param $user_id 用户id
 * @param $payment_pwd  支付密码
 */
function encrypt($user_id, $pwd)
{
    $user = User::get($user_id);
    $pwd = md5(md5($pwd) . $user['safety_salt']);
    if ($user['safety_pwd'] == $pwd) {
        return true;
    } else {
        return false;
    }
}
/** 
 * 上传文件
 * @param $file  文件上传信息
 * @param $size 文件上传大小
 * @return  string  url 图片的路径
 */
function fileupload($file, $size = 20480000000)
{
    if ($file) {

        $img = $file->validate(['size' => $size, 'ext' => 'jpg,png,gif'])->move(Env::get('root_path') . 'public/uploads');

        if($img){
              $path = str_replace("\\", "/", $img->getSaveName());
              return $pic = '/uploads/' . $path;
        }else{
            return ['status'=>3,'mes'=>'上传文件格式错误'];
            return false;
        }
    }
    return false;

}


/**
 * 余额变动记录表
 * @param  $userid  用户的id
 * @param  $money  转账金额
 * @param  int    $type 类型  
 * @param  $before_wallet  交易前的余额
 * @return  $userid添加数据的
 * 

 */
function walletLog($user_id, $money, $before_wallet, $type)
{
    if($money == ''){
        return false;
    }
    $now_wallet = bcadd($before_wallet, $money, 4);
    $array = array(
        'userid' => $user_id,
        'money' => $money,
        'type' => $type,
        'before_wallet' => $before_wallet,
        'now_wallet' => $now_wallet
    );
    $result = WalletLog::create($array);
    return $result->userid;
}



/**  
*转载自：http://www.jb51.net/article/56967.htm
* @desc 根据两点间的经纬度计算距离 
* @param float $lat 纬度值 
* @param float $lng 经度值 
*/ 
function getDistance($lat1, $lng1, $lat2, $lng2){ 
    $earthRadius = 6367000; //approximate radius of earth in meters 
    $lat1 = ($lat1 * pi() ) / 180; 
    $lng1 = ($lng1 * pi() ) / 180; 
    $lat2 = ($lat2 * pi() ) / 180; 
    $lng2 = ($lng2 * pi() ) / 180; 
    $calcLongitude = $lng2 - $lng1;   
    $calcLatitude = $lat2 - $lat1; 
    $stepOne = pow(sin($calcLatitude / 2), 2) + cos($lat1) * cos($lat2) * pow(sin($calcLongitude / 2), 2); 
    $stepTwo = 2 * asin(min(1, sqrt($stepOne))); 
    $calculatedDistance = $earthRadius * $stepTwo; 
    return round($calculatedDistance); 
    }
    /**
 * 多维数组排序
 * @param array $array 要排序的数组
 * @param string $key 排序依据字段
 * @param string $order 排序方式，0为降序，1为升序
 */
function array_sort($array,$key,$order=1){
    $sort=[];
//    在此处形成字段值与键名的对应关系
    foreach($array as $k=>$v){
        $sort[$v[$key]]=isset($sort[$v[$key]])?array_merge($sort[$v[$key]],[$k]):[$k];
    }
    if($order==1&&ksort($sort)){
//        升序排序
 
    }elseif($order==0&&krsort($sort)){
 
    }else{
        return false;
    }
    $rs = [];
//    按照排好顺序的关系生成新的数组
    foreach($sort as $value){
        foreach($value as $n){
            $rs[] = $array[$n];
        }
    }
    unset($sort,$array);
    return $rs;
}


/**
 * OSS简单上传  将阿里云ossSDK包中的OSS文件夹放在项目extend目录下
 * 需要客户端将文件上传到服务器端之后，获取文件在服务器端的路径再调用
 * @param string $filePath  文件在服务器的相对路径
 * @param string $dir  上传到bucket下的相对目录，以'/'结尾
 * @return  上传成功后，文件的CDN访问地址
 */
function simpleUpload($filePath, $dir = null)
{   
    $endpoint = 'http://oss-cn-beijing.aliyuncs.com';
    $accessKeyId = 'LTAImUgOMuAfoOal';
    $accessKeySecret = '9HdRCsBk2S78ikV1WOMveTz05SgRgS'; 
    $bucket = 'rzdoss';
    // 文件名称
    $nonce = getNonceStr();
    //上传文件后缀
    $ext = getExtension($filePath);
    $object = $nonce . '.' . $ext;
    if(isset($dir) && !empty($dir))
        $object = $dir . $nonce . '.' . $ext;
    
    // <yourLocalFile>由本地文件路径加文件名包括后缀组成，例如/users/local/myfile.txt
    try{
        $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
        $info = $ossClient->uploadFile($bucket, $object, $filePath);
        // print_r($info);
        return $info['oss-request-url'];
    } catch(OssException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
}


//随机字符串
function getNonceStr()
{
    //生成16位随机字串
    $charts = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $max = strlen($charts);
    $noncestr = '';
    for($i=0; $i<16; $i++){
        $noncestr .= $charts[mt_rand(0, $max-1)];
    }
    return $noncestr;
}


//获取上传文件后缀名
function getExtension($filePath)
{
    $arr = pathinfo($filePath);
    return $ext = $arr['extension'];
}
//使用余额时判断余额是否足够
/**
 * $uid 当前登录用户的userid
 **/
function check_yue($uid){
    $yue_num1 = WalletLog::where([ 'userid' => $uid,'type'=>	[2,3,4,5,6,7,8,9,11,13,14,15,16,17,18,19,20,21,22,23]])->sum('money');
    $yue_num2 = WalletLog::where([ 'userid' => $uid,'type'=>	[1,12]])->sum('money');
    $yue_num = $yue_num1-$yue_num2;
    return $yue_num;
}

/**
 * 查询用户信息
 *
 * @param      <string>   $userid  用户ID
 *
 * @return     boolean  返回用户信息
 */
function get_user_info($userid)
{
    if(!$userid)
        return false;

    return $user = User::get($userid);
}

/**
 * 查询商户信息
 *
 * @param      <string>   $userid  用户ID
 *
 * @return     boolean  返回商户信息
 */
function get_shop_info_by_uid($userid)
{
    if(!$userid)
        return false;

    return $user = Business::where(['userid'=>$userid])->find();
}

/**
 * 获取订单下包含商品信息
 *
 * @param      <string>  $soid   商城订单ID
 */
function get_goods_info_by_soid($soid)
{
    $order = Shoporder::where(['id'=>$soid])->field('goods_id')->select();
    $goods_ids = [];
    foreach ($order as $key => $value) {
        $goods_ids[] = $value['goods_id'];
    }
    $goods_info = Goods::where(['id',['in',$goods_ids]])->select();

    foreach ($goods_info as $key => $value) {
        $value['img'] = explode(',', $value['img1']);
        $value['img'] = $value['img1'][0];
    }

    return $goods_info;
}
