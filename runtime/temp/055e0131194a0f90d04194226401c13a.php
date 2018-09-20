<?php /*a:2:{s:71:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/login/get_psw.html";i:1535541834;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
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
   html{width: 100%;height: 100%}
   /* body{background: url(/static/mobile/images/main_bg.png) no-repeat;background-position: center;background-size: 100% 100%;} */
   .body_bg{width: 100%;height:100%;z-index: -1;background: url(/static/mobile/images/main_bg.png) no-repeat;background-position: center;background-size: cover;position: fixed;top: 0;bottom: 0;}
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
    .register-title {color: #fff; }
</style>
   
</head>
<body>

<div class="body_bg"></div>
<div class="login-container register-container">
	<div class="header_back">
		<a href="javascript:history.go(-1)"><img src="/static/mobile/images/jiant.png" alt=""></a>
    </div>
    <div class="register-title getpwd-title"><?php echo lang('找回密码'); ?></div>
    <div class="formbox" style="margin-top: 2.5rem">
        <form name="getpwdfrom" id="forgetForm" class="formrgister formgetpsw" action="" method="post" >
            <div class="input_box">
                <span class="iconfont icon-dianhua"></span>
                <?php if($smsid == 2): ?><a href="<?php echo url('/mobile/Login/get_address',['page'=>'getPsw']); ?>"><input style="width:98%; margin-right: .1rem;" type="number" name="area" class="phone_number" readonly="readonly" placeholder="<?php echo lang('区号'); ?>" value="<?php echo htmlentities($area); ?>"/></a><?php endif; ?>
                <input type="text" name="mobile" class="phone_number" placeholder="<?php echo lang('输入手机号码'); ?>" autocomplete="off" id="number"/>
            </div>
             <div class="input_box code_box" id="captcha-container">
                <span class="iconfont icon-verification-code"></span>
                <div class="input-code">
                    <input style="width: 100%;" name="verify" class="captcha-text" placeholder="<?php echo lang('验证码'); ?>"  id="j_verify" type="text">                  
                    <img alt="图形验证码" src="<?php echo url('mobile/login/captcha'); ?>" title="点击刷新" onclick="this.src='<?php echo url('admin/login/captcha'); ?>'+'?'+Math.random()">
                </div>
            </div>
            <div class="input_box">
                <span class="iconfont icon-verification-code"></span>
                <div class="phone-code">
                    <input style="width: 100%;" type="code" name="code" class="code" placeholder="<?php echo lang('验证码'); ?>" oncontextmenu="return false" onpaste="return false" />
                    <a href="javascript:void(0)" id="mycode"><?php echo lang('获取验证码'); ?></a>

                </div>
            </div>
            <div class="input_box">
                <span class="iconfont icon-mima"></span>
                <input type="password" name="password" class="password" placeholder="<?php echo lang('请设置新登录密码'); ?>" oncontextmenu="return false" onpaste="return false" />
            </div>
            <div class="input_box">
                <span class="iconfont icon-mima1"></span>
                <input type="password" name="passwordmin" class="passwordmin" placeholder="<?php echo lang('确认新的登录密码'); ?>" oncontextmenu="return false" onpaste="return false" />
            </div>
            <?php echo token(); ?>
            <div  class="inde-btn">
               <button id="submit" type="button" onclick="SetPwd()"><?php echo lang('确 定'); ?></button>
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
 $('#mycode').click(function(){
        var mobile=$("input[name='mobile']").val();
        var area=$("input[name='area']").val();
        var verify= $('input[name=verify]').val();
        if(mobile==''){
            layer.msg('<?php echo lang("请输入手机号码"); ?>');
        }else if(verify==''){
            msg_alert('<?php echo lang("请输入验证码"); ?>!');
        }else if(area==''){
            layer.msg('<?php echo lang("请输入区号"); ?>');
        }else{
            $.post("<?php echo url('/mobile/Login/code',['type'=>'1']); ?>",{'mobile':mobile,area:area,verify:verify},function(data){
                console.log(data);
                if(data==1){
                    layer.msg("发送成功");
                    RemainTime();
                }else if(data==6){                                       
                  layer.msg("<?php echo lang('验证码错误'); ?>");
                }else if(data==7){
                  layer.msg("<?php echo lang('该手机号没有注册'); ?>");
                }
                // else{
                //     layer.msg(data.msg);
                // }
            });
        }

    });

    var intime="<?php echo htmlentities(app('session')->get('set_time')); ?>";
    var timenow ="<?php echo time(); ?>";

    var bet=(parseInt(intime)+60)-parseInt(timenow);
    $(document).ready(function(){
        if(bet>0){
            RemainTime();
        }
    });
    var iTime = 59;
    var Account;
    if(bet>0){
        iTime=bet;
    }
    function RemainTime(){
        var iSecond,sSecond="",sTime="";
        if (iTime >= 0){
            iSecond = parseInt(iTime%60);
            iMinute = parseInt(iTime/60)
            if (iSecond >= 0){
                if(iMinute>0){
                    sSecond = iMinute + "分" + iSecond + "秒";
                }else{
                    sSecond = iSecond + "秒";
                }
            }
            sTime=sSecond;
            if(iTime==0){
                clearTimeout(Account);
                sTime='<?php echo lang("获取验证码"); ?>';
                iTime = 59;
            }else{
                Account = setTimeout("RemainTime()",1000);
                iTime=iTime-1;
            }
        }else{
            sTime='<?php echo lang("没有倒计时"); ?>';
        }
        $('#mycode').html(sTime);
        //document.getElementById('').html(123);
    }
</script>
<script>
        function SetPwd(){
            var phone= $('input[name=mobile]').val();
            var pwd= $('input[name=password]').val();
            var passwordmin= $('input[name=passwordmin]').val();
            var code= $('input[name=code]').val();

            if(pwd != passwordmin){
               msg_alert('<?php echo lang("两次输入密码不一致"); ?>!');
            }else if(pwd=='' || !(/^.{6,}$/.test(pwd))){
               msg_alert('<?php echo lang("请输入6位密码"); ?>!');
            }else if(code == ''){
               msg_alert('<?php echo lang("请输入验证码"); ?>!');
            }else{
               $.post("<?php echo url('/mobile/login/getpsw'); ?>",{code:code,phone:phone,pwd:pwd},function(data){
                    if(data.code==1){
                        // alert('修改密码成功');
                        // location.href="<?php echo url('/mobile/login/login'); ?>";
                        msg_alert_url('<?php echo lang("修改密码成功"); ?>',"<?php echo url('/mobile/login/login'); ?>");
                    }else if(data.code==0){
                        // alert(data.msg);
                        // location.href=data.url;
                        msg_alert_url(data.msg,data.url);

                    }else{
                        msg_alert(data.msg);
                    }   
                })
            }

        }
</script>


</body>
</html>