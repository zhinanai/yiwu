<?php
namespace app\mobile\controller;

use think\Db;
use think\File;
use think\Controller;
use think\facade\Request;
use Endroid\QrCode\QrCode;
use app\common\model\User;
use app\common\model\Reward;
use app\common\model\Bandcard;
use app\common\model\Buy_order;
use app\common\model\Sell_order;
use app\common\model\WalletLog;
use app\common\model\AccountOpeningBank;


class Growth extends Controller
{
    public function intro()
    {
        return $this->fetch();
    }
    /**
     * 二维码
     */
    public function createCode()
    {
        //获取当前用户ID
        $id = session('userid');
        $url = Request::root(true) . '/mobile/Index/Changeout/trid/' . $id;
        $qrCode = new QrCode($url);
        $qrCode->setSize(200);
        $qrCode->setErrorCorrectionLevel('high');
        $qrCode->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0));
        $qrCode->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0));
        $qrCode->setLabelFontSize(16);
        header('Content-Type: ' . $qrCode->getContentType());
        echo $qrCode->writeString();
        exit;
    }
    /**
     * 转入记录
     */
    public function introrecords()
    {
        $uid=session('userid');
        $where['userid']=$uid;
        $where['type'] = 2;
        $wallet=walletLog::where($where)->order('id desc')->select();
        if(count($wallet) !=0){
        foreach ($wallet as $k => $v) {
            //打款人信息
            $users = User::where(array('id' => $v['second_people_id']))->field('nickname')->find();
                $wallet[$k]['name'] = $users['nickname'];
            }
                $res=1;
            }else{
                $res=0;
            }
        $this->assign('wallet', $wallet);
        $this->assign('res',$res);
        return $this->fetch();
    }
    public function paidimg()
    {
        $request = request();
        $id = $request->param('id');
        $list = Buy_order::where('id', $id)->find();
        return $this->fetch('', ['list' => $list]);
    }
    public function purchase()
    {
        $request = request();
        $user_id = session('userid');
        $bid = $request->param('bid');
        if (empty($bid)) {
            $result = Bandcard::where('status', 1)->where('user_id', $user_id)->find();
        } else {
            $result = Bandcard::where('id', $bid)->find();
        }
       $reward =Reward::all('23,25,28');
        if ($request->isPost()) {
            $pwd = $request->param('pwd');
            $Verification = encrypt($user_id, $pwd);
            if (!$Verification) {
                return array('status' => 0, 'msg' =>lang('密码错误'));
            }
            $money = $request->param('money');
            $tomoney = $money * $reward['2']['value'] / 100 ;
            $band_card_id = $request->param('cardid');
            $data = [
                'buy_id' => $user_id,
                'money' => $money,
                'band_card_id' => $band_card_id,
                'create_time' => time(),
                'trading_state' => 2,
                'discount_ratio' => $reward['2']['value'],
                'tomoney'       => $tomoney,
            ];
            $result = Buy_order::create($data);
            if ($result->id) {
                return array('status' => 1, 'msg' => lang('创建订单成功'), 'url' => "/mobile/Growth/purchase");
            } else {
                return array('status' => 0, 'msg' => lang('创建订单失败'));
            }

        }
        return $this->fetch('', ['result' => $result,'reward' => $reward]);
    }
    /*
     * 添加银行卡
     */
    public function addbank()
    {
        $Account_opening_bank = AccountOpeningBank::select();
        return $this->fetch('', ['account_opening_bank' => $Account_opening_bank]);
    }
    public function doaddbank()
    {
        $request = request();
        $param = $request->param();
        $user_id = session('userid');
        $param['user_id'] = $user_id;
        $token = $request->param('token');
        if ($token != session('__token__')) {
            return array('status' => 0, 'msg' => lang('添加异常'));
        }
        if(empty($request->param('name')) && empty($request->param('open_id')) && empty($request->param('cardnumber')) && empty($request->param('account_opening_branch'))){
            return array('status' => 0, 'msg' => lang('请填写有效数据'));
        }
        // $data = [
        //     '__token__' => $token,
        // ];
        // $rule = [
        //     '__token__' => 'token',
        // ];
        // $msg = [
        //     '__token__.require' => '非法操作',
        //     '__token__.token'   => '重复提交表单'
        // ];
        // $validate   = \Validate::make($rule,$msg);
        // if (!$validate->check($data)) {
        //     $this->error($validate->getError());
        // }
        $result = Bandcard::create($param);
        if ($result->id) {
            empty($param['status']) ? '' : $this->default_banker();
            return array('status' => 1, 'msg' => lang('添加成功'), 'url' => "/mobile/Growth/purchase");
        } else {
            return array('status' => 0, 'msg' => lang('添加失败'));
        }

    }
    /**
     * 银行卡列表
     */
    public function cardinfos()
    {
        $user_id = session('userid');
        $list = Bandcard::where('user_id', $user_id)->select();
        $request = request();
        $sell = $request->param('sell');
        if ($request->isPost()) {
            $id = $request->param('id');
            $data = Bandcard::destroy($id);
            if ($data) {
                return ['status' => 1, 'msg' => lang('删除成功'), 'url' => '/mobile/Growth/Cardinfos/sell/' . $sell];
            } else {
                return ['status' => 0, 'msg' => lang('删除失败')];
            }
        }
        return $this->fetch('', ['list' => $list, 'sell' => $sell]);
    }
    public function default_banker()
    {
        $user_id = session('userid');
        $result = Bandcard::where('user_id', $user_id)->where('status', 1)->find();
        $result->status = 1;
        $data = $result->save();
        return $data;
    }
    /**
    *  未选择收款人 已选择收款人(status/1)
    */
    public function nofinsh()
    {
        $user_id = session('userid');
        $request = request();
        $status = $request->param('status', '0');
        $list = Buy_order::where("buy_id", $user_id)->where("status", $status)->order('id desc')->select();
        return $this->fetch('', ['list' => $list, 'status' => $status]);
    }
    public function conpay()
    {
        $user_id = session('userid');
        $request = request();
        $list = Buy_order::where("status", 1)->where("buy_id", $user_id)->order('id desc')->select();
        if ($request->isPost()) {
            $file = $request->file('pic');
            $id = $request->param('id');
            $pic = fileupload($file);
            $update='';
            if($pic){          
              $data = [
                'pic' => $pic,
                'buy_id'    =>  $user_id,
                'buy_time'  =>  time(),
                ];
             $update = Buy_order::where('id', $id)->update($data);
            }
            if ($update) {
                return array('status' => 1, 'msg' =>lang('上传凭证成功'));
            } else {
                return array('status' => 0, 'msg' => lang('上传凭证失败'));
            }

        }
        return $this->fetch('', ['list' => $list]);
    }
    public function dofinsh()
    {
        $user_id = session('userid');
        $list = Buy_order::where("status", 3)->where("buy_id", $user_id)->order('id desc')->select();
        return $this->fetch('', ['list' => $list]);
    }
    public function buyrecords()
    {
        $user_id = session('userid');
        $list = Buy_order::where("buy_id", $user_id)->select();
        foreach ($list as $key => $value) {
            if($value['sell_id'])
            {
                $user = User::where('id', $value['sell_id'])->find();
                $value['user_nickname'] = $user['nickname'];
            }
        }
        return $this->fetch('', ['list' => $list]);
    }
    public function cancellation_of_order()
    {
        $user_id = session('userid');
        $id = request()->param('id');
        $buy_order = Buy_order::where('id', $id)->find();
        //判断是否有该订单和该买家取消的订单是否是自己的订单
        if(!$buy_order || ($user_id != $buy_order['buy_id'])){
            return array('status' => 0, 'msg' => "请勿非法操作");
        }
        $money = $buy_order->money + $buy_order->bond + $buy_order->fee;
        Db::startTrans();
        $update = Buy_order::where('id', $id)->update(['status'=>3,'sell_cancel_time'=>time()]);
        if ($update!==false) {
            if ($buy_order->trading_state == 2) {
                //发布的买单
                if($buy_order->sell_id!=null){
                    accountLog($buy_order->sell_id, +$money, "买家取消交易", 0, 0, +$money, 0);
                    $data['status']=1;
                    $data = sale_amount($buy_order->sell_id, -$money, 1, 0,1,17,0);

                }else{
                    accountLog($buy_order->buy_id, +$money, "买家取消交易", 0, 0, +$money, 0);
                    $data['status']=1;

                }
            } else {
                accountLog($buy_order->sell_id, +$money, "买家取消交易", 1, 0, +$money, 0);
                $data = sale_amount($buy_order->sell_id, -$money, 1, 0,1,17,0,0);
            }
            if ($data['status'] == 1) {
                Db::commit();
                return array('status' => 1, 'msg' => "取消订单成功");
            }

        }
        Db::rollback();
        return array('status' => 0, 'msg' => "取消订单失败");

    }
    /*
     *买入中心
     */
    public function buycenter()
    {
        $request = request();
        $page = $request->param('page');
        $money = $request->param('money');
        if ($request->isAjax()) {
            $list = Buy_order::where('money', '=', $money)->where('status', 0)->where('trading_state', 1)->order('id desc')->paginate(10, false, [
                'page' => $page,
            ]);
            $result = $list->items();
            if ($result) {
                foreach ($result as $k => $v) {
                    $name = AccountOpeningBank::where('id', $v['bandcard']['open_id'])->field('bank_name')->find();
                    $result[$k]['bank_name'] = $name['bank_name'];
                    if (empty($v['remarks_name'])) {
                        $result[$k]['remarks_name'] = ' ';
                    }
                }
                return array('status' => 1, 'msg' => $result);
            } else {
                return array('status' => 0, 'msg' => lang('没有找到相关'));
            }

        }
        return $this->fetch();
    }

    public function dopurs()
    {
        $user_id = session('userid');
        $request = request();
        $pwd = $request->param('pwd');
        $Verification = encrypt($user_id, $pwd);
        if (!$Verification) {
            return array('status' => 0, 'msg' => lang('密码错误'));
        }
        $id = $request->param('trid');
        $Buy_order = Buy_order::where('id', $id)->find();
        if ($Buy_order->sell_id == $user_id) {
            return array('status' => 0, 'msg' => lang('无法购买自己上架的'));
        }
        $data = array('status' => 1, 'buy_id' => $user_id,  'update_time'=>time());
        $update = Buy_order::where('id', $id)->update($data);
        if ($update) {
            return array('status' => 1, 'msg' => lang('买入成功'));
        } else {
            return array('status' => 0, 'msg' => lang('买入失败'));
        }
        return array('status' => 0, 'msg' => lang('网路异常'));

    }

}