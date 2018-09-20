<?php /*a:2:{s:86:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/transaction/tran_dealrecords.html";i:1535790612;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    交易记录
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
    .yugejil{
        display: flex;
        justify-content: space-around;
        align-items: center;

    }
    /* .yugejil p{
        flex: 1;
    } */
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
        <div class="header_c"><h2><?php echo lang('交易记录'); ?></h2></div>
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
        <div class="yugejil"  style="width: 100%;position: absolute;top:50px;" >
            <p ><?php echo lang('甲方'); ?></p>
            <p ><?php echo lang('类型'); ?></p>
            <p ><?php echo lang('乙方'); ?></p>
            <p ><?php echo lang('数量'); ?></p>
            <p ><?php echo lang('总价'); ?></p>
            <p class="time"><?php echo lang('时间'); ?></p>
        </div>
        <div id="wrapper" style="width: 100%;position: absolute;top:90px;z-index: inherit;" >
            <div class="scroller">
                <ul>
                        <?php if(count($list)>0): if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>          
                             <p ><?php echo htmlentities($vo['users']['nickname']); ?></p>

                            <p ><?php echo htmlentities($vo['type']); ?></p>
                            <p ><?php echo htmlentities($vo['user']['nickname']); ?></p>
                            <p ><?php echo htmlentities($vo['num']); ?></p>
            
                            <p ><?php echo htmlentities($vo['tprice']); ?></p> 
                            <p class="time"><?php echo htmlentities($vo['create_time']); ?></p>
                        </li>
                       
                      <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </ul>
                <!--   <div class="more"><i class="pull_icon"></i><span>上拉加载...</span></div> -->
            </div>
        </div>
    </div>




   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $("#hide").click(function(){
                    $("#p1").toggle(); //toggle() 方法切换元素的可见状态。 如果被选元素可见,则隐藏这些元素,如果被选元素隐藏,则显示这些元素。
                });
            });

            $('.reveal-modal-bg').click(function () {
                $("#p1").toggle();
            })

            $('.coin').click(function () {
                $("#p1").toggle();
            })
         </script>

</body>
</html>