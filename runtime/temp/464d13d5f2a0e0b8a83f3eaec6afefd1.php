<?php /*a:2:{s:83:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/digitalassets/wallet_lock.html";i:1535790768;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
易宝锁定资产
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
    <style>
        .fill_sty{
            margin-top: 0;
        }
    </style>
   
</head>
<body>


	<div class="header">
	    <div class="header_l">
	    <a href="javascript:history.back(-1)"><img src="/static/mobile/images/jiant.png" alt=""></a>
	    </div>
	    <div class="header_c"><h2><?php echo lang('易宝锁定资产'); ?></h2></div>
	    <div class="header_r"></div>
	</div>
    <div class="big_width100">
         <div class="fill_sty clear_wl" >
          <p style="color: #666;"><?php echo lang('当前易宝可用资产'); ?>:<span style="margin-left:0.3rem;font-weight: bold;color: #333;"><?php echo htmlentities($myassets['available_assets']); ?></span></p>
    
         </div>
          <div class="fill_sty clear_wl" >
          <p><?php echo lang('锁定数量'); ?></p>
            <input type="text" name="num" class="paynums" placeholder="<?php echo lang('可输入最多四位小数'); ?>" autocomplete="off">
         </div>
         <div class="buttonGeoup">
            <a href="javascript:void(0)" class="not_next" id="operConfirm"><?php echo lang('确定'); ?></a>
         </div>

       <!--浮动层SS-->
       <div class="ftc_wzsf" >
         <div class="srzfmm_box">
           <div class="qsrzfmm_bt clear_wl">
             <img src="/static/mobile/images/xx_03.jpg" class="tx close fl">
             <span class="fl"><?php echo lang('请输入支付密码'); ?></span></div>
           <div class="zfmmxx_shop">
             <div class="mz"></div>
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
       <!--浮动层EE-->
     </div>



   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script src="/static/mobile/js/crowds.js"></script>
<script>
  $('#operConfirm').on('click', function(){
      var paynums=($('.paynums').val());//支付金额
      if(paynums < 0.01){
              msg_alert('<?php echo lang("请输入正确的转账金额"); ?>');
              return;
      }
  
      $.ajax({
          url:'/mobile/Digitalassets/paynumsnums',
          type:'post',
          data:{'paynums':paynums},
          datatype:'json',
          success:function (mes) {
              var mes= eval('(' + mes + ')');
              if(mes.status == 1){
                  $(".ftc_wzsf").show();
              }else{
                  msg_alert(mes.message);
              }
              
          }
  
      })
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
                  var paynums=($('.paynums').val());//支付金额
  
                  $.ajax({
                      url:'/mobile/Digitalassets/wallet_lock',
                      type:'post',
                      data:{'paynums':paynums,'pwd':pwd},
                      datatype:'json',
                      success:function (mes) {
                          var mes= eval('(' + mes + ')');
                          if(mes.status == 1){
                              msg_alert(mes.message,mes.url);
                              $(".ftc_wzsf").hide();
                              $(".mm_box li").removeClass("mmdd");
                              $(".mm_box li").attr("data","");
                              i = 0;
                              $('.paynums').val('');//支付金额
                              $('.moneyadd').val('');
                              setTimeout(function(){
                                  window.location.reload();
                              },1000)
                             
                          }else{
                              msg_alert(mes.message);
                              $(".mm_box li").removeClass("mmdd");
                              $(".mm_box li").attr("data","");
                              i = 0;
                          }
                      }
                  })
              },1000);
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
  
      //   $('#cuanjdd1').on('click', function(){
      //     var tjyhk =$.trim($('#tjyhk').val()); //开户行
      //     if(tjyhk==0){
      //             layer.msg('你当前是使用用户，请最低升级至普通用户！');
      //         return;
      //     }   
      // });
  </script>
  <!-- <script type="text/javascript">
        $('#cuanjdd2').on('click', function(){
  
          var tjyhk =$.trim($('#tjyhk').val()); //开户行
      if(tjyhk==0){
                layer.msg('你当前是使用用户，请最低升级至普通用户！');
            return;
      }   
    });
  </script> -->

</body>
</html>