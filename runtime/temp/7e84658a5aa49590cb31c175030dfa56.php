<?php /*a:2:{s:78:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/digitalassets/wallet.html";i:1535790768;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
<?php echo lang("易宝数字中心"); ?>
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

   
</head>
<body>

	<div class="header">
	    <div class="header_l">
      <a href="<?php echo url('/mobile/Digitalassets/index'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
      
	    </div>
	    <div class="header_c"><h2><?php echo lang("易宝数字中心"); ?></h2></div>
	    <div class="header_r"></div>
	</div>

       <div class="big_width100">
	     <div class="Wbaozx">
         <p><?php echo lang("昨日收益（余额）"); if($assets_grade['assets_grade']==0): ?><img src="/static/mobile/images/denbgji_00.png"></p>
                          <?php elseif($assets_grade['assets_grade']==1): ?><img src="/static/mobile/images/denbgji_01.png"></p>
                          <?php elseif($assets_grade['assets_grade']==2): ?><img src="/static/mobile/images/denbgji_02.png"></p>
                          <?php else: ?><img src="/static/mobile/images/denbgji_03.png"></p>
                          <?php endif; ?>
                        

         <h3><?php echo !empty($lastsy) ? htmlentities($lastsy) : '0.0000'; ?></h3>
         <div class="Wbaozx_bott">
          <div><p><?php echo lang("易宝总资产"); ?></p><span><?php echo htmlentities($totalassets); ?></span></div>
          <div><a href="<?php echo url('/mobile/Digitalassets/wallet_lock'); ?>"><p class="kyzc"><?php echo lang("可用资产"); ?></p><span><?php echo htmlentities($available['available_assets']); ?></span></a></div>
          
        </div>
	     </div>
	   
       
	       <div class="wtreas_order_titel clear_wl">
			   <a href="<?php echo url('/mobile/Digitalassets/wallet'); ?>"   class="wundone_OT_l fl <?php if($step==1): ?>noe<?php endif; ?>" >
              <?php echo lang("收益记录"); ?>
       			</a>
       			<a href="<?php echo url('/mobile/Digitalassets/wallet',array('step'=>2)); ?>" class="wundone_OT_l fl <?php if($step==2): ?>noe<?php endif; ?>">
               <?php echo lang("转出记录"); ?>
       			</a>
       			<a href="<?php echo url('/mobile/Digitalassets/wallet',array('step'=>3)); ?>"   class="wundone_OT_l fl <?php if($step==3): ?>noe<?php endif; ?>">
               <?php echo lang("转入记录"); ?>
       			</a>

       	  </div>
       

      <div class="zwshj">
           <div class="yugejil" >                           

              <p style="width:30%;font-size: 0.28rem;"><?php echo lang("来源"); ?></p>
              <p style="width:40%;font-size: 0.28rem;"><?php if($step==1): ?><?php echo lang("数量(余额)"); else: ?><?php echo lang("数量(资产)"); endif; ?></p>
              <p style="width:30%;font-size: 0.28rem;"><?php echo lang('时间'); ?></p>
                      
         </div>


             <div id="wrapper1"  >
                  <div class="scroller">
                      <ul>
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                  <li>
                                                        
                                    <p style="width:36%;"><?php echo htmlentities($vo['type']); ?></p>
                                    <p style="width:20%;"><?php if($step==1): ?><?php echo htmlentities($vo['money']); else: ?><?php echo htmlentities($vo['num']); endif; ?></p>
                                    <p style="width:44%;"><?php echo htmlentities($vo['create_time']); ?></p>
                                  </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>  
                      </ul>
                   
                    <!--   <div class="more"><i class="pull_icon"></i><span>上拉加载...</span></div> -->
                  </div>
              </div>
               <!-- <span style='color:#666;line-height:400%;'>123</span> -->
         </div>
	   </div>



	    <div class="wtjiaoycaozd">
		    <div class="wtjiaoycaoz clear_wl">
	       			<a href="<?php echo url('/mobile/Digitalassets/wallet_in'); ?>" class=" fl cznoe" id="cuanjdd1"><?php echo lang("转入"); ?></a>
	       			<a href="<?php echo url('/mobile/Digitalassets/wallet_out'); ?>" class=" fl " id="cuanjdd2"><?php echo lang("转出"); ?></a>
	       			
	       	  </div>
       	</div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>


</body>
</html>