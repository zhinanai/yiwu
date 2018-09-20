<?php
namespace app\mobile\controller;

use think\Controller;
use think\Db;
use think\Request;
use think\db\Query;
use app\common\model\Index as indexModel;
use app\common\model\Reward as rewardModel;
use app\common\model\Money as moneyModel;
use app\common\model\User as userModel;
use app\common\model\WalletLog;
use app\common\model\UserLevel as userLevelModel;
use app\common\model\IntegralLog as integralLoglModel;
use app\common\model\WalletLog as walletLoglModel;
use app\common\model\Banner as bannerModel;


class Index extends Controller
{
    public function Index()
    {
       //用户信息
       $lang=cookie('think_var');
       $this->assign('lang',$lang);
       $user = userModel::where('id',session('userid'))->find();
       $this->assign('user',$user);
       //用户的积分 钱
       $money = moneyModel::where('uid',session('userid'))->find();
       //轮播图
       $imgs = bannerModel::order('sort','asc')->select();
       //金积分记录
       $wallet = walletLoglModel::where('userid',session('userid'))->where('type','<>',11)->order('id desc')->limit(5)->select();
       //银积分记录
       $integral = integralLoglModel::where('userid',session('userid'))->where('type','<>',11)->order('id desc')->limit(5)->select();

      // //一天金额总记录
       // $todayStart = strtotime(date("Y-m-d",time()));//时间00:00:00
       // $todayEnd = $todayStart + 3600*24 - 1;//时间23:59:59
       // $count = walletLoglModel::where('userid',session('userid'))->where(['type'=>[4,5,6,7,8,15]])->where('create_time','between',[$todayStart,$todayEnd])->select();
       // $countmoney=0;
       // foreach ($count as $value) {
       //     $countmoney +=$value['money'];
       // }
       // $this->assign('countmoney',$countmoney);

       $this->assign('wallet',$wallet);
       $this->assign('integral',$integral);
       $this->assign('money',$money);
       $this->assign('imgs',$imgs);
       return $this->fetch();
    }
    /**
     * 瀑布流加载余额记录
     */
    public function redwallet(Request $request){
        if($request->isPost()){
            $page = $request->param('page');
            $limit1 = ($page - 1)  * 5;
            $limit2 = 5;
            //余额记录
            $wallet = DB::name('wallet_log')->where('userid',session('userid'))->where('type',4)->order('id desc')->limit($limit1,$limit2)->select();
            if($wallet){
                foreach ($wallet as $key => $val) {
                   $type= $this->getTypeAttr($val['type']);
                   $wallet[$key]['type']=lang($type);
                }
            }
            if(count($wallet) != 0){
                return array('status'=>1,'data'=>$wallet);
            }else{
                return array('status'=>0);
            }
        }
    }

    /**
     * 瀑布流加载余额记录
     */
    public function wallet(Request $request){
        if($request->isPost()){
            $page = $request->param('page');
            $limit1 = ($page - 1)  * 5;
            $limit2 = 5;
            //余额记录
            $wallet = DB::name('wallet_log')->where('userid',session('userid'))->where('type','<>',15)->order('id desc')->limit($limit1,$limit2)->select();
            if($wallet){
                foreach ($wallet as $key => $val) {
                   $type= $this->getTypeAttr($val['type']);
                   $wallet[$key]['type']=lang($type);
                   $wallet[$key]['create_time']=date("Y-m-d H:i:s", $wallet[$key]['create_time']);
                    if($val['type'] == 13 || $val['type'] == 14){
                        if('money' < 0){
                            $wallet[$key]['type'] = "余额卖出";
                        }else{
                            $wallet[$key]['type'] = "余额买入";
                        }
                    }
                }
            }

            if(count($wallet) != 0){
                return array('status'=>1,'data'=>$wallet);
            }else{
                return array('status'=>0);
            }
        }
    }
    public function getTypeAttr($value)
    {
        $status = [
            1 => '转款扣除', 2 => '收款增加', 3 => '兑换积分扣除', 4 => '红包', 5 => '余额转动奖', 6 => '直推奖', 7 => '兑换奖', 8 => '流通奖', 9 => 'VIP奖', 10 => '众筹花费', 11 => '后台充值', 12 => '后台扣除', 13 => '余额卖出', 14 => '余额买入',15=>'资产释放',16=>'退回保证金',17 =>'取消订单',18=>'向商家付款',19=>'商家收款',20=>'资产发布扣除',21=>'资产发布取消',22=>'资产购买扣除',23=>'资产出售余额增加'
        ];
        return $status[$value]; 
    }
  
