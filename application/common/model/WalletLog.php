<?php

namespace app\common\model;

use think\Model;

class WalletLog extends Model
{

    protected $autoWriteTimestamp = true;
    public function getTypeAttr($value)
    {
        $status = [
            1 => '转款扣除', 2 => '收款增加', 3 => '兑换积分扣除', 4 => '红包', 5 => '余额转动奖', 6 => '直推奖', 7 => '兑换奖', 8 => '流通奖', 9 => 'VIP奖', 10 => '众筹花费', 11 => '后台充值', 12 => '后台扣除', 13 => '余额卖出', 14 => '余额买入',15=>'资产释放',16=>'退回保证金',17 =>'取消订单',18=>'向商家付款',19=>'商家收款',20=>'资产发布扣除',21=>'资产发布取消',22=>'资产购买扣除',23=>'资产出售余额增加',24=>'罚金',25=>'余额卖出返回'
        ];
        return $status[$value]; 
    } 
    protected $append = [

        'nickname',

    ];
    public function getNicknameAttr($value)
    {
        if($this->User){
            return $this->User->getData('nickname');
        }else{
            return '';
        }
        
    }
    public function User()
    {
        return $this->belongsTo('User', 'userid', 'id');
    }
}
