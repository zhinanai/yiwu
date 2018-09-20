<?php /*a:2:{s:68:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/user/index.html";i:1535784602;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
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
<link rel="stylesheet" href="/static/mobile/css/reset.css"/>
<link rel="stylesheet" href="/static/mobile/css/style.css"/>
<link rel="stylesheet" href="/static/mobile/css/uploads.css">
<style>
    .language{padding: .2rem .3rem;position: absolute;top: 0;}
    .language button {color: #ff992e;}
    .ti_shi{display: block;width: 2.2rem;height: 0.4rem;font-size: 0.2rem;margin-top: 5.6rem;margin-left: 2.6rem;}
    #set_cell{float: right;display: block; height: 1rem;width: 6rem;margin-right: 0.7rem;background: #666;border: 0;outline: none;color: #fff;font-size: 0.28rem;z-index: 999;border-radius: 0.1rem;}
    .uploader1{margin-top: -2rem;}
    #clipBtn{margin-top: -0.5rem;margin-bottom: 0.5rem; background: rgba(255, 153, 46,0.8);}
    .logo{top: 0;}
    .logo img{width: 1.2rem;height: 1.2rem;}
    .set_title{color: #000;text-align: left;}
</style>
   
</head>
<body>

<div class="user-top" style="position: relative;">
    <div class="language">
        <!-- <button type="button" lang='cn' class='btn'>中</button>
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

    <!-- <div class="user-head" id="logoimg"><img id="bgl" src="<?php echo htmlentities($user['head_img']); ?>"/></div> -->
     <!--新的更换头像SSSS-->
     <section class="logo-license">
        <div class="half">
            <a class="logo" id="logox">
                <img id="bgl" src="<?php echo htmlentities($user['head_img']); ?>"/>
            </a>
            <ul class="user-top-msg">
                <li><?php echo lang('等级'); ?>:<?php echo $userlevel['uservip_grade'] == 0 ? Lang::get('普通会员') : 'VIP'?></li>
                <li><?php echo htmlentities($user['nickname']); ?></li>
                <li>UID:<?php echo htmlentities($user['id']); ?> </li>
            </ul>
        </div>
    </section>
  </div>


 <article class="htmleaf-container">
     <div id="clipArea">
            
     </div>
     <div class="foot-use">
         <div class="uploader1 blue">
             <input type="button" name="file" class="button" value="打开"/>
             <form id='myupload' action="<?php echo url('mobile/User/Imgup'); ?>" method='post' enctype='multipart/form-data'>
                 <input id="file" type="file"  name="uploadfile" onchange="javascript:setImagePreview();" accept="image/*" multiple  />
             </form>
         </div>
         <button id="clipBtn"><?php echo lang('确认'); ?></button>
         <button id="set_cell"><?php echo lang('取消'); ?></button>
     </div>
     <div id="view"></div>
 </article>


    
 </div>
 <div class="setlistbox">
    <div class="set_in">
        <div class="set_title">
            <span><?php echo lang('个人资料'); ?></span>
        </div>
        <ul>
            <li><a href="<?php echo url('/mobile/User/setuname'); ?>">
                <div>
                    <p><i class="iconfont icon-xiaolian"></i></p>
                    <span><?php echo lang('昵称'); ?></span>
                </div>

            </a></li>
            <li><a href="<?php echo url('/mobile/User/mobile'); ?>">
                <div>
                    <p><i class="iconfont icon-shoujihao"></i></p>
                    <span><?php echo lang('手机号'); ?></span>
                </div>

            </a></li>
            <li><a href="<?php echo url('/mobile/Growth/cardinfos'); ?>">
                <div>
                    <p><i class="iconfont icon-icon1"></i></p>
                    <span><?php echo lang('银行卡'); ?></span>
                </div>

            </a></li>
        </ul>
    </div>
    <div class="set_in">
        <div class="set_title">
            <span><?php echo lang('店铺管理'); ?></span>
        </div>
        <ul>
            <!-- <li><a href="javascript:;" class="myshop">
                <div>
                    <p><i class="iconfont icon-dianpu-copy"></i></p>
                    <span><?php echo lang('我的店铺'); ?></span>
                </div>
            </a></li> -->
            <li><a href="<?php echo url('/mobile/User/sellers'); ?>">
                <div>
                    <p><i class="iconfont icon-chengchangjilu"></i></p>
                    <span><?php echo lang('商家入驻'); ?></span>
                </div>
            </a></li>
            <li>
                <?php if($user['is_business'] == 1): ?>
                <a href="<?php echo url('/mobile/User/moneycode'); ?>" style="border-right: 1px solid #ddd">
                <?php else: ?>
                    <a href="javascript:;" class="business" style="border-right: 1px solid #ddd">
                <?php endif; ?>
                <div>
                    <p><i class="iconfont icon-shoukuanma"></i></p>
                    <span><?php echo lang('收款码'); ?></span>
                </div>
                </a>
            </li>
            <li><a href="<?php echo url('/mobile/User/Sharecode'); ?>">
                <div>
                    <p><i class="iconfont icon-fenxiang"></i></p>
                    <span><?php echo lang('分享'); ?></span>
                </div>

            </a></li>
        </ul> 
    </div>
    <div class="set_in">
        <div class="set_title">
            <span><?php echo lang('系统设置'); ?></span>
        </div>
        <ul>
            <li><a href="<?php echo url('/mobile/User/setpwd',array('type'=>1)); ?>">
                <div>
                    <p><i class="iconfont icon-mima"></i></p>
                    <span><?php echo lang('修改登录密码'); ?></span>
                </div>
            </a></li>
            <li><a href="<?php echo url('/mobile/User/setpwd',array('type'=>2)); ?>">
                <div>
                    <p><i class="iconfont icon-cloud-safety"></i></p>
                    <span><?php echo lang('修改支付密码'); ?></span>
                </div>
            </a></li>
            <li><a href="<?php echo url('/mobile/User/complaint'); ?>">
                <div>
                    <p><i class="iconfont icon-icon1"></i></p>
                    <span><?php echo lang('投诉建议'); ?></span>
                </div>
            </a></li>
        </ul>
    </div>
    <ul>
        <li><a href="javascript:void(0)">
            <div>
                <p><i class="iconfont icon-icon1"></i></p>
                <span><?php echo lang('版本'); ?>(2.1.0)</span>
            </div>
        </a></li>
        <li><a href="<?php echo url('/mobile/User/news'); ?>">
            <div>
                <p><i class="iconfont icon-gonggao"></i></p>
                <span><?php echo lang('公告'); ?></span>
            </div>
        </a></li>
        <li><a href="<?php echo url('/mobile/User/abouts'); ?>">
            <div>
                <p><i class="iconfont icon-guanyu"></i></p>
                <span><?php echo lang('关于'); ?></span>
            </div>
        </a></li>
    </ul>
 </div>
 <div class="loginout">
     <a href="javascript:;" class="logout_fan"><?php echo lang('退出登陆'); ?></a>
 </div>

 <!-- <form method="post" enctype="multipart/form-data" id="myPhoto">
     <div class="user_header"> 
       <div class="header_img_box">
            <div class="img-content">
                <img src="<?php echo htmlentities($user['head_img']); ?>" alt="" id="prv_img">
                <input id="photo" type="file"  name="image" accept="image/*" multiple/>
            </div>
            <span><?php echo lang('(点击图片选择头像)'); ?></span>
       </div>
       <?php echo token(); ?>
       <div class="set_img">
           <button class="sub_img" type="submit"><?php echo lang('确认'); ?> </button>     
           <div class="set_cell"><?php echo lang('取消'); ?></div>
       </div>
     </div>
</form> -->


<div class="footer-fan">
    <a href="<?php echo url('/mobile/index/index'); ?>">
        <i class="iconfont icon-shouye"></i>
        <p><?php echo lang('首页'); ?></p>
    </a>
    <a href="<?php echo url('/mobile/Digitalassets/index'); ?>">
        <i class="iconfont icon-money"></i>
        <p><?php echo lang('资产'); ?></p>
    </a>
    <a href="<?php echo url('/mobile/index/redpay'); ?>">
		<i class="iconfont icon-hongbao"></i>
		<p><?php echo lang('红包'); ?></p>
	</a>
    <a href="<?php echo url('/mobile/Shop/navigation'); ?>">
		<i class="iconfont icon-daohang"></i>
		<p><?php echo lang('导航'); ?></p>
	</a>
    <a href="<?php echo url('/mobile/user/index'); ?>" class="active">
        <i class="iconfont icon-jingjirenjinglikehuxianxingcopy"></i>
        <p><?php echo lang('我的'); ?></p>
    </a>
</div>



   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<!-- <script type="text/javascript" src="/static/mobile/js/ajaxfileupload.js"></script> -->
<script type="text/javascript" src="/static/mobile/js/jquery.form.js"></script>
<script src="/static/mobile/js/crowds.js"></script>


<!--头像上传新SSSSS-->
<script src="/static/mobile/js/iscroll-zoom.js"></script>
<script src="/static/mobile/js/hammer.js"></script>
<script src="/static/mobile/js/jquery.photoClip.js"></script>

<script>
    var obUrl = ''
    //document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
    $("#clipArea").photoClip({
        width: 200,
        height: 200,
        file: "#file",
        view: "#view",
        ok: "#clipBtn",
        loadStart: function() {
            console.log("照片读取中");
        },
        loadComplete: function() {
            console.log("照片读取完成");
        },
        clipFinish: function(dataURL) {
            // console.log(dataURL);
        }
    });


    $(function(){
        $("#logox").click(function(){
            $(".htmleaf-container").show();
            // $(".photo-clip-view").css("background","#fff");
            $(".photo-clip-view").css("width","200px");
            $(".photo-clip-view").css("height","200px");
            $(".photo-clip-view").css("border-radius","50%");
            $(".photo-clip-view").css("top","3.12rem");
            $(".photo-clip-view").css("left","3.72rem");

           
            $(".photo-clip-mask").css("width","200px");
            $(".photo-clip-mask").css("height","200px");
            $(".photo-clip-mask").css("top","1.3rem");
            $(".photo-clip-mask").css("left","1.9rem");


            $(".photo-clip-area").css("width","200px");
            $(".photo-clip-area").css("height","200px");
            $(".photo-clip-area").css("top","1.83rem");
            $(".photo-clip-area").css("left","1.83rem");
            $(".photo-clip-area").css("border-radius","50%");
            $(".photo-clip-area").css("border-color","#ff992e");
            $(".photo-clip-area").addClass(".bor_box");
            
            
            $(".photo-clip-rotateLayer").css("width","200px");
            $(".photo-clip-rotateLayer").css("height","200px");
            $(".photo-clip-rotateLayer").css("margin-top","-2rem");
            $(".photo-clip-rotateLayer").css("left","2rem");   

            $(".photo-clip-moveLayer").css("margin-top","2rem");
            $(".photo-clip-moveLayer").css("left","2rem");
            
            

        })
        $("#clipBtn").click(function(){
            //数据流上传开始执行图片上传
            $.ajax({
                url:'/mobile/User/imgUps',
                type:'post',
                data:{'dataflow':imgsource},
                datatype:'json',
                success:function (data) {
                    console.log(data);
                   if(data.code == 1){
                        $("#logox").empty();
                        $('#logox').append('<img src="' + imgsource + '" align="absmiddle" style=" width:60px;height: 60px;">');
                        $(".htmleaf-container").hide();
                        msg_alert(data.mes);
                    }else{
                        msg_alert(data.mes);
                    }
                }
            })
        })
    });
</script>
<script type="text/javascript">
    $(function(){
        jQuery.divselect = function(divselectid,inputselectid) {
            var inputselect = $(inputselectid);
            $(divselectid+" small").click(function(){
                $("#divselect ul").toggle();
                $(".mask").show();
            });
            $(divselectid+" ul li a").click(function(){
                var txt = $(this).text();
                $(divselectid+" small").html(txt);
                var value = $(this).attr("selectid");
                inputselect.val(value);
                $(divselectid+" ul").hide();
                $(".mask").hide();
                $("#divselect small").css("color","#333")
            });
        };
        $.divselect("#divselect","#inputselect");
    });
</script>
<script type="text/javascript">
    function setImagePreview() {
        var preview, img_txt, localImag, file_head = document.getElementById("file_head"),
            picture = file_head.value;

        if (!picture.match(/.jpg|.gif|.png|.bmp/i)) return alert("您上传的图片格式不正确，请重新选择！"),
            !1;
        if (preview = document.getElementById("preview"), file_head.files && file_head.files[0]) preview.style.display = "block",
            preview.style.width = "63px",
            preview.style.height = "63px",
            preview.src = window.navigator.userAgent.indexOf("Chrome") >= 1 || window.navigator.userAgent.indexOf("Safari") >= 1 ? window.webkitURL.createObjectURL(file_head.files[0]) : window.URL.createObjectURL(file_head.files[0]);
        else {
            file_head.select(),
                file_head.blur(),
                img_txt = document.selection.createRange().text,
                localImag = document.getElementById("localImag"),
                localImag.style.width = "63px",
                localImag.style.height = "63px";
            try {
                localImag.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)",
                    localImag.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = img_txt
            } catch(f) {
                return alert("您上传的图片格式不正确，请重新选择！"),
                    !1
            }
            preview.style.display = "none",
                document.selection.empty()
        }
        return document.getElementById("DivUp").style.display = "block",
            !0
    }
</script>
<!--头像上传新EEEEE-->


<script>
 $(function () {
    //  语言
    $('.btn').change(function(){
        var data={'lang':$('.btn').val()}
        $.get("<?php echo url('mobile/Login/lang'); ?>",data,function(){
            location.reload();
        })
    })
//   $("#logoimg").click(function(){
//       $(".user_header").show();
//   });
     $("#set_cell").click(function(){
        $(".htmleaf-container").hide();
     });
     
    // 头像预览
    // $("#photo").change(function(){
    //     var reader = new FileReader();
    //     reader.onload = function(e){
    //         $("#prv_img").attr("src",event.target.result)
    //     }
    //     reader.readAsDataURL(this.files[0]);
    // });
    // $(".sub_img").click(function(e){
    //     e.preventDefault();
    //     $("#myPhoto").ajaxSubmit({
    //         url : "/mobile/User/upload",
    //         type : "post",
    //         dataType : 'json',
    //         success : function(data) {
    //             //console.log(data);
    //             if(data.code==1){
    //                 msg_alert("<?php echo lang('修改成功'); ?>!")
    //                 setTimeout('location.reload()',1500)  
    //             }else{
    //                 msg_alert("上传文件格式错误");
    //             }
                
    //         },
    //         error : function(data) {
    //             //console.log("error:" + data);
    //         }
    //     });

    // });
    $('.logout_fan').click(function(){
        $.ajax({
            url:"<?php echo url('/mobile/login/logout'); ?>",
            type:'POST',
            dataType:'json',
            success:function(res){
                //console.log(res);
                if(res.code==1){
                    msg_alert_url("<?php echo lang('退出成功'); ?>",res.url);
                }else{
                    msg_alert_url(res.msg)
                }
            }
        })
    });
     $(".business").click(function(){
         msg_alert("<?php echo lang('您暂未是商家,赶快申请入驻吧'); ?>")
     });
     //我的店铺
     $(".myshop").click(function(){
         msg_alert("<?php echo lang('该功能暂未开放，敬请期待'); ?>")
     });

})

</script>

</body>
</html>