    /**
     * 瀑布流加载积分记录
     */
    public function integral(Request $request){
        if($request->isPost()){
            $page = $request->param('page');
            $limit1 = ($page - 1)  * 5;
            $limit2 = 5;
            //余额记录
            $integral = DB::name('integral_log')->where('userid',session('userid'))->order('id desc')->limit($limit1,$limit2)->select();
            if($integral){
                foreach ($integral as $key => $val) {
                    $type= $this->getType($val['type']);
                    $integral[$key]['type']=lang($type);
                    $integral[$key]['create_time']=date("Y-m-d H:i:s", $integral[$key]['create_time']);
                 }
            }
            if(count($integral) != 0){
                
                return array('status'=>1,'data'=>$integral);
            }else{
                return array('status'=>0);
            }
        }
    }
    public function getType($value)
    {
        $status = [
            1=>'余额转动释放',2=>'直推奖励释放',3=>'兑换奖释放',4=>'流通奖释放',5=>'vip奖励',6=>'注册送积分',7=>'推荐奖励释放',8=>'兑换积分增加',9=>'转账获得',10=>'红包扣除',11=>'后台充值',12=>'后台扣除',13=>'挂卖返积分'
        ];
        return $status[$value]; 
    }
    /**
     * 用户积分记录
     */
    public function Exchangerecords()
    {
        //积分兑换记录
        $where['userid'] =  session('userid');
        $where['type'] = 8;
        $integral = integralLoglModel::where($where)->order('create_time desc')->select();
        $this->assign('integral',$integral);
        return $this->fetch();
    }

    /**
     *查询收款人信息
     */
    public function Turnout(Request $request)
    {
    if($request->isPost()){
        $mobile=$request->param('mobile');
        $map['id|mobile'] = $mobile;
        $userid=session('userid');
        $result=UserModel::where($map)->field('id,nickname')->find();
        if($result){
            if($userid == $result['id']){
                return array('status'=>0,'msg'=>lang('不能给自己转账哦'));
                exit();
            }
            return array('status'=>1,'data'=>$result['id']);
            exit();
        }else{
            return array('status'=>0,'msg'=>lang('不存在该用户'));
            exit();
        }
    }
     return $this->fetch();
    }

