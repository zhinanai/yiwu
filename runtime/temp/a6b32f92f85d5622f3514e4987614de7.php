<?php /*a:2:{s:73:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/index/changeout.html";i:1535421736;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    转出
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
</style>
   
</head>
<body>

<div class="header">
    <div class="header_l">
    <a href="<?php echo url('/mobile/Index/turnout'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
    </div>
    <div class="header_c"><h2><?php echo lang('转出'); ?></h2></div>
    <div class="header_r"><a href="<?php echo url('/mobile/Index/Turncords'); ?>"><?php echo lang('转出记录'); ?></a></div>
</div>

   <div class="big_width100">
          <div class="oper_bg">
              <img src="<?php echo htmlentities($user['head_img']); ?>">
              <p><span class="nickname"><?php echo lang('昵称'); ?>:<?php echo htmlentities($user['nickname']); ?></span>&nbsp;&nbsp;&nbsp;<span>UID:<?php echo htmlentities($user['id']); ?></span></p>
                <input type="text" hidden value="<?php echo htmlentities($user['id']); ?>" class="trid">
       </div>

          <div class="turnAmount">

              <h4><?php echo lang('转出金额'); ?></h4>
              <div class="chooseCurrency">
                  <div class="chooseCurrency_l">
                    <!--   <div class="pay_list_c1"><p><input type="radio" name="identity" value="1"  class="radioclass"></p><span>CNY($)</span></div> -->
                      <div class="pay_list_c1 on"><p><input type="radio" name="identity" value="2" class="radioclass"/></p><span>RMB (¥) </span> </div>
                  </div>
                  <div class="chooseCurrency_r">
                      <input type="number" name="other_account" class="paynums" style="font-size:14px;" placeholder="请输入<?php echo htmlentities($transfer); ?>的整数倍" autocomplete="off" id="oper_1" >
                  </div>
              </div>

          </div>
       
       <div class="fill_sty">
           
           <p><?php echo lang('手机末4位'); ?></p>
               <input type="text" name="other_account" class="mobilelast" maxlength="4"   placeholder="<?php echo lang('请输入对方手机号末4位数'); ?>"  id="oper_2" onkeyup="value=value.replace(/[^\d]/g,'') " ng-pattern="/[^a-zA-Z]/">
       </div>

       <div class="buttonGeoup">
               <a href="javascript:void(0);" class="not_next ljzf_but " id="operConfirm"><?php echo lang('确认转出'); ?></a>
       </div>

       <!--浮动层-->
        <div class="ftc_wzsf" >
            <div class="srzfmm_box">
                <div class="qsrzfmm_bt clear_wl">
                    <img src="/static/mobile/images/xx_03.jpg" class="tx close fl">
                    <span class="fl"><?php echo lang('请输入支付密码'); ?></span></div>
                <div class="zfmmxx_shop">
                    <div class="mz"><?php echo lang('支付'); ?>:  <?php echo htmlentities($user['nickname']); ?></div>
                    <div class="zhifu_price">88.88</div></div>
                <ul class="mm_box">
                    <li></li><li></li><li></li><li></li><li></li><li></li>
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
   </div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script>
    $(".pay_list_c1").on("click",function(){
			  $(this).addClass("on").siblings().removeClass("on");
    })
    $('#operConfirm').on('click', function(){
		   var paytype = $(".pay_list_c1.on p input").val();//转账方式
		   var paynums=($('.paynums').val());//支付金额
		//    var reg = /(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)/;
             // var reg = /^[1-9]\d*00$/;

		   var mobila=$('.mobilelast').val();//手机号码后四位
            // var txye =parseFloat($.trim($('#oper_1').val())); //要兑换的数量 1-1200
            var exg = /^(([1-9]\d*)|\d)(\.\d{1,2})?$/;
		   if (paynums <= 0) {
				msg_alert('<?php echo lang("请输入正确的转账金额"); ?>');
               return;
           }

           var exg=/^\d{4}$/
			 if(!exg.test(mobila)){
				 msg_alert('<?php echo lang("请输入对方手机号末4位数"); ?>');
				 return;
			}
			$('.zhifu_price').text('¥'+paynums);
		   $(".ftc_wzsf").show();
		  });


		//获取数据传值
	   function Getvalue() {
           var paynums = Number($('.paynums').val());//支付金额
           var trid = $('.trid').val();//转账会员id
           var mobile=$('.mobilelast').val();//手机号码后四位
           var data={'paynums':paynums,'trid':trid,'mobile':mobile};
           return data;
       }

       // $(function(){
        //出现浮动层
        $(".ljzf_but").click(function(){
            // $(".ftc_wzsf").hide();
        });
        //关闭浮动
        $(".close").click(function(){
            $(".ftc_wzsf").hide();
            $(".mm_box li").removeClass("mmdd");
            $(".mm_box li").attr("data","");
            i = 0;
        });
            //数字显示隐藏
        $(".xiaq_tb").click(function(){
            $(".numb_box").slideUp(500);
        });
        $(".mm_box").click(function(){
            $(".numb_box").slideDown(500);
        });
            //----
        var i = 0;
        $(".nub_ggg li .zf_num").click(function(){
            if(i<6){
                $(".mm_box li").eq(i).addClass("mmdd");
                $(".mm_box li").eq(i).attr("data",$(this).text());
                i++
                if (i==6) {
                  setTimeout(function(){
                        var pwd = "";
                        $(".mm_box li").each(function(){
                            pwd += $(this).attr("data");
                         });

                      //ajax提交密码以及参数
                      var post_data=Getvalue();//获取上面的参数
          					  $.ajax({
          						  url:'/mobile/Index/Changeout',
          						  type:'post',
          						  data:{'post_data':post_data,'pwd':pwd},
          						  datatype:'json',
          						  success:function (mes) {
          							  if(mes.status == 1){
                              msg_alert(mes.msg,mes.url);
                              $(".ftc_wzsf").hide();
                              $(".mm_box li").removeClass("mmdd");
                              $(".mm_box li").attr("data","");
                              i = 0;
          							  }else{
                              msg_alert(mes.msg,'/mobile/Index/turnout');
                              $(".mm_box li").removeClass("mmdd");
                              $(".mm_box li").attr("data","");
                              i = 0;
          							  }
                        }
          					  })
                    },100);
              };
            }else{
              $(".numb_box").css('display',"none");
            }

        });
            
        $(".nub_ggg li .zf_del").click(function(){
            if(i>0){
                i--
                $(".mm_box li").eq(i).removeClass("mmdd");
                $(".mm_box li").eq(i).attr("data","");
            }
        });

        $(".nub_ggg li .zf_empty").click(function(){
            $(".mm_box li").removeClass("mmdd");
            $(".mm_box li").attr("data","");
            i = 0;
        });

</script>

</body>
</html>