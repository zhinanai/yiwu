<?php /*a:2:{s:70:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/user/sellers.html";i:1535680616;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
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
<link rel="stylesheet" href="/static/mobile/css/seller.css"/>
<link rel="stylesheet" href="/static/common/lib/layui/css/layui.css"/>
<!-- <style>
    .imgAll img{display: inline-block;width: 1.5rem;height: 1.5rem;vertical-align: top;}
    .imgAll li{display: inline-block;float: left;margin-left: .3rem;border: solid 1px #ccc;margin: .16rem .1rem;position: relative;box-shadow: 0 0 .2rem #eee;}
    .delImg{position: absolute;top: -0.2rem;right: -0.14rem;width: .44rem;height: .44rem;background: #000;border-radius: 50%;display: block;text-align: center;line-height: .44rem;color: #fff;font-weight: 700;font-style: normal;cursor: pointer;}
    .imgFileUploade{display: inline-block;}
    .s_info .jigou .btn-add{width: 1.5rem;height: 1.5rem;margin-bottom: .18rem;}
</style> -->
<style>
    .layui-upload-img { width: 90px; height: 90px; margin: 0; }
    .pic-more { width:100%; margin: 10px 0px 0px 0px;}
    .pic-more li { width:90px; float: left; margin-right: 5px;}
    .pic-more li .layui-input { display: initial; }
    .pic-more li a { position: absolute; top: 0; display: block; }
    .pic-more li a i { font-size: 24px; background-color: #008800; }    
    #slide-pc-priview .item_img img{ width: 90px; height: 90px;}
    #slide-pc-priview li{position: relative;}
    #slide-pc-priview li .operate{ color: #000; display: none;}
    #slide-pc-priview li .toleft{ position: absolute;top: 40px; left: 1px; cursor:pointer;}
    #slide-pc-priview li .toright{ position: absolute;top: 40px; right: 1px;cursor:pointer;}
    #slide-pc-priview li .close{position: absolute;top: 5px; right: 5px;cursor:pointer;}
    #slide-pc-priview li:hover .operate{ display: block;}    
    .layui-input-block {margin-left: 0px;min-height: 36px;}
    .submit #submit{width: 90%;margin: .2rem auto;background: #ff992e;border: none;outline: none;padding: .2rem;color: #fff;display: block;border-radius: .1rem;}
    .s_info .item{margin-bottom: .2rem;line-height: .7rem;}
    .s_info .intro{margin-bottom: .2rem;}
    .s_info .up{margin-bottom: .2rem;}
    .s_info .jigou{margin-bottom: .0;background: #fff;padding:0 .1rem;}
    .layui-form-item{margin-bottom: .0;background: #fff;padding:0 .1rem .2rem;}
    .pic-more li{margin-bottom: .1rem;}
    .s_info .tit i{font-size: .46rem;vertical-align: middle;}
    .layui-btn-primary:hover{border-color: #ff992e;}
    .w_xiangqingdizi{width: 100%;}
    .w_xiangqingdizi .con{width: 70%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;}
    .s_info .item .con option{background-color: #fff;color: #000;}
</style>
   
</head>
<body>

<div class="header">
    <div class="header_l">
        <a href="<?php echo url('/mobile/user/index'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
    </div>
    <div class="header_c">
        <h2><?php echo lang('商家入驻'); ?></h2>
    </div>
    <div class="header_r"></div>
</div>
<div class="big_width100">
    <div class="swiper-container myimg" style="z-index: 0;">
		<div class="swiper-wrapper imgbox">		
			<div class="swiper-slide"><img src="/static/mobile/images/index-center1.png"></div>
			<!-- <div class="swiper-slide"><img src="/static/mobile/images/index-center2.png"></div> -->
			<div class="swiper-slide"><img src="/static/mobile/images/index-center3.png"></div>
		</div>
		<div class="swiper-pagination"></div>
    </div>
    <form  method="post" enctype="multipart/form-data" id="myForm" >
        <input type="hidden" name="id" value="<?php echo htmlentities($business['userid']); ?>">
        <div class="s_info">
            <div class="item">
                <a href="<?php echo url('/mobile/Shop/map'); ?>" class="w_xiangqingdizi">
                    <!-- <img src="/static/mobile/images/zc1-iocn.png" class="ico" alt=""> -->
                    <i class="iconfont icon-dizhi" style="color: #f90"></i>
                    <span class="txt"><?php echo lang('详情地址'); ?></span>
                    <input class="con" type="text" placeholder="请输入详细地址" name="address" value="<?php echo htmlentities($business['address']); ?>" readonly="readonly">
                    <!-- <img src="/static/mobile/images/r-arrow.png" class="ico2" alt=""> -->
                </a>
            </div> 
            <div class="item">
                <!-- <img src="/static/mobile/images/zc1-iocn.png" class="ico" alt=""> -->
                <i class="iconfont icon-shangjia" style="color: #f90"></i>
                <span class="txt"><?php echo lang('商家名称'); ?></span>
                <input class="con" type="text" placeholder="<?php echo lang('必填，输入商家的名称'); ?>" name="name" value="<?php echo htmlentities($business['name']); ?>">
            </div>
            <div class="item">
                <!-- <img src="/static/mobile/images/zc1-iocn.png" class="ico" alt=""> -->
                <i class="iconfont icon-icon" style="color: #f90"></i>
                <span class="txt"><?php echo lang('商家分类'); ?></span>
                    <select name="category" id="" class="con" >   
                        <option value="0"><?php echo lang('请选择商家分类'); ?></option>
                        <?php foreach($typeInfo as $key=>$vo): ?>
                            <option value="<?php echo htmlentities($vo['typeid']); ?>" <?php if($vo['typeid'] == $business['category']): ?>selected<?php endif; ?>><?php echo htmlentities($vo['type_name']); ?></option>
                        <?php endforeach; ?>
                    </select>
            </div> 
            <div class="item">
                <!-- <img src="/static/mobile/images/zc1-iocn.png" class="ico" alt=""> -->
                <i class="iconfont icon-lianxiren" style="color: #f90"></i>
                <span class="txt"><?php echo lang('联系人'); ?></span>
                <input class="con" type="text" placeholder="<?php echo lang('必填，输入门店联系人'); ?>" name="contact" value="<?php echo htmlentities($business['contact']); ?>">
            </div>
            <div class="item">
                <!-- <img src="/static/mobile/images/zc1-iocn.png" class="ico" alt=""> -->
                <i class="iconfont icon-phone" style="color: #f90"></i>
                <span class="txt"><?php echo lang('联系电话'); ?></span>
                <input class="con" type="text" placeholder="必填，请输入您的联系电话" name="tel" value="<?php echo htmlentities($business['mobile']); ?>">
            </div>
            <div class="item">
                <!-- <img src="/static/mobile/images/zc1-iocn.png" class="ico" alt=""> -->
                <i class="iconfont icon-timer" style="color: #f90"></i>
                <span class="txt"><?php echo lang('营业时间'); ?></span>
                <div class="con ">
                   <div class="time">
                        <div class="time-item">
                            <input type="text" value="" id="fromTime" placeholder="<?php echo lang('请选择开始时间'); ?>" name="from"  value="<?php echo htmlentities($business['start_time']); ?>">
                            <img src="/static/mobile/images/d-arrow.png" alt="" class="ico2">
                        </div> 
                        <div class="time-item">
                            <input type="text" value="" id="toTime" placeholder="<?php echo lang('请选择结束时间'); ?>" name="to" value="<?php echo htmlentities($business['end_time']); ?>">
                            <img src="/static/mobile/images/d-arrow.png" alt="" class="ico2">
                        </div> 
                   </div>
                    <!-- <select name="" id="">
                       <option value="">开始时间</option>
                    </select>
                    <select name="" id="">
                        <option value="">结束时间</option>
                    </select> -->
                </div>
            </div>
            <div class="intro">
                <div class="item">
                    <!-- <img src="/static/mobile/images/zc1-iocn.png" class="ico" alt=""> -->
                    <i class="iconfont icon-jieshao" style="color: #f90"></i>
                    <span class="txt"><?php echo lang('商家介绍'); ?></span>
                    <span class="txt">（<?php echo lang('选填'); ?>）</span>
                </div>
                <div class="txta">
                    <textarea cols="30" rows="10" placeholder="<?php echo lang('请输入商家介绍'); ?>" name="introduce"><?php echo htmlentities($business['introduce']); ?></textarea>
                </div>
            </div>
            <div class="intro">
                <div class="item">
                    <!-- <img src="/static/mobile/images/zc1-iocn.png" class="ico" alt=""> -->
                    <i class="iconfont icon-zhuyi" style="color: #f90"></i>
                    <span class="txt"><?php echo lang('购买须知'); ?></span>
                    <span class="txt">（<?php echo lang('选填'); ?>）</span>
                </div>
                <div class="txta"><textarea cols="30" rows="10" placeholder="<?php echo lang('请输入购买须知'); ?>" name="guidelines"><?php echo htmlentities($business['notice']); ?></textarea>
                </div>
            </div>
            <div class="up ">
                <div class="ite img-box">
                    <p class="txt"><?php echo lang('门店/门头照片'); ?>（<?php echo lang('必须'); ?>）</p>
                    <div class="imginfo">
                        <img src="<?php echo htmlentities($business['shop_img']); ?>" alt="" class="show_img" id="head_img">
                        <div class="btn">
                            <input  type="file"  accept="image/*" multiple="" class="getimg" name="shop_img">
                            <img src="/static/mobile/images/zc1-iocn.png" alt="" class="ico">
                            <span><?php echo lang('请上传门店照片'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="ite img-box">
                    <p class="txt"><?php echo lang('工商营业执照'); ?></p>
                    <div class="imginfo">
                        <img src="<?php echo htmlentities($business['business_img']); ?>" alt="" class="show_img">
                        <div class="btn">
                            <input  type="file"  accept="image/*" multiple="" class="getimg" name="business_img">

                            <img src="/static/mobile/images/zc1-iocn.png" alt="" class="ico">
                            <span><?php echo lang('请上传营业执照'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="jigou img-box">
                <div class="tit">
                    <i class="iconfont icon-zhaopian" style="color: #f90"></i>
                    <span><?php echo lang('商家照片'); ?></span>
                </div>
                <div class="jg_imgs box2">
                    <div class="btn-add">
                        <input  type="text"  accept="image/*" multiple="" class="getimg imgClick">
                    </div>
                </div>
            </div> -->
            <div class="jigou img-box">
                <div class="tit">
                    <!-- <img src="/static/mobile/images/zc1-iocn.png" alt="" class="ico"> -->
                    <i class="iconfont icon-zhaopian" style="color: #f90"></i>
                    <span><?php echo lang('商家照片'); ?></span>
                </div>
            </div>
            <?php if($business['orga_img'] == ''): ?>
            <div class="layui-form-item" id="pics">
                <div class="layui-input-block" style="width: 100%;">
                  <div class="layui-upload">
                    <button type="button" class="layui-btn layui-btn-primary pull-left" id="slide-pc"><?php echo lang('选择多图'); ?></button>
                    <div class="pic-more">
                      <ul class="pic-more-upload-list" id="slide-pc-priview">
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <?php else: ?>
              <div class="layui-form-item" id="pics">
                <div class="layui-input-block" style="width: 100%;">
                  <div class="layui-upload">
                    <button type="button" class="layui-btn layui-btn-primary pull-left" id="slide-pc"><?php echo lang('选择多图'); ?></button>
                    <div class="pic-more">
                      <ul class="pic-more-upload-list" id="slide-pc-priview">
                        <?php if(is_array($business['orga_img']) || $business['orga_img'] instanceof \think\Collection || $business['orga_img'] instanceof \think\Paginator): $i = 0; $__LIST__ = $business['orga_img'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="item_img">
                          <div class="operate"><i class="toleft layui-icon"></i><i class="toright layui-icon"></i><i  class="close layui-icon"></i></div>
                          <img src="<?php echo htmlentities($vo['orga_img']); ?>" class="img" >
                          <input type="hidden" name="pc_src[]" value="<?php echo htmlentities($vo['orga_img']); ?>" />
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                      </ul> 
                    </div>  
                  </div>
                </div>
              </div>
              <?php endif; ?>
            <div class="submit"><input type="button" value="<?php echo lang('提交'); ?>" class="" id="submit"></div> 
        </div>
    </form>
</div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script type="text/javascript" src="/static/mobile/js/jquery.form.js"></script>
<script type="text/javascript" src="/static/mobile/js/swiper.min.js"></script>
<script src="/static/mobile/js/layui/layui.js"></script>
<script>
    layui.use('laydate', function(){
        var laydate = layui.laydate;    
        //执行一个laydate实例
        var time1=laydate.render({
            elem: '#fromTime' ,//指定元素
            type:'time',
            lang: 'en',
            value: '09:00:00'
        });
        var time2=laydate.render({
            elem:'#toTime',
            type:'time',
            lang: 'en',
            value: '20:00:00'

        })
    });

</script>
    <script>
        var mySwiper = new Swiper(".swiper-container",{
            direction:"horizontal",
            loop:true,
            pagination:".swiper-pagination",
            autoplay:3000,
            autoplayDisableOnInteraction : false,
            });
        $(function () {
            // var form = document.getElementById('myForm');
            // $('#submit').click(function(e){
            //     e.preventDefault();
            //     var formData=new FormData(form);
            //     var name = formData.get("name");
            //     var contact = formData.get("contact");
            //     formData.append('name', 'name');
            //     formData.append('name', 'contact');
            //     //console.log(formData.getAll('name'))
                // $.ajax({
                //     url:'/mobile/user/business',
                //     type:'POST',
                //     data:formData,
                //     contentType:false,//不设置头，默认是键值对，www****
                //     processData:false,
                //     dataType:'json',
                //     success:function(res){
                //         //console.log(res)
                //     }
                // })
            // })
            $("#submit").click(function(e) {
               
               
                $("#submit").css('background','#999');
                $("#submit").attr('disabled',true);
                $("#submit").val('<?php echo lang("提交中"); ?>...');
                $("#myForm").ajaxSubmit({
                    
                    url : "/mobile/user/business",
                    type : "post",
                    dataType : 'json',
                    success : function(data) {

                        msg_alert(data.msg,data.url);
                    },
                    error : function(XmlHttpRequest, textStatus, errorThrown){

}
                });
            });

            $('.getimg').change(function(){
                var $imgShow=$(this).parents('.img-box').find('.show_img');
                // //console.log($imgShow)
                var reader = new FileReader();
                reader.onload = function(e){
                    $imgShow.attr("src",e.target.result)
                }
                reader.readAsDataURL(this.files[0]);
            });
        })
    </script>
    <script>
        layui.use('upload', function(){
        var $ = layui.jquery;
        var upload = layui.upload;            
upload.render({
    elem: '#slide-pc',
    url:"<?php echo url('mobile/user/upload_img'); ?>",
    size: 10000,
    type : "post",
    exts: 'jpg|png|jpeg',
    multiple: true,
    before: function(obj) {
        layer.msg('图片上传中...', {
               icon: 16,
               shade: 0.01,
               time: 0
           })
    },
    done: function(res) {
       layer.close(layer.msg());//关闭上传提示窗口
        if(res.status == 0) {
            return layer.msg(res.message);
        }
        //$('#slide-pc-priview').append('<input type="hidden" name="pc_src[]" value="' + res.filepath + '" />');
        $('#slide-pc-priview').append('<li class="item_img"><div class="operate"><i class="toleft layui-icon"></i><i class="toright layui-icon"></i><i  class="close layui-icon"></i></div><img src="' + res.filepath + '" class="img" ><input type="hidden" class="shopimg" name="pc_src[]" value="' + res.filepath + '" /></li>');
    } 
});
});
//点击多图上传的X,删除当前的图片    
$("body").on("click",".close",function(){
   $(this).closest("li").remove();
 });
//多图上传点击<>左右移动图片
 $("body").on("click",".pic-more ul li .toleft",function(){
   var li_index=$(this).closest("li").index();
   if(li_index>=1){
     $(this).closest("li").insertBefore($(this).closest("ul").find("li").eq(Number(li_index)-1));
   }
 });
 $("body").on("click",".pic-more ul li .toright",function(){
   var li_index=$(this).closest("li").index();
   $(this).closest("li").insertAfter($(this).closest("ul").find("li").eq(Number(li_index)+1));
 });
</script>

</body>
</html>