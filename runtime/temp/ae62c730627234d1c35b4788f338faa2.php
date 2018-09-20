<?php /*a:2:{s:72:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/login/register.html";i:1535790612;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
易物币 Register
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
    
<link rel="stylesheet" href="/static/mobile/css/wenStyle.css"/>
<style>
  /* html{width: 100%;height: 100%} */
  /* body{background: url(/static/mobile/images/login_bg.png) no-repeat;background-position: center;background-size: cover} */
    body{position: relative;}
  .body_bg{width: 100%;height:100%;z-index: -1;background-position: center;background-size: cover;position: absolute;}
  .body_bg img{width: 100%;}
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
 
   .big_width100{background: #FBF8EF;margin: 0;}
   .language{padding: .3rem;}
   .yuyan{margin-left: 5.2rem;}
</style>
   
</head>
<body>


<div class="body_bg"><img src="/static/mobile/images/main_bg.png" alt=""></div>

<div class="login-container register-container">
    <div class="register-title"><?php echo lang('用户注册'); ?></div>
    <div class="yuyan">
        <select class='btn'>
            <option value=''>语言</option>
            <option value='cn' <?php if($lang=='zh-cn'): ?> selected="selected" <?php endif; ?>>中</option>
            <option value='en' <?php if($lang=='en-us'): ?> selected="selected" <?php endif; ?>>ENG</option>
            <option value='vi' <?php if($lang=='vi'): ?> selected="selected" <?php endif; ?>>Tiếng Việt</option>
        </select>
       </div>
    <div class="formbox">
        <form name="AddUser" action="" id="registerForm" class="formrgister" method="get">
            <div class="input_box">
                <span class="iconfont icon-dianhua"></span>
     
                <?php if($smsid == 2): ?> 
                <a href="<?php echo url('/mobile/Login/get_address',['page'=>'register']); ?>">
                <input style="width:98%; margin-right: .1rem;" type="number" name="area" class="phone_number" readonly="readonly" placeholder="<?php echo lang('区号'); ?>" value="<?php echo htmlentities($area); ?>"/>
                </a>
                <?php endif; ?>

                <input type="number" name="mobile" class="phone_number" placeholder="<?php echo lang('输入手机号码'); ?>" id="number"/>
            </div>
            <div class="input_box">
                <span class="iconfont icon-nicheng"></span>
                <input type="text" name="username" class="username" placeholder="<?php echo lang('昵称'); ?>" autocomplete="off"/>
            </div>
               <!--  <li><input type="text" name="captcha" id="captcha" placeholder="请输入验证码">
                <span class="yzm2"><img src="<?php echo url('admin/login/captcha'); ?>" alt="captcha" onclick="this.src='<?php echo url("admin/login/captcha"); ?>'+'?'+Math.random()" /></span></li> -->
            <div class="input_box code_box" id="captcha-container">
                <span class="iconfont icon-verification-code"></span>
                <div class="input-code">
                    <input style="width: 100%;" name="verify" class="captcha-text" placeholder="<?php echo lang('验证码'); ?>"  id="j_verify" type="text">                  
                    <img alt="图形验证码" src="<?php echo url('mobile/login/captcha'); ?>" title="点击刷新" onclick="this.src='<?php echo url('admin/login/captcha'); ?>'+'?'+Math.random()">
                </div>
            </div>
            <div class="input_box">
                <span class="iconfont icon-shoujihao1"></span>
                <div class="phone-code">
                    <input style="width: 100%;" type="number" id="code" name="code" class="code" placeholder="<?php echo lang('手机验证码'); ?>" oncontextmenu="return false" onpaste="return false" />
                    <a href="javascript:void(0)" id="mycode" onclick="sendemail()"><?php echo lang('获取手机验证码'); ?></a>
                </div>
            </div>
            <div class="input_box">
                <span class="iconfont icon-mima"></span>
                <input type="password" name="pwd" class="password" placeholder="<?php echo lang('输入登录密码'); ?>" oncontextmenu="return false" onpaste="return false" />
            </div>
            <div class="input_box">
                <span class="iconfont icon-mima1"></span>
                <input type="password" name="relogin_pwd" class="confirm_password" placeholder="<?php echo lang('再次输入密码'); ?>" oncontextmenu="return false" onpaste="return false" />
            </div>
            <div class="input_box">
                <span class="iconfont icon-shoujihao1"></span>
                <input type="text" name="parent_id" placeholder="<?php echo lang('推荐人手机号码/UID'); ?>" <?php if($mobile != null): ?> disabled="disabled" value="<?php echo htmlentities($mobile); ?>" <?php else: ?> value="" <?php endif; ?>>
            </div>
            <div class="input_box">
                <span class="iconfont icon-jiaoyimima"></span>
                <input type="password" name="safety_pwd" class="safety_pwd" placeholder="<?php echo lang('交易密码'); ?>" oncontextmenu="return false" onpaste="return false" />
            </div>
            <?php echo token(); ?>
            <div  class="inde-btn">
                <button id="login_submit" type="button" onclick="sendcode()"><?php echo lang('注 册'); ?></button>
                <!-- <div class="submitbox"><input id="login_submit" type="button" value="立即开启"></div> -->
            </div>
        </form>
    </div>
    <div class="extra_reg">
         <a href="<?php echo url('/mobile/login/login'); ?>" class="inde-reg"><?php echo lang('已经有账号？返回登录'); ?></a>
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

    $('.btn').change(function(){
        var data={'lang':$('.btn').val()}
        console.log(data);
        $.get("<?php echo url('mobile/Login/lang'); ?>",data,function(){
            location.reload();
        })
    })

    $(function(){
            $("input[type=text]").keyup(function(){
                 
                if($("input[name=mobile]").val() !='' && $("input[name=code]").val() !='' ){
                    // $("#login_submit").css('background','linear-gradient(to right,#bd3dda,#3c13ce)')
                    $('#login_submit').attr("onclick", "sendcode()");
                }else{
                    // $("#login_submit").css('background','#2e2a43')
                }
            });
    })
</script>
<script>

        var countdown=60; 
            function sendemail(){
                var nickname= $('input[name=username]').val();
                var mobile= $('input[name=mobile]').val();
                var pwd= $('input[name=pwd]').val();
                var verify= $('input[name=verify]').val();
                var area= $('input[name=area]').val();
                if(nickname==''){
                     msg_alert('<?php echo lang("请输入昵称"); ?>!');
                }else{
                    // if(!(/^1[3|4|5|7|8][0-9]\d{4,8}$/.test(number))){
                    if(mobile==''){
                            msg_alert('<?php echo lang("请输入手机号"); ?>!');
                    }else if(verify==''){
                            msg_alert('<?php echo lang("请输入验证码"); ?>!');
                    }else if(area==''){
                            msg_alert('<?php echo lang("请输入区号"); ?>!');       
                    }else{
                        $.post("<?php echo url('/mobile/login/code'); ?>",{mobile:mobile,area:area,verify:verify},function(data){
                            console.log(data);
                            if(data==1){
                                var obj = $("#mycode");
                                settime(obj);
                                layer.msg("<?php echo lang('发送成功'); ?>");
                            }else if(data==5){                                       
                                layer.msg("<?php echo lang('该手机号已经注册'); ?>");

                            }else if(data==6){                                       
                                layer.msg("<?php echo lang('验证码错误'); ?>");

                            }
                        })  
                    }  
                }

            }

            function settime(obj) { //发送验证码倒计时
                if (countdown == 0) {
                    obj.attr("onclick", "sendemail()");
                    //obj.removeattr("disabled"); 
                    obj.html("<?php echo lang('获取手机验证码'); ?>");
                    countdown = 60; 
                    return;
                } else { 
                    obj.attr("onclick", "null");
                    obj.html("<?php echo lang('重新发送'); ?>(" + countdown + ")");
                    countdown--; 
                } 
            setTimeout(function() { 
                settime(obj) }
                ,1000) 
            }

</script>
<script>
        function sendcode(){
            var phone= $('input[name=mobile]').val();
            var pwd= $('input[name=pwd]').val();
            var relogin_pwd= $('input[name=relogin_pwd]').val();
            var code= $('input[name=code]').val();
            var parent_id= $('input[name=parent_id]').val();
            var nickname= $('input[name=username]').val();
            var safety_pwd= $('input[name=safety_pwd]').val();

            if(pwd != relogin_pwd){
               msg_alert('<?php echo lang("两次输入密码不一致"); ?>!');
               return false;
            }else if(pwd=='' || !(/^.{6,}$/.test(pwd))){
               msg_alert('<?php echo lang("请输入6位密码"); ?>!');
               return false;
            }else if(!(/^\d{6}\b/).test(safety_pwd)){
               msg_alert('<?php echo lang("交易密码只能为6位数"); ?>');
               return false;
            }else if(parent_id == ''){
               msg_alert('<?php echo lang("请输入推荐人"); ?>'); 
               return false;
            }else{

            //    $('input[name=relogin_pwd]').next('span').html("");
               $.post("<?php echo url('/mobile/login/doregister'); ?>",{code:code,phone:phone,pwd:pwd,parent_id:parent_id,nickname:nickname,safety_pwd:safety_pwd},function(data){
                    if(data.code==1){
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