<?php /*a:2:{s:73:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/growth/purchase.html";i:1535595570;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 买入 </title>
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
    
<link rel="stylesheet" href="/static/mobile/css/yangStyle.css">
<style>
    body {
        background: #fff
    }
</style>
   
</head>
<body>

    <div class="header">
        <div class="header_l">
            <a href="<?php echo url('/mobile/Growth/buycenter'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
        </div>
        <div class="header_c"><h2><?php echo lang('买入'); ?></h2></div>
        <div class="header_r">
            <!-- <a href="javascript:void(0)" id="hide"><img src="/static/mobile/images/moer_icon.png" alt=""></a> -->
            <div id="p1">
                <div class="down"></div>
                <ul>
                    <li><a href="<?php echo url('/mobile/Growth/nofinsh'); ?>"><?php echo lang('未完成订单'); ?></a></li>
                    <li><a href="<?php echo url('/mobile/Growth/conpay'); ?>"><?php echo lang('确认打款'); ?></a></li>
                    <li><a href="<?php echo url('/mobile/Growth/dofinsh'); ?>"><?php echo lang('已完成订单'); ?></a></li>
                    <li><a href="<?php echo url('/mobile/Growth/buyrecords'); ?>"><?php echo lang('买入记录'); ?></a></li>
                    <li class="not"><a href="<?php echo url('/mobile/Growth/buycenter'); ?>"><?php echo lang('买入中心'); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="big_width100">
        <div class="choose_title"><h4><?php echo lang('请选择买入金额'); ?></h4></div>
        <div class="buy_aminy">
            <ul class="clear_wl">
                <li class="buyChecked"><span>500</span></li>
                <li class="buyChecked"><span>1000</span></li>
                <li class="buyChecked"><span>3000</span></li>
                <li class="buyChecked"><span>5000</span></li>
                <li class="buyChecked"><span>10000</span></li>
                <li class="buyChecked"><span>30000</span></li>
            </ul>
        </div>
     <!--已存在的银行卡-->
     <?php if(empty($result) || (($result instanceof \think\Collection || $result instanceof \think\Paginator ) && $result->isEmpty())): ?>
            <!--未添加银行卡-->
            <div class="addCard">
                    <a href="<?php echo url('/mobile/Growth/addbank'); ?>">+<?php echo lang('请添加银行卡'); ?>!</a>
            </div>
        <?php else: ?>
            <div class="haveCard">
                <div class="bdingcard"><a href="<?php echo url('/mobile/Growth/cardinfos'); ?>"><h4><?php echo lang('绑定银行卡'); ?></h4>
                    <p>&#62</p></a></div>
                <div class="cardInfo">
                    <p><?php echo htmlentities($result['AccountOpeningBank']['bank_name']); ?></p>
                    <p><?php echo htmlentities($result['cardnumber']); ?></p>
                    <p></p>
                    <input type="hidden" class="carnumber" value="<?php echo htmlentities($result['id']); ?>">
                </div>
                <div class="buttonGeoup">
                    <a href="javascript:void(0);" class="not_next ljzf_but " class="not_next" id="cuanjdd"><?php echo lang('创建订单'); ?></a>
                </div>
            </div>
        <?php endif; ?>
        <!--已存在的银行卡-->
        <div style="display: none;">
            <div class="trade_info_confirm">
                <p><?php echo lang('本次交易'); ?>:
                            <span class="todayUsedRatio">0.00</span></p>
                <p><?php echo lang('优惠折扣'); ?>
                    <span class="usedChain"><?php echo htmlentities($reward['2']['value']); ?></span>%
                </p>
                 <p><?php echo lang('优惠价'); ?>:
                    <span class="current_poundage">000</span>
                </p>
                <!-- <p>保证协议:
                    <span class="creent_fee_ratio">0000</span></p> --> 
               
            </div>
    </div>   
        <!--未添加银行卡-->
    </div>
    <!--浮动层-->
    <div class="ftc_wzsf">
        <div class="srzfmm_box">
            <div class="qsrzfmm_bt clear_wl">
                <img src="/static/mobile/images/xx_03.jpg" class="tx close fl">
    
                <span class="fl"><?php echo lang('请输入支付密码'); ?></span></div>
            <div class="zfmmxx_shop">
    
            </div>
            <ul class="mm_box">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="numb_box">
            <div class="xiaq_tb">
                <img src="/static/mobile/images/jftc_14.jpg" height="10"></div>
            <ul class="nub_ggg">
                <li><a href="javascript:void(0);" class="zf_num">1</a></li>
                <li><a href="javascript:void(0);" class="zj_x zf_num">2</a></li>
                <li><a href="javascript:void(0);" class="zf_num">3</a></li>
                <li><a href="javascript:void(0);" class="zf_num">4</a></li>
                <li><a href="javascript:void(0);" class="zj_x zf_num">5</a></li>
                <li><a href="javascript:void(0);" class="zf_num">6</a></li>
                <li><a href="javascript:void(0);" class="zf_num">7</a></li>
                <li><a href="javascript:void(0);" class="zj_x zf_num">8</a></li>
                <li><a href="javascript:void(0);" class="zf_num">9</a></li>
                <li><a href="javascript:void(0);" class="zf_empty"><?php echo lang('清空'); ?></a></li>
                <li><a href="javascript:void(0);" class="zj_x zf_num">0</a></li>
                <li><a href="javascript:void(0);" class="zf_del"><?php echo lang('删除'); ?></a></li>
            </ul>
        </div>
    </div>
    <!--已存在的银行卡-->
    <!--未添加银行卡-->
</div>



   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script>
        $(".buyChecked").on("click", function () {
                 $(this).addClass("on").siblings().removeClass("on");
             })
     
             $(document).ready(function () {
                 $("#hide").click(function () {
                     $("#p1").toggle(); 
                 });
             });
     
             $('#cuanjdd').on('click', function () {
             $("#p1").hide(); //toggle() 方法切换元素的可见状态。 如果被选元素可见,则隐藏这些元素,如果被选元素隐藏,则显示这些元素。
     
             var mairjie = $.trim($('.on').text()); //账号  //.trim() 去空格判断
             var exg = /^[1-9]\d*|0$/;
             if (!exg.test(mairjie)) {
                 msg_alert("<?php echo lang('请选择卖出金额'); ?>~");
                 return;
             }
             //是否存在银行卡
             var carnumber = $('.carnumber').val();
             if(carnumber == ''){
                 msg_alert('<?php echo lang("请添加银行卡"); ?>~');
                 return;
             }
             var sellnums = $.trim($('.on').text()); 
             var  usedChain = $.trim($('.usedChain').html()); 
             $('.trade_info_confirm .todayUsedRatio').html(sellnums);
             var money= sellnums  * usedChain / 100;
             $('.trade_info_confirm .current_poundage').html(money);
             var protocolIndex = layer.open({
                         title: [
                             '<?php echo lang("操作协议"); ?>',
                             'background-color: #ff992e; color: #fff; font-size: .4rem; height: .8rem; line-height: .8rem;'
                         ]
                         ,content: $('.trade_info_confirm').html()
                         ,btn: ['<?php echo lang("同意"); ?>', '<?php echo lang("取消"); ?>']
                         ,yes: function () {
                             layer.close(protocolIndex);
                             $(".ftc_wzsf").show();
                         }
                     });
         });
     
         $(function () {
             //关闭浮动
             $(".close").click(function () {
                 $(".ftc_wzsf").hide();
                 $(".mm_box li").removeClass("mmdd");
                 $(".mm_box li").attr("data", "");
                 i = 0;
             });
             //数字显示隐藏
             $(".xiaq_tb").click(function () {
                 $(".numb_box").slideUp(50000);
             });
             $(".mm_box").click(function () {
                 $(".numb_box").slideDown(50000);
             });
             //----
             var i = 0;
             $(".nub_ggg li .zf_num").click(function () {
     
                 if (i < 6) {
                     $(".mm_box li").eq(i).addClass("mmdd");
                     $(".mm_box li").eq(i).attr("data", $(this).text());
                     i++
                     if (i == 6) {
                         setTimeout(function () {
                             var pwd = "";
                             $(".mm_box li").each(function(){
                                 pwd += $(this).attr("data");
                             });
                             //AJAX提交数据
                             var sellnums = $.trim($('.on').text()); 
                             var cardid = $('.carnumber').val();//银行卡id
                             var messge = $('.messge').val();
                             var exg = /^[1-9]\d*|0$/;
                             if (!exg.test(sellnums)) {
                                 msg_alert('<?php echo lang("请选择买入金额~"); ?>');
                                 return;
                             }
                             if (cardid == '') {
                                 msg_alert('<?php echo lang("请选择银行卡~"); ?>');
                                 return;
                             }
                             $.ajax({
                                 url:'',
                                 type:'post',
                                 data:{'money':sellnums,'pwd':pwd,'cardid':cardid,'remarks_name':messge},
                                 datatype:'json',
                                 success:function (mes) {
                                     if(mes.status == 1){
                                         msg_alert(mes.msg);
                                         $(".ftc_wzsf").hide();
                                         $(".mm_box li").removeClass("mmdd");
                                         $(".mm_box li").attr("data","");
                                         i = 0;
                                     }else{
                                         msg_alert(mes.msg);
                                         $(".mm_box li").removeClass("mmdd");
                                         $(".mm_box li").attr("data","");
                                         i = 0;
                                     }
                                 }
                             })
                         }, 100);
                     };
                 }
             });
     
             $(".nub_ggg li .zf_del").click(function () {
                 if (i > 0) {
                     i--
                     $(".mm_box li").eq(i).removeClass("mmdd");
                     $(".mm_box li").eq(i).attr("data", "");
                 }
             });
     
             $(".nub_ggg li .zf_empty").click(function () {
                 $(".mm_box li").removeClass("mmdd");
                 $(".mm_box li").attr("data", "");
                 i = 0;
             });
     
         });
     </script>
 
</body>
</html>