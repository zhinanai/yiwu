<?php /*a:2:{s:72:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/index/exehange.html";i:1535421736;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    兑换积分
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
            <a href="javascript:history.go(-1);"><img src="/static/mobile/images/jiant.png" alt=""></a>
	    </div>
	    <div class="header_c"><h2><?php echo lang('兑换积分'); ?></h2></div>
	    <div class="header_r"><a href="<?php echo url('/mobile/index/Exchangerecords'); ?>"><?php echo lang('兑换记录'); ?></a></div>
	</div>
	<div class="big_width100">
			<div class="centBalance">
				 <div class="Balance">
					 <a class="balance" href="javascript:;">
						 <!-- <img src="/static/mobile/images/index/libao.png" alt=""> -->
						 <div><i class="iconfont icon-yue"></i></div>
						 <div class="info">
							 <p><?php echo lang('我的余额'); ?></p>
							 <strong><span  class="yue" id="money"><?php echo htmlentities($money['wallet_num']); ?></span></strong>
						 </div>		
					 </a>	
				 </div>

				 <div class="Balance">	
					 <a class="balance" href="javascript:;">
						 <!-- <img src="/static/mobile/images/index/zuan.png"> -->
						 <div><i class="iconfont icon-jifen"></i></div>
						 <div class="info">
							 <p><?php echo lang('我的积分'); ?></p>
							 <strong><span class="jifen"><?php echo htmlentities($money['integral_num']); ?></span></strong>
						 </div>
					 </a>
				 </div>
		  </div>
		  
		  <div class="duihuanjif">
			  <p><?php echo lang('兑换成积分'); ?></p>
		  </div>
		  <div class="fill_sty fill_sty_bor">
				<p><?php echo lang('余额'); ?></p>
				<input type="number" name="phone_number" class="dhnums" placeholder="<?php echo lang('输入兑换金额'); ?>" autocomplete="off" id="number"/>
		   </div>
 
		   <div class="exe_prompt">
			  <p>提示：最少兑换数量<?php echo htmlentities($exchange); ?>，请输入<?php echo htmlentities($exchange); ?>的整数倍</p>
		  </div>
 
		   <div class="buttonGeoup">
					<a href="javascript:void(0)"  class="not_next ljzf_but" id="aaa"><?php echo lang('确定兑换'); ?></a>
			</div>
		</div>
	 <!--浮动层-->
	 <div class="ftc_wzsf" >
		 <div class="srzfmm_box">
			 <div class="qsrzfmm_bt clear_wl">
				 <img src="/static/mobile/images/xx_03.jpg" class="tx close fl">
				 <span class="fl"><?php echo lang('请输入支付密码'); ?></span></div>
			 <div class="zfmmxx_shop">
				 <div class="mz"><?php echo lang('实际获得积分'); ?></div>
				 <div class="zhifu_price"></div></div>
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


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>


	<script type="text/javascript">
          $('#aaa').on('click', function(){
          	var maxe=$('#money').text();//余额
          	var maxe=Number(maxe);//余额
            var dhnums =$('.dhnums').val(); //要兑换的数量
            var dhnums =Number(dhnums); //要兑换的数量
            var ratio = <?php echo htmlentities($ratio); ?>;
            var exchange = <?php echo htmlentities($exchange); ?>;

		    if(dhnums<exchange){
		         msg_alert("兑换金额不能小于"+exchange);
		         return;
		    }
            if(maxe<dhnums){
                msg_alert('<?php echo lang("兑换金额不足"); ?>');
                return;
            }else{
            	var yuee = dhnums % exchange;
            	if(yuee!=0){
                    msg_alert("兑换金额不是"+exchange+"的倍数");
                    return;
                }
            }
			var getjifens = dhnums * ratio;
		  $('.zhifu_price').text('¥'+getjifens+'.00');
		  $(".ftc_wzsf").show();
          });
	  $(function(){
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
                      var dhnums =$('.dhnums').val(); //要兑换的数量
                      $.ajax({
                          url:'/mobile/Index/Exehange',
                          type:'post',
                          data:{'dhnums':dhnums,'pwd':pwd},
                          datatype:'json',
                          success:function (mes) {
                              if(mes.code == 1){
                                  msg_alert(mes.msg,mes.url);
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
                  },100);
                };
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
         
    });
	   </script>


</body>
</html>