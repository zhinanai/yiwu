<?php /*a:2:{s:69:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/login/login.html";i:1535711766;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>标题</title>
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
    
<link rel="stylesheet" href="/static/mobile/css/wenStyle.css"/>
<style>
  /* body{background: #038cf5; width: 100%;height: 100%;} */
  /* html{width: 100%;height: 100%}
  body{background: url(/static/mobile/images/login_bg.png) no-repeat;background-position: center;background-size: 100% 100%;} */
  .body_bg{width: 100%;height:100%;z-index: -1;background: url(/static/mobile/images/bgtp.png) no-repeat;background-position: center;background-size: cover;position: fixed;top: 0;bottom: 0;}
  .body_bg img{width: 100%;}
  .language{padding: .3rem;}
  /*修改提示文字的颜色*/
  input::-webkit-input-placeholder { /* WebKit browsers */ 
        color: #fff; 
    } 
    
    input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */ 
        color: #fff; 
    } 
    
    input::-moz-placeholder { /* Mozilla Firefox 19+ */ 
        color: #fff; 
    } 
    
    input:-ms-input-placeholder { /* Internet Explorer 10+ */ 
        color: #fff; 
    } 
    .yuyan select{color: #fff; }
</style>
   
</head>
<body>

<div class="body_bg"><img src="/static/mobile/images/bgtp.png" alt=""></div>
<div class="login-container">
    <div class="language">
<!--         <button type="button" lang='cn' class='btn'>中</button>
        <button type="button" lang='en' class='btn'>ENG</button>
        <button type="button" lang='vi' class='btn'>越南</button> -->
       <div class="yuyan">
        <select class='btn'>
            <!-- <option value=''>语言</option> -->
            <option value='cn' <?php if($lang=='zh-cn'): ?> selected="selected" <?php endif; ?>>中</option>
            <option value='en' <?php if($lang=='en-us'): ?> selected="selected" <?php endif; ?>>ENG</option>
            <option value='vi' <?php if($lang=='vi'): ?> selected="selected" <?php endif; ?>>Tiếng Việt</option>
        </select>
       </div>
    </div>
    <div class="formbox">
        <form name="formlogin" id="loginForm" class="formlogin" method="post" action="">
            <div class="input_box">
                <span class="iconfont icon-dianhua"></span>
                <input type="text" name="account" class="username" placeholder="<?php echo lang('请输入手机号/UID'); ?>" autocomplete="off"/>
            </div>
            <div class="input_box">
                <span class="iconfont icon-mima"></span>
                <input type="password" name="password" class="password" placeholder="<?php echo lang('请输入密码'); ?>" oncontextmenu="return false" onpaste="return false" />
            </div>
            <div  class="inde-btn">
                <button id="submit" type="button" onclick="login()"><?php echo lang('登录'); ?></button>
            </div>
            <div class="extra_btn">
                <a href="<?php echo url('/mobile/login/register'); ?>"><?php echo lang('立即注册'); ?></a>
                <a href="<?php echo url('/mobile/login/getpsw'); ?>"><?php echo lang('忘记密码'); ?></a>
            </div>
        </form>
    </div>
</div> 


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script type="text/javascript" src="/static/mobile/js/jquery.validate.min.js"></script>
<script src="/static/mobile/js/crowds.js"></script>
<script>

    //语言
    $('.btn').change(function(){
        var data={'lang':$('.btn').val()}
        console.log(data);
        $.get("<?php echo url('mobile/Login/lang'); ?>",data,function(){
            location.reload();
        })
    })

        function login(){
            var mobile = $("input[name=account]").val();
            var pwd  = $("input[name=password]").val();
            if(mobile==''){
                msg_alert("<?php echo lang('请输入手机号/UID'); ?>");
            }else if(pwd==''){
                msg_alert("<?php echo lang('请输入密码'); ?>");
            }else{
                $.post("<?php echo url('/mobile/login/dologin'); ?>",{mobile:mobile,pwd:pwd},function(data){
                    var obj = eval('(' + data + ')');
                    if(obj[0]['type']==1){
                        msg_alert_url('<?php echo lang("登录成功"); ?>',"<?php echo url('/mobile/index'); ?>");

                    }else if(obj[0]['type']==2){
                        msg_alert_url('<?php echo lang("用户不存在"); ?>');
                    }else if(obj[0]['type']==4){
                        msg_alert_url('<?php echo lang("用户被锁定"); ?>');
                    }else{
                        var phone = obj[0]['msg'];
                        msg_alert_url('<?php echo lang("密码错误"); ?>');
                    }
                })

            }

        }
</script>

</body>
</html>