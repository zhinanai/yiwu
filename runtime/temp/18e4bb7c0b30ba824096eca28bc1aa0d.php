<?php /*a:2:{s:72:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/user/sharecode.html";i:1535680616;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    分享好友
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
    html{width: 100%;height: 100%;}
    body{background-image:url(/static/mobile/images/code_bg.png);background-repeat:no-repeat;background-position: center;background-size: 100% 100%;}
    .big_width{margin-top: 1.8rem;}
    .qrCodeGro{width: 100%;margin: .4rem auto 0;}
    .big_width80{margin-top: 1.3rem;margin-bottom: 1rem;}
</style>
   
</head>
<body>

    <div class="header">
	    <div class="header_l" style="width:33.3%;">
	        <a href="javascript:history.go(-1)"><img src="/static/mobile/images/jiant.png" alt=""></a>
	    </div>
	    <div class="header_c" style="width:33.3%;"><h2><?php echo lang('分享好友'); ?></h2></div>
	</div>

       <div class="big_width80">
	     <div class="qrCodeGro qrCodeGroa">
	     	<img src="<?php echo url('mobile/User/CreateCode'); ?>">
	     	<p class="mt40"><?php echo lang('扫描二维码即可分享好友哟'); ?></p>
	     </div>

	     <div class="fxfuzanj">
             <span hidden id="txt"><?php echo htmlentities($url); ?>/<?php echo url('mobile/login/register',['id'=>$id]); ?></span>
             <a href="javascript:void(0)"  onclick="copyUrl();" ><?php echo lang('复制下载地址'); ?></a>
         </div>

	     <div class="intoButt mt30 mb30">
	     	<a href="<?php echo url('/mobile/User/Teamdets'); ?>"><?php echo lang('分享记录'); ?></a>
	     </div>
	   </div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

    <script>
        function copyUrl()
        {
            var txt=$("#txt").text();
            copy(txt);
        }

        function copy(message) {
            var input = document.createElement("input");
            input.value = message;
            document.body.appendChild(input);
            input.select();
            input.setSelectionRange(0, input.value.length), document.execCommand('Copy');
            document.body.removeChild(input);
            msg_alert("<?php echo lang('复制成功了哦'); ?>");
        }
    </script>

</body>
</html>