    /**
     * 进行转账
     */
    public function Changeout(Request $request)
    {
        $trid=$request->param('trid');//收款人id
        $payee=UserModel::where(['id'=>$trid])->field('id,mobile,head_img,nickname')->find();//收款人信息
        $transfer = rewardModel::where('group',20)->field('value')->find();
        if(request()->isAjax()){
            $uid = session('userid');
            $param=$request->param();
            $post_data = $param['post_data'];
            $paynums =$post_data['paynums'];//转款金额
            $pwd = $param['pwd'];//支付密码
            $trid = $post_data['trid'];//收款人id
            $mobile = $post_data['mobile'];//收款人后4位电话号码
            $yushu=$paynums%$transfer['value'];
            if($paynums<=0){
                return array('status'=>0,'msg'=>lang("您输入的转账金额有误"));
            }
            if($yushu){
                return array('status'=>0,'msg'=>"请输入".$transfer['value']."的整数倍");
            }
            if($paynums < $transfer['value']){
                return array('status'=>0,'msg'=>"转款最少金额为".$transfer['value']);
            }
            $result = UserModel::where('id',$trid)->field('mobile')->find();
            $result=substr($result['mobile'],-4);
            if($result != $mobile){
                return array('status'=>0,'msg'=>lang("您输入的手机号码后四位有误"));
            }
            if($uid==$trid){
                return array('status'=>0,'msg'=>lang("您不能给自己转账"));
            }
            $pay_pwd = UserModel::where('id',$uid)->field('safety_pwd')->find();//转账人支付密码
            if(encrypt($uid, $pwd) != $pay_pwd['safety_pwd']){
                return array('status'=>0,'msg'=>lang("支付密码错误"));
            }
            $payInfo = moneyModel::where('uid',$uid)->find();//转款人账户金额信息
            if($payInfo['wallet_num'] < $paynums){
                return array('status'=>0,'msg'=>lang("余额不足"));
            }
            $tper = $paynums * 20 / 100;//收款人20%的积分
            $eper = $paynums * 80 / 100;//转款人80%积分和收款人80%余额
            // 启动事务
            Db::startTrans();
            //转款人扣除余额,增加积分
            $payNewWallet = $payInfo['wallet_num'] - $paynums;
            $payNewIntegral = $payInfo['integral_num'] + $eper;//80%的积分
            $result1 = moneyModel::where('uid',$uid)->update(['wallet_num'=>$payNewWallet,'integral_num'=>$payNewIntegral]);
            //更新转款人等级
            $parents = new indexModel;
            $parents->CheckLevel($uid);
            //写入余额记录表
            $data['userid'] = $uid;
            $data['money'] = $paynums;
            $data['before_wallet'] = $payInfo['wallet_num'];
            $data['now_wallet'] = $payNewWallet;
            $data['type'] = 1;//代表转款人
            $data['second_people_id'] = $trid;//收款人id
            $data['create_time'] = time();
            walletLoglModel::insert($data);
            //写入积分记录表
            $data2['userid'] = $uid;
            $data2['num'] = $eper;
            $data2['before_integral'] = $payInfo['integral_num'];
            $data2['now_integral'] = $payNewIntegral;
            $data2['type'] = 9;//代表转账获得
            $data2['create_time'] = time();
            integralLoglModel::insert($data2);
            //收款人增加80%的余额和20%的积分
            $payeeInfo = moneyModel::where('uid',$trid)->find();//收款人账户金额信息
            $payeeNewWallet = $payeeInfo['wallet_num'] + $eper;
            $payeeNewIntegral = $payeeInfo['integral_num'] + $tper;
            // $result2 = moneyModel::where('uid',$trid)->update(['wallet_num'=>$payeeNewWallet,'integral_num'=>$payeeNewIntegral]);
            $result2 = moneyModel::where('uid',$trid)->setInc('wallet_num',$eper);
            $result3 = moneyModel::where('uid',$trid)->setInc('integral_num',$tper);
            //更新收款人等级
            $parents->CheckLevel($trid);
            //写入余额记录表
            $data3['userid'] = $trid;
            $data3['money'] = $eper;
            $data3['before_wallet'] = $payeeInfo['wallet_num'];
            $data3['now_wallet'] = $payeeNewWallet;
            $data3['type'] = 2;//代表收款人
            $data3['second_people_id'] = $uid;//打款人id
            $data3['create_time'] = time();
            walletLoglModel::insert($data3);
            //写入积分记录表
            $data4['userid'] = $trid;
            $data4['num'] = $tper;
            $data4['before_integral'] = $payeeInfo['integral_num'];
            $data4['now_integral'] = $payeeNewIntegral;
            $data4['type'] = 9;//代表转账获得
            $data4['create_time'] = time();
            integralLoglModel::insert($data4);
            //流通奖励和VIP奖励
            $this->liutong($paynums,$uid);//转出方父级20层得到流通奖励
            $this->vip($paynums,$uid);//VIP奖
            if($result1 && $result2 && $result3){
                // 提交事务
                Db::commit();
                return array('status'=>1,'msg'=>lang('转账成功'), 'url'=>"/mobile/Index/index");
            }else{
                // 回滚事务
                Db::rollback();
                return array('status'=>0,'msg'=>lang('转账失败'));
            }
        }
        return $this->fetch('',['user'=>$payee,'transfer'=>$transfer['value']]);
    }
 /**
    * 转出记录
   */
    public function Turncords()
    {
        $uid=session('userid');
        $where['userid']=$uid;
        $where['type']= 1;
        $wallet=walletLoglModel::where($where)->order('id desc')->select();
        if(count($wallet) !=0){
            foreach($wallet as $k=>$v){
                //收款人信息
                $get_users=UserModel::where('id',$v['second_people_id'])->field('nickname,head_img')->find();
                $wallet[$k]['name']=$get_users['nickname'];
                $wallet[$k]['head_img']=$get_users['head_img'];
            }
            $res=1;
        }else{
            $res=0;
        }
     $this->assign('wallet',$wallet);
     $this->assign('res',$res);
     return $this->fetch();
    }
    /**
     * 积分兑换
     */
    public function Exehange()
    {
        //当前余额和积分
        $money = moneyModel::where('uid',session('userid'))->find();
        //兑换比例
        $ratio = rewardModel::where('group',9)->field('value')->find();
        $exchange = rewardModel::where('group',21)->field('value')->find();

        if(request()->isPost()){
            $info = input('post.');
            //判断
            if($info['dhnums'] < $exchange['value']){
                $this->error('兑换金额不能小于'.$exchange['value']);
            }
            if($info['dhnums'] % $exchange['value'] != 0){
                $this->error('兑换金额不是'.$exchange['value'].'的倍数');
            }
            if($info['dhnums'] > $money['wallet_num']){
                $this->error(lang('兑换金额不足'));
            }
            //查询用户支付密码
            $user = userModel::where('id',session('userid'))->field('safety_pwd')->find();
            if(encrypt(session('userid'), $info['pwd']) == $user['safety_pwd']){

                //money表扣除余额 增加积分
                $data['integral_num'] = $money['integral_num'] + ($info['dhnums']*$ratio['value']);
                $data['wallet_num'] = $money['wallet_num'] - $info['dhnums'];
                moneyModel::where('uid',session('userid'))->update($data);
                //更新兑换人等级
                $parents = new indexModel;
                $parents->CheckLevel(session('userid'));
                //添加 积分、余额记录
                $integral['userid'] = session('userid');
                $integral['num'] = $info['dhnums']*$ratio['value'];
                $integral['type'] = 8;
                $integral['before_integral'] = $money['integral_num'];//交易之前的积分
                $integral['now_integral'] = $data['integral_num'];//交易之后的积分
                $integral['create_time'] = time();
                integralLoglModel::insert($integral);

                $wallet['userid'] = session('userid');
                $wallet['money'] = -$info['dhnums'];
                $wallet['type'] = 3;
                $wallet['before_wallet'] = $money['wallet_num'];//交易之前的余额
                $wallet['now_wallet'] = $data['wallet_num'];//交易之后的余额
                $wallet['create_time'] = time();
                walletLoglModel::insert($wallet);
                //产生分享奖
                $this->share($info['dhnums'],session('userid'));
                //产生兑换奖
                $this->duihuan($info['dhnums'],session('userid'));
                $this->success(lang('兑换成功'),'/mobile/Index/exehange');
            }else{
                $this->error(lang('密码错误'));
            }
        }
        $this->assign('ratio',$ratio['value']);
        $this->assign('money',$money);
        $this->assign('exchange',$exchange['value']);
        return $this->fetch();
    }

