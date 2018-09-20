<?php /*a:2:{s:68:"/www/wwwroot/yiwunqianbaonew/application/admin/view/login/index.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>后台管理</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/admin/css/xadmin.css" media="all"/>
    <link rel="stylesheet" href="/static/admin/css/swiper.min.css" media="all"/>
    <link rel="stylesheet" href="/static/common/lib/layui/css/layui.css" media="all"/>
    <style>
        .childrenBody {
            margin-top: 10px;
            padding: 0 20px;
        }
        p{color: #fff !important;}
    </style>
    	
<link rel="stylesheet" href="/static/admin/css/login.css" media="all" />
<style>
    body{background: url(/static/admin/images/bj.jpg) no-repeat center fixed !important;}
</style>

</head>
<body class="childrenBody">

<div id="particles-js">
    <div class="login">
        <div class="logo">
            <img src="/static/admin/images/logo.png" alt="">
        </div>
        <ul class="login-list">
            <form>
            <li><input type="text" id="username" name="name" placeholder="请输入账号"></li>
            <li><input type="password" id="password" name="password" placeholder="请输入密码"></li>
            <li><input type="text" name="captcha" id="captcha" placeholder="请输入验证码">
                <span class="yzm2"><img src="<?php echo url('admin/login/captcha'); ?>" alt="captcha" onclick="this.src='<?php echo url("admin/login/captcha"); ?>'+'?'+Math.random()" /></span></li>
            <li><button class="btn" type="button">登 录</button></li>
            <!--<li class="tar"><a href="忘记密码.html">忘记密码？</a></li>-->
            </form>
        </ul>
    </div>
</div>
<!--[if lt IE 8]>
<div class="ie-content">
    <div class="ie-content-bj">
        <div class="ie-list">
            <a href="http://www.google.cn/intl/zh-CN/chrome/browser/"><img src="/static/admin/images/sj1.jpg" alt=""></a>
            <a href="http://www.firefox.com.cn/"><img src="/static/admin/images/sj2.jpg" alt=""></a>
            <a href="http://chrome.360.cn/"><img src="/static/admin/images/sj3.jpg" alt=""></a>
        </div>
    </div>
</div>
<![endif]-->

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>
<script type="text/javascript" src="/static/admin/js/particles.min.js"></script>
<script> 
    var layer;
    $(".btn").click(function(){
        var userName = $("#username").val();  
        var password = $("#password").val(); 
        var captcha = $("#captcha").val(); 

        if(userName==""){  
            layui.use('layer', function(){  
            layer = layui.layer;
            layer.tips('账号不能为空', '#username');
            }); 
            return;  
        }  
        if(password==""){  
            layui.use('layer', function(){
            layer.tips('密码不能为空', '#password');
            }); 
            return; 
        }  
        if(captcha==""){  
            layui.use('layer', function(){
            layer.tips('验证码不能为空', '#captcha');
            }); 
            return; 
        }  
        $.ajax({
            type: "POST",
            url: "<?php echo url('admin/login/check'); ?>",
            data: {
                name:userName,
                password:password,
                captcha:captcha
            },
            dataType: "json",
            success: function(data){
                // console.log(data)
                if(data.code==1){
                    layui.use('layer', function(){
                        layer.msg('登录成功', {
                        icon: 1,
                        time: 2000, 
                        end:function(){
                        location.href="<?php echo url('admin/index/index'); ?>";
                        }
                        }); 
                    }); 
                }else{
                  layui.use('layer', function(){       
                    layer.msg(data.msg,{
                        icon:2
                    });
                });
                return; 
            }
        }
    })
})
</script>
<script>
    particlesJS('particles-js',
        {
            "particles": {
                "number": {
                    "value": 40,  //数量
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.3,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 1,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": false,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 150,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": false
        }
    );
</script>

</body>
</html>