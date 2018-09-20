<?php /*a:2:{s:69:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/shop/search.html";i:1535421736;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    入驻商家
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
    
<link rel="stylesheet" href="/static/mobile/css/shop.css">
   
</head>
<body>

<div class="banner">
    <div class="w_topsearch">
        <a href="<?php echo url('/mobile/shop/index'); ?>" class="goback"><img src="/static/mobile/images/back3.png" alt=""></a>
        <input type="text" name="name" placeholder="输入商品名称" value="" onfocus="setStyle(this.id)" id="fname">
        <input type="hidden" name="id" value="<?php echo htmlentities($id); ?>">
        <div class="search" >
            <a class="content" href="javascript:;"><img src="/static/mobile/images/icon_search1.png" /></a>
        </div>
    </div>
    <div class="navigation">
        <a href="javascript:;" class="chlid click1">
            <span><?php echo lang('全部'); ?></span>
            <img  src="/static/mobile/images/down.png" alt="" class="xsx">
        </a>
        <!--<a href="#" class="chlid click2">-->
            <!--<span>附近</span>-->
            <!--<img  src="/static/mobile/images/down.png" alt="" class="xsx">-->
        <!--</a>-->
        <!--<a href="#" class="chlid click3">-->
            <!--<span>智能排序</span>-->
            <!--<img  src="/static/mobile/images/down.png" alt="" class="xsx">-->
        <!--</a>-->
        
    </div>
</div>
<!-- 全部 -->
<div class="navchoosebox w_qunbu" style="display: none;">
        <div class="mask"></div>
        <div class="left_nav">
            <dl class="select"> 
                <dt class="bs"><?php echo lang('全部分类'); ?></dt>
                <dd style="display: block;">
                    <?php foreach($shopType as $key=>$vo): ?>
                    <a href="<?php echo url('/mobile/shop/search',['id'=>$vo['typeid']]); ?>"><?php echo htmlentities($vo['type_name']); ?></a>
                    <?php endforeach; ?>
                </dd>
            </dl>
            <!--<dl>-->
                <!--<dt class="bs">美食</dt>-->
                <!--<dd style="display: none;">-->
                    <!--<a>洗衣软件1</a>-->
                    <!--<a>美发软件1</a>-->
                    <!--<a>美容软件1</a>-->
                    <!--<a>宠物软件1</a>-->
                    <!--<a>订货软件1</a>-->
                    <!--<a>洗衣软件1</a>-->
                    <!--<a>美发软件1</a>-->
                    <!--<a>美容软件1</a>-->
                    <!--<a>宠物软件1</a>-->
                    <!--<a>订货软件1</a>-->
                    <!--<a>洗衣软件1</a>-->
                    <!--<a>美发软件1</a>-->
                    <!--<a>美容软件1</a>-->
                    <!--<a>宠物软件1</a>-->
                    <!--<a>订货软件1</a>-->
                <!--</dd>-->
            <!--</dl>-->
            <!--<dl>-->
                <!--<dt class="bs">酒店</dt>-->
                <!--<dd style="display: none;">-->
                    <!--<a>洗衣软件2</a>-->
                    <!--<a>美发软件2</a>-->
                    <!--<a>美容软件2</a>-->
                    <!--<a>宠物软件2</a>-->
                    <!--<a>订货软件2</a>-->
                <!--</dd>-->
            <!--</dl>-->
        </div>
</div>
<!-- 附近 -->
<!--<div class="navchoosebox w_fujin" style="display: none;">-->
    <!--<div class="mask"></div>-->
    <!--<div class="w_content">-->
        <!--<a>不限</a>-->
        <!--<a>500m</a>-->
        <!--<a>1km</a>-->
        <!--<a>3km</a>-->
        <!--<a>5km</a>-->
        <!--<a>10km</a>-->
    <!--</div>-->
<!--</div>-->
<!-- 智能排序 -->
<!--<div class="navchoosebox w_paxu" style="display: none;">-->
        <!--<div class="mask"></div>-->
        <!--<div class="w_content">-->
            <!--<a>综合排序</a>-->
            <!--<a>人气最高</a>-->
            <!--<a>离我最近</a>-->
        <!--</div>-->
    <!--</div>-->
 <!-- 推荐商家 -->
 <div class="w_tuijian" style="margin-top: 2rem;">
    <ul id="sousuo">
        <!-- <li>
            <a href="###">
                <img src="/static/mobile/images/index-center1.png" alt="">
                <div class="w_yjright">
                    <div class="w_kmright">
                        <h2>郑州市星辰日用品商行</h2>
                        <h3>
                            <span>11397分钟</span>
                            <span>820.65km</span>
                        </h3>
                    </div>
                    <p>
                        <span><img src="/static/mobile/images/wujiaoxing.png" alt=""></span>
                        <span><img src="/static/mobile/images/wujiaoxing.png" alt=""></span>
                        <span><img src="/static/mobile/images/wujiaoxing.png" alt=""></span>
                        <span><img src="/static/mobile/images/wujiaoxing.png" alt=""></span>
                        <span><img src="/static/mobile/images/wujiaoxing.png" alt=""></span>
                        <strong>5.0分</strong>
                    </p>
                    <div class="w_kuai clearfix">
                        <span>无线服务</span>
                        <span>停车位</span>
                        <span>刷卡</span>
                        <span>无线服务</span>
                        <span>无线服务</span>
                        <span>无线服务</span>
                        <span>无线服务</span>
                    </div>
                    <h1>500元</h1>
                </div>
                <div class="w_rightbottom">
                    <img src="/static/mobile/images/dingwei.png" alt="">
                    <span>到这去></span>
                </div>
            </a>
        </li>   -->
        <?php foreach($business as $key=>$vo): ?>
        <li>
            <a href="<?php echo url('/mobile/shop/product',['id'=>$vo['userid']]); ?>">
                <img src="<?php echo htmlentities($vo['shop_img']); ?>" alt="">
                <div class="w_yjright">
                    <div class="w_kmright">
                        <h2><?php echo htmlentities($vo['name']); ?></h2>
                        <h3>
                            <span style="display: none;">820.65km</span>
                        </h3>
                    </div>
                    <div class="w_font">
                        <?php echo htmlentities($vo['address']); ?>
                    </div>
                </div>
            </a>
        </li>
        <?php endforeach; if($data == 0): ?>
            <span style="width:100%;text-align: center;padding: .2rem 0;display: block"><?php echo lang("该分类下暂无商家"); ?></span>
        <?php endif; ?>
    </ul>
</div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script>
    function setStyle(x)
    {
    document.getElementById(x).style.color="#333";
    }

    $(".search").click(function () {
        var content = $('input[name="name"]').val();
        var id = $('input[name="id"]').val();
        $.ajax({
            url:'/mobile/Shop/search',
            data:{'keyword':content,'id':id},
            type:'post',
            dataType:'json',
            asyn:false,
            success:function (data) {
                var str = '';
                if(data.code == 1){
                    $.each(data.data,function (key,value) {
                        var url ="/mobile/shop/product/id/"+value.userid;
                        str += '<li>';
                        str += '<a href="'+url+'">';
                        str += '<img src="'+value.shop_img+'" alt="">';
                        str += '<div class="w_yjright"><div class="w_kmright"><h2>'+value.name+'</h2><h3><span style="display: none;">820.65km</span>';
                        str += '</h3></div><div class="w_font">'+value.address+'</div></div></a></li>';
                    });
                    $("#sousuo").html(str);
                }else {
                    str += '<span style="width:100%;text-align: center;padding: .2rem 0;display: block"><?php echo lang("暂无该商家"); ?></span>'
                    $("#sousuo").html(str);
                }
            },
            error: function(){
                post_flag =false; //AJAX失败也需要将标志标记为可提交状态
            }
        })
    });

    //导航切换效果
		var _eachdl=$(".left_nav dt");
		_eachdl.click(function(){
                $(this).parent().parent().find("input").removeClass("select");
				$(this).parent().addClass("select");
				$(".left_nav dd").hide();
				$(this).parent().find("dd").show();
				$(".navchoosebox .mask").show();
		})
		$(".navchoosebox .mask").click(function(){
			$(this).hide();
            $(this).parent().toggle();
            $(".chlid").removeClass("color");
            $(".chlid").children(".xsx").attr("src","/static/mobile/images/down.png");
			$(".left_nav").hide();
            $(".w_content").hide();
		});
        
        $(".navigation .click1").click(function(){
            $(".left_nav").show();
            $(".mask").show();
            var yanse =  $(".navchoosebox").css("display");
            if(yanse == "none"){
                $(this).addClass("color").siblings('.chlid').removeClass('color');
                $(this).siblings('.chlid').children(".xsx").attr("src","/static/mobile/images/down.png");
                $(this).children(".xsx").attr("src","/static/mobile/images/down1.png");
            }else{
                $(this).removeClass("color");
                $(this).children(".xsx").attr("src","/static/mobile/images/down.png");
            }
            // $(this).parent().parent().parent().find(".navchoosebox").hide();
            $(this).parent().parent().parent().find(".w_qunbu").toggle();
        })
        $(".navigation .click2").click(function(){
            $(this).addClass("color").siblings('.chlid').removeClass('color');
            $(this).siblings('.chlid').children(".xsx").attr("src","/static/mobile/images/down.png");
            $(this).children(".xsx").attr("src","/static/mobile/images/down1.png");
            $(this).parent().parent().parent().find(".navchoosebox").hide();
            $(this).parent().parent().parent().find(".w_fujin").toggle();
        })
        $(".navigation .click3").click(function(){
            $(this).addClass("color").siblings('.chlid').removeClass('color');
            $(this).siblings('.chlid').children(".xsx").attr("src","/static/mobile/images/down.png");
            $(this).children(".xsx").attr("src","/static/mobile/images/down1.png");
            $(this).parent().parent().parent().find(".navchoosebox").hide();
            $(this).parent().parent().parent().find(".w_paxu").toggle();
        })
</script>

</body>
</html>