    /**
     * 直推奖励(兑换触发)
     */
    private function share($paynums,$id)
    {
        //分享奖比例
        $share = rewardModel::where('group',2)->field('value')->order('id asc')->select();
        //直推人数
        $renshu = rewardModel::where('group',25)->field('value')->order('id asc')->select();
        //获得当前用户的父级ID
        $fatherId = UserModel::where('id',$id)->field('parent_id')->find();
        //有效积分数
        $effective = rewardModel::where('group',22)->field('value')->find();
        if($fatherId['parent_id'] != 0) {
            //查询该父级是否存在
            $father = UserModel::where('id',$fatherId['parent_id'])->find();
            if($father){
                //获取当前父级等级
                $grade = userLevelModel::where('userid', $fatherId['parent_id'])->field('user_grade')->find();
                $gradeLevel = $grade['user_grade'];
                if($gradeLevel != 0){
                    //计算当前的父级直推人数
                    $team = userModel::where('parent_id',$fatherId['parent_id'])->select();
                    $num = count($team);
                    //查询有效直推人数
                    if($num != 0){
                        foreach ($team as $key=>$value){
                            //查询该父级的所有子集的积分数
                            $son_integral_num = moneyModel::where('uid',$value['id'])->field('integral_num')->find();
                            if($son_integral_num['integral_num'] < $effective['value']){
                                $num = $num - 1;
                            }
                        }
                    }
                    //推荐有效人数达到设置标准
                    if($num >= $renshu[$gradeLevel - 1]['value']){
                        //取当前父级的积分,余额
                        $money = moneyModel::where('uid', $fatherId['parent_id'])->field('integral_num,wallet_num')->find();
                        $reward = $paynums * $share[$gradeLevel - 1]['value'] / 100;//直推奖
                        if ($reward != 0) {
                            if ($reward >= $money['integral_num']) {
                                $reward = $money['integral_num'];
                            }
                            $new_integral = $money['integral_num'] - $reward;
                            $new_wallet = $money['wallet_num'] + $reward;
                            //积分减少相应的金额,余额增加相应的金额
                            moneyModel::where('uid', $fatherId['parent_id'])->update(['integral_num' => $new_integral, 'wallet_num' => $new_wallet]);
                            //写入积分记录表
                            $arr['userid'] = $fatherId['parent_id'];
                            $arr['num'] = -$reward;
                            $arr['type'] = 2;//2代表是分享奖释放
                            $arr['before_integral'] = $money['integral_num'];
                            $arr['now_integral'] = $new_integral;
                            $arr['create_time'] = time();
                            integralLoglModel::create($arr);
                            //更新等级
                            $parents = new indexModel;
                            $parents->CheckLevel($fatherId['parent_id']);
                            //写入余额记录表
                            $arr2['userid'] = $fatherId['parent_id'];
                            $arr2['money'] = +$reward;
                            $arr2['type'] = 6;//6代表是直推奖
                            $arr2['before_wallet'] = $money['wallet_num'];
                            $arr2['now_wallet'] = $new_wallet;
                            $arr2['create_time'] = time();
                            walletLoglModel::create($arr2);
                        }
                    }
                }
            }
        }
    }
    /**
     * 兑换奖(兑换触发)
     */
    private function duihuan($paynums,$id)
    {
        //兑换奖比例
        $duihuan = rewardModel::where('group',18)->field('value,tip')->order('id asc')->select();

        //兑换奖伞下代数
        $renshu = rewardModel::where('group',19)->field('value')->order('id asc')->select();
        //获取最大推荐人数
        $max = $renshu[4]['value'];
        //有效积分数
        $effective = rewardModel::where('group',22)->field('value')->find();
        $parents = new indexModel;
        //取父级userid
        $parentsInfo = $parents->GetParents($id,$max);
        if(count($parentsInfo) > 0){
            $daishu=array($duihuan[0]['tip'],$duihuan[1]['tip'],$duihuan[2]['tip'],$duihuan[3]['tip'],$duihuan[4]['tip']);
            foreach($parentsInfo as $k=>$v){
                if(!empty($v)){
                    //查询该父级是否存在
                    $father = UserModel::where('id',$v)->find();
                    if($father){
                        //取当前父级的积分,余额
                        $money = moneyModel::where('uid',$v)->field('integral_num,wallet_num')->find();
                        //计算当前的父级直推人数
                        $team = userModel::where('parent_id',$v)->select();
                        $num = count($team);
                        //查询有效直推人数(积分大于50)
                        if($num != 0){
                            foreach ($team as $key=>$value){
                                //查询该父级的所有子集的积分数
                                $son_integral_num = moneyModel::where('uid',$value['id'])->field('integral_num')->find();
                                if($son_integral_num['integral_num'] < $effective['value']){
                                    $num = $num - 1;
                                }
                            }
                        }
                        if($num >= $duihuan[0]['tip']){
                            $bili = 0;
                            foreach ($daishu as $kk=>$vv){
                                if($num >= $vv){
                                    $bili = $kk;
                                }else{
                                    break;
                                }
                            }
                            //获取当前条件下的伞下代数
                            $sanxia = $renshu[$bili]['value'];
                            //当前父级是第几代
                            $dai = $k + 1;
                            if($sanxia >= $dai){
                                $reward = $paynums*$duihuan[$bili]['value']/100;
                                if($reward != 0){
                                    if($reward >= $money['integral_num']){
                                        $reward = $money['integral_num'];
                                    }
                                    $new_integral = $money['integral_num'] - $reward;
                                    $new_wallet = $money['wallet_num'] + $reward;
                                    //积分减少相应的金额,余额增加相应的金额
                                    moneyModel::where('uid',$v)->update(['integral_num'=>$new_integral,'wallet_num'=>$new_wallet]);
                                    //写入积分记录表
                                    $arr['userid'] = $v;
                                    $arr['num'] = -$reward;
                                    $arr['type'] = 3;//3代表是兑换奖释放
                                    $arr['before_integral'] = $money['integral_num'];
                                    $arr['now_integral'] = $new_integral;
                                    $arr['create_time'] = time();
                                    integralLoglModel::create($arr);
                                    //更新等级
                                    $parents = new indexModel;
                                    $parents->CheckLevel($v);
                                    //写入余额记录表
                                    $arr2['userid'] = $v;
                                    $arr2['money'] = +$reward;
                                    $arr2['type'] = 7;//7代表是兑换奖
                                    $arr2['before_wallet'] = $money['wallet_num'];
                                    $arr2['now_wallet'] = $new_wallet;
                                    $arr2['create_time'] = time();
                                    walletLoglModel::create($arr2);
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    /**
     * 流通奖 (余额转出、支付触发)
     */
    private function liutong($paynums,$id)
    {
        $liutong = rewardModel::where('group',3)->field('value,tip')->order('id asc')->select();
        //流通奖伞下代数
        $renshu = rewardModel::where('group',17)->field('value')->order('id asc')->select();
        //有效积分数
        $effective = rewardModel::where('group',22)->field('value')->find();
        //获取最大推荐人数
        $max = $renshu[4]['value'];
        $parents = new indexModel;
        //取父级userid(20)
        $parentsInfo = $parents->GetParents($id,$max);
        if(count($parentsInfo) > 0){
            $daishu=array($liutong[0]['tip'],$liutong[1]['tip'],$liutong[2]['tip'],$liutong[3]['tip'],$liutong[4]['tip']);
            foreach($parentsInfo as $k=>$v){
                if(!empty($v)){
                    //查询该父级是否存在
                    $father = UserModel::where('id',$v)->find();
                    if($father){
                        //取当前父级的积分,余额
                        $money = moneyModel::where('uid',$v)->field('integral_num,wallet_num')->find();
                        //计算当前的父级直推人数
                        $team = userModel::where('parent_id',$v)->select();
                        $num = count($team);
                        //查询有效直推人数(积分大于50)
                        if($num != 0){
                            foreach ($team as $key=>$value){
                                //查询该父级的所有子集的积分数
                                $son_integral_num = moneyModel::where('uid',$value['id'])->field('integral_num')->find();
                                if($son_integral_num['integral_num'] < $effective['value']){
                                    $num--;
                                }
                            }
                        }
                        $bili = 0;
                        foreach ($daishu as $kk=>$vv){
                            if($num >= $vv){
                                $bili = $kk;
                            }else{
                                break;
                            }
                        }
                        //获取当前条件下的伞下代数
                        $sanxia = $renshu[$bili]['value'];
                        //当前父级是第几代
                        $dai = $k + 1;
                        if($sanxia >= $dai){
                            $reward = $paynums*$liutong[$bili]['value']/100;
                            if($reward != 0){
                                if($reward >= $money['integral_num']){
                                    $reward = $money['integral_num'];
                                }
                                $new_integral = $money['integral_num'] - $reward;
                                $new_wallet = $money['wallet_num'] + $reward;
                                //积分减少相应的金额,余额增加相应的金额
                                moneyModel::where('uid',$v)->update(['integral_num'=>$new_integral,'wallet_num'=>$new_wallet]);
                                //写入积分记录表
                                $arr['userid'] = $v;
                                $arr['num'] = -$reward;
                                $arr['type'] = 4;//4代表是流通奖释放
                                $arr['before_integral'] = $money['integral_num'];
                                $arr['now_integral'] = $new_integral;
                                $arr['create_time'] = time();
                                integralLoglModel::create($arr);
                                //更新等级
                                $parents = new indexModel;
                                $parents->CheckLevel($v);
                                //写入余额记录表
                                $arr2['userid'] = $v;
                                $arr2['money'] = +$reward;
                                $arr2['type'] = 8;//8代表是流通奖
                                $arr2['before_wallet'] = $money['wallet_num'];
                                $arr2['now_wallet'] = $new_wallet;
                                $arr2['create_time'] = time();
                                walletLoglModel::create($arr2);
                            }
                        }
                    }
                }
            }
        }
    }
    /**
     * @param VIP奖励(转账,支付触发)
     */
    private function vip($paynums,$id)
    {
        //vip奖励
        $vip = rewardModel::where('group',24)->field('value')->order('id asc')->select();
        $i = 0;
        $parents = new indexModel;
        //取父级userid(无限代)
        $parentsInfo = $parents->GetParents($id,100000000);
        if(count($parentsInfo) > 0){
            foreach($parentsInfo as $k=>$v){
                if(!empty($v)){
                    //查询该父级是否存在
                    $father = UserModel::where('id',$v)->find();
                    if($father){
                        //vip奖励
                        $grade = userLevelModel::where('userid',$v)->field('uservip_grade')->find();
                        $money = moneyModel::where('uid',$v)->field('integral_num')->find();
                        $vip_grade = $grade['uservip_grade'];
                        if($i == 0 && $vip_grade == 1){//一代父级VIP奖励
                            $vip_reward = $vip[0]['value'] / 100 * $paynums;
                            //积分增加相应的金额
                            moneyModel::where('uid',$v)->setInc('integral_num',$vip_reward);
                            //写入积分记录表
                            $arr['userid'] = $v;
                            $arr['num'] = +$vip_reward;
                            $arr['type'] = 5;//5代表是VIP奖
                            $arr['before_integral'] = $money['integral_num'];
                            $arr['now_integral'] = $money['integral_num'] + $vip_reward;
                            $arr['create_time'] = time();
                            integralLoglModel::create($arr);
                            //更新等级
                            $parents = new indexModel;
                            $parents->CheckLevel($v);
                            $i++;
                        }elseif ($i == 1 && $vip_grade == 1){
                            $vip_reward = $vip[1]['value'] / 100 * $paynums;
                            //积分增加相应的金额
                            moneyModel::where('uid',$v)->setInc('integral_num',$vip_reward);
                            //写入积分记录表
                            $arr['userid'] = $v;
                            $arr['num'] = +$vip_reward;
                            $arr['type'] = 5;//5代表是VIP奖
                            $arr['before_integral'] = $money['integral_num'];
                            $arr['now_integral'] = $money['integral_num'] + $vip_reward;
                            $arr['create_time'] = time();
                            integralLoglModel::create($arr);
                            //更新等级
                            $parents = new indexModel;
                            $parents->CheckLevel($v);
                            $i++;
                        }
                    }
                }
            }
        }
    }
    /**
     * 红包
     */
    public function redpay()
    {
        $uid = session('userid');

        $user = userModel::where(['id'=>$uid])->field('id,head_img')->find();

        //余额记录
       $wallet = walletLoglModel::where('userid',session('userid'))->where('type','<>',15)->order('id desc')->limit(5)->select();
       //积分记录
       $integral = integralLoglModel::where('userid',session('userid'))->order('id desc')->limit(5)->select();
       //一天金额总记录
       $todayStart = strtotime(date("Y-m-d",time()));//时间00:00:00
       $todayEnd = $todayStart + 3600*24 - 1;//时间23:59:59
       $count = walletLoglModel::where('userid',session('userid'))->where(['type'=>[4,5,6,7,8,15]])->where('create_time','between',[$todayStart,$todayEnd])->select();
       $countmoney=0;
       foreach ($count as $value) {
           $countmoney +=$value['money'];
       }
       $this->assign('countmoney',$countmoney);
       $this->assign('integral',$integral);
       $this->assign('wallet',$wallet);
       $this->assign('user',$user);

        return $this->fetch();
    }


}
