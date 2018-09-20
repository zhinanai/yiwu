<?php /*a:2:{s:74:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/trading/selldets.html";i:1535541834;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>

    交易

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
    

<link rel="stylesheet" href="/static/mobile/css/yangStyle.css">

<style>
    .sell_annal_ul{box-sizing: content-box}
</style>

   
</head>
<body>


<div class="header">

        <div class="header_l">

                <a href="<?php echo url('/mobile/index/index'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>

        </div>

        <div class="header_c"><h2><?php echo lang('交易'); ?></h2></div>

        <!--<div class="header_r"><a href="/Growth/Buyrecords.html">记录</a></div>-->

    </div>

    

    <div class="big_width100">

        <div class="trade_choose flex">

            <a href="<?php echo url('/mobile/Growth/buycenter'); ?>"><?php echo lang('买入'); ?></a>

            <a href=""  class="choosed"><?php echo lang('卖出'); ?></a>

        </div>

        <div class="choose_title">

            <h4><?php echo lang('请选择卖出金额'); ?></h4>

        </div>

        <div class="buy_aminy br-b">

            <ul class="clear_wl investment_title">

                <li class="buyChecked on"><span>500</span></li>

                <li class="buyChecked"><span>1000</span></li>

                <li class="buyChecked"><span>3000</span></li>

                <li class="buyChecked"><span>5000</span></li>

                <li class="buyChecked"><span>10000</span></li>

                <li class="buyChecked"><span>30000</span></li>

            </ul>

        </div>

    

        <div class="investment_f">

                <div class="investment_con">

                    <div class="investment_con_list">

                        <div class="sell_annal_ul">

                           

                        </div>

                    </div>

                </div>

            </div> 

    </div>

    <div class="sell_tab flex">

        <a href="<?php echo url('/mobile/Trading/sell'); ?>"><?php echo lang('创建订单'); ?></a>

        <a href="<?php echo url('/mobile/Trading/sellerrecords'); ?>"><?php echo lang('卖出记录'); ?></a>

        <div  class="myorder">

            <span><?php echo lang('我的卖单'); ?></span>

            <div class="order_box">

                <div class="order_list">

                    <a href="<?php echo url('/mobile/Trading/nofinsh'); ?>"><?php echo lang('未完成订单'); ?></a>

                    <a href="<?php echo url('/mobile/Trading/conpayd'); ?>"><?php echo lang('确认收款'); ?></a>

                    <a href="<?php echo url('/mobile/Trading/dofinsh'); ?>"><?php echo lang('已完成订单'); ?></a>

                </div>

                <div class="jiantou"></div>

            </div>

        </div>

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

        <div class="hbbj"></div>

    </div>

    



   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>


<script>

 $(function () {

        var money = Number($(this).text());

        $('.buyChecked').on('click',function(){

            var money = Number($(this).text());

            drapdata(money);    

        })

        drapdata(money);

        $('.myorder').click(function(){

            $(".order_box").toggle();

        })

    function drapdata(money){

        var winH = $(window).height(); //页面可视区域高度

        //设置当前页数

        var page = 1;

        $(window).scroll(function () {

            money = Number($('.on').text());

            var pageH = $(document.body).height();

            var scrollT = $(window).scrollTop(); //滚动条top

            var aa = (pageH - winH - scrollT) / winH;

            if (aa < 0.02) {

                page++;

                $.ajax({

                    type: 'GET',

                    url: '/mobile/Growth/buycenter?money=' + money,

                    data: { page: page },

                    dataType: 'json',

                    success: function (data) {

                        var str = "";

                        if (data.status == 1) {

                            $.each(data.msg, function (key, val) {

                                str += '<div class="sell_annal_ul">';

                                str += '<div class="sell_annal_ul_l">';

                                str += '<img src=" ' + val.users_headimg + '" a lt="" class="tuoux">';

                                str += '<div class="sell_annal_p">';

                                str += '<p><span>' + val.users_nickname + '</span></p >';

                                // str += '<p>备注:';

                                // str += '<span>' + val.remarks_name + '</span>';

                                str += '</p >';

                                str += '</div></div>';

                                str += '<div class="sell_annal_ul_r">';

                                str += '<p><span><?php echo lang("交易金额"); ?>' + val.money + 'RMB</span></p >';

                                 str += '<p><?php echo lang("支付方式"); ?>：' +  val.tomoney  + ' RMB</p >';

                                str += '</div>';

                                str += '<div class="sell_chus">';

                                str += '<p><?php echo lang("支付方式"); ?>：' + val.bank_name + '</p >';

                                str += '</div>';

                                str += '<div class="sell_chusa">';

                                str += '<a href="javascirpt:void(0)" onclick="Buyit(this)" data-id =' + val.id + '><?php echo lang("卖出"); ?></a>';

                                str += '</div></div>';

                                str += '</tr>';

                            });

                            $('.investment_con .investment_con_list').append(str);

                       

                        } else {



                        }

                    }

                });

            }

        });

    }

    });





            $(function () {

        /*tab标签切换*/

        function tabs(tabTit, on, tabCon) {

            $(tabCon).each(function () {

                $(this).children().eq(0).show();

            });

            $(tabTit).each(function () {

                $(this).children().eq(0).addClass(on);

            });



            $(tabTit).children().click(function () {

                $(this).addClass(on).siblings().removeClass(on);

                var index = $(tabTit).children().index(this);

                $(tabCon).children().eq(index).show().siblings().hide();

                Ischecked();

            });

        }



        tabs(".investment_title", "on", ".investment_con");

        Ischecked();





    })



    //执行购买操作

    function Buyit(e) {

        var trid = $(e).attr('data-id');

        if(trid == ''){

            msg_alert('<?php echo lang("请选择对应数量买入"); ?>');

        }

        $(".ftc_wzsf").show();

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

                        var sellnums = $.trim($('.on').text()); //账号  //.trim() 去空格判断

                        var cardid = $('.carnumber').val();//银行卡id

                        var exg = /^[1-9]\d*|0$/;

                        if (!exg.test(sellnums)) {

                            msg_alert('<?php echo lang("请选择买入金额"); ?>~');

                            return;

                        }

                        if (cardid == '') {

                            msg_alert('<?php echo lang("请选择银行卡"); ?>');

                            return;

                        }

                        $.ajax({

                            url:'/mobile/Trading/dosells',

                            type:'post',

                            data:{'trid':trid,'pwd':pwd},

                            datatype:'json',

                            success:function (mes) {

                                if(mes.status == 1){

                                    msg_alert(mes.msg);

                                    setTimeout(function(){

                                        window.location.href = "/mobile/Trading/conpayd";

                                    },1000)

                                    Ischecked();

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

                    }, 300);

                };

            }

        });



        $(".xiaq_tb").click(function () {

            $(".numb_box").slideUp(500);

        });

        $(".mm_box").click(function () {

            $(".numb_box").slideDown(500);

        });



        $(".close").click(function () {

            $(".ftc_wzsf").hide();

            $(".mm_box li").removeClass("mmdd");

            $(".mm_box li").attr("data", "");

            i = 0;

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

    }



    function Ischecked() {

        var mvalue = Number($('.on').text());

        if(mvalue == ''){

            msg_alert('<?php echo lang("请选择订单金额"); ?>');

            return false;

        }

        //传值返回

        $.ajax({

            url:'',

            type:'post',

            data:{'money':mvalue},

            datatype:'json',

            success:function (mes) {

                var str = '';

                if(mes.status == 1){

                    $.each(mes.msg, function (key, val) {

                        str += '<div class="sell_annal_ul">';

                        str += '<div class="sell_annal_ul_l">';

                        str += '<img src=" ' + val.user_headimg + '" a lt="" class="tuoux">';

                        str += '<div class="sell_annal_p">';

                        str += '<p><span>' + val.user_nickname + '</span></p >';

                        str += '</p >';

                        str += '</div></div>';

                        str += '<div class="sell_annal_ul_r">';

                        str += '<p><span><?php echo lang("交易金额"); ?>' + val.money + 'RMB</span></p >';

                        str += '<p><?php echo lang("实付金额"); ?>：' +  val.tomoney  + ' RMB</p >';

                        str += '</div>';

                        str += '<div class="sell_chus">';

                        str += '<p><?php echo lang("支付方式"); ?>：' + val.bank_name + '</p >';

                        str += '</div>';

                        str += '<div class="sell_chusa">';

                        str += '<a href="javascirpt:void(0)" onclick="Buyit(this)" data-id =' + val.id + '><?php echo lang("卖出"); ?></a>';

                        str += '</div></div>';

                        str += '</tr>';

                    });

                    $('.investment_con  .investment_con_list').html(str);

                }else{

                    str += '<div class="annalWa">';

                    str += '<p><?php echo lang("没找到相关记录"); ?></p></div>';

                    $('.investment_con  .investment_con_list').html(str);

                }

            }

        })

    }



    </script>


</body>
</html>