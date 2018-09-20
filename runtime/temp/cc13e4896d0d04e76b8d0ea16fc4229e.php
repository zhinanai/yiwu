<?php /*a:2:{s:85:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/transaction/tran_orderinfos.html";i:1535790612;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    众筹项目记录
</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/mobile/css/global.css"/>
    <link rel="stylesheet" href="/static/mobile/css/swiper.min.css"/>
    <link rel="stylesheet" href="/static/mobile/css/footer.css"/>
    <link rel="stylesheet" href="/static/mobile/js/dist/dropload.css"/>
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_698151_ecrzuynt8d1gu8fr.css">
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_759057_pq7xcbkbnu.css">
    
<link rel="stylesheet" href="/static/mobile/css/meCen.css"/>
<link rel="stylesheet" href="/static/mobile/css/fanStyle.css"/>
<link rel="stylesheet" href="/static/mobile/js/layui/css/layui.css"/>
<style>
    .pgoumai {
        font-size: 14px;
        color: #ff2929;
        text-align: center;
        display: block;
        border-radius: 22px;
        line-height: 22px;
        /* border: 1px solid #ff2929; */
        width: 10%;
        margin-right: 1vmin;
    }
    .yugejil{
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    .yugejil p{
        flex: 1;
    }
    .yugejil p.time{
        flex:2;
    }
    .scroller ul li{
        display: flex;
        flex-wrap: nowrap;
        align-items: center;
    }
    #wrapper .scroller ul li p{
        flex:1;
    }
    #wrapper .scroller ul li p.time{
        flex:2;
        font-size: .24rem;
        color:#666;
    }
</style>
   
</head>
<body>

<div class="header">
    <div class="header_l">
        <a href="<?php echo url('/mobile/Transaction/balance_trade'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
    </div>
    <div class="header_c"><h2><?php echo lang('订单记录'); ?></h2></div>
    <div class="header_r" ><a href="javascript:void(0)" id="hide" ><img src="/static/mobile/images/youmore_n1.png" alt=""></a>
        <div id="p1">
            <div class="down"></div>
            <div class="xsh">
                <ul class="coin">
                    <li><a href="">易物币</a></li>
                    <li><a href="">Bitcoin</a></li>
                    <li><a href="">Ethereum</a></li>
                    <li><a href="">USDT</a></li>
                    <li class="off"><a href="">TRX</a></li>
              </ul>
            </div>
            <div class="reveal-modal-bg"></div>
        </div>
    </div>
</div>

<div class="big_width100">
    <div class="investment_f" >
        <div class="investment_title">
            <div  class="<?php if($status==1): ?>on<?php endif; ?>"> <a href="<?php echo url('/mobile/Transaction/tran_orderinfos',['status'=>1]); ?>"><?php echo lang('运行中'); ?></a></div>
            <div class="<?php if($status==2): ?>on<?php endif; ?>"><a href="<?php echo url('/mobile/Transaction/tran_orderinfos',['status'=>2]); ?>"><?php echo lang('已完成'); ?></a></div>
        </div>
    </div>
<div >

    <div class="yugejil"  style="width: 100%;position: absolute;top:111px;" >
        <p><?php echo lang('类型'); ?></p>
        <p><?php echo lang('数量'); ?></p>
        <p><?php echo lang('总价'); ?></p>
        <p class="time"><?php echo lang('时间'); ?></p>
        <p><?php echo lang('操作'); ?></p>

        
     
    </div>

    <div id="wrapper" style="width: 100%;position: absolute;top:151px;z-index: inherit;" >
        <div class="scroller">
            <ul>
            
            <!-- <eq name="step" value='2'>
                 <foreach name="list" item="v">

                    <?php 
                    $arrayn=array(1=>"",2=>"比特币",3=>"莱特币",4=>"以太坊",5=>"狗狗币");
                    ?>
                        <li>
                         
                         <p style="width:15%;"><eq name="v['type']" value='2'>123<else />123</eq></p>
                            <p style="width:35%;">123</p>
                            <p style="width:20%;">123</p>

                            <p style="width:30%;">123</p>

                        </li>
                    </foreach>

            <else /> -->
            <?php 
                            $arrayn=array(1=>"",2=>"比特币",3=>"莱特币",4=>"以太坊",5=>"狗狗币");
                            if(count($list)>0): if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                             
                 <p class="assetid" style="display:none"><?php echo htmlentities($vo['id']); ?></p>           
                <p ><?php if($vo['type'] == 1): ?><?php echo lang('出售'); else: ?> <?php echo lang('购买'); endif; ?>
                </p>
                <p ><?php echo htmlentities($vo['num']); ?></p>

                 <p ><?php echo htmlentities($vo['tprice']); ?></p> 
                <p class="time"><?php echo htmlentities($vo['create_time']); ?></p>
                 <?php if($status==1): ?>
                    <p  class="pgoumai"><button class="quxiao" ><?php echo lang('取消'); ?></button></p>
                <?php else: ?><p ><?php echo lang('已完成'); ?></p>  
                  <?php endif; ?>      

                </li>
          <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </eq>            

            </ul>
         
          <!--   <div class="more"><i class="pull_icon"></i><span>上拉加载...</span></div> -->
        </div>
    </div>

</div>
</div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script type="text/javascript" src="/static/mobile/js/transaction/tran_orderinfos.js"></script>

</body>
</html>