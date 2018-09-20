<?php /*a:2:{s:71:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/crowd/crowds1.html";i:1535790610;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
众筹项目中心--进行中
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
    
<link rel="stylesheet" href="/static/mobile/css/meCen.css">
<link rel="stylesheet" href="/static/mobile/css/fanStyle.css"/>
<link rel="stylesheet" href="/static/mobile/js/layui/css/layui.css"/>
   
</head>
<body>

<div class="header">
	<div class="header_l">
		<a href="<?php echo url('/mobile/Digitalassets/index'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
	</div>
	<div class="header_c"><h2><?php echo lang('众筹项目中心'); ?></h2></div>
	<div class="header_r"><a href="<?php echo url('/mobile/Crowd/crowds_records'); ?>"><?php echo lang('记录'); ?></a></div>
</div>

<div class="big_width100">

	<div class="zy_topul">

		<ul class="clear_wl">
			<li>
				<a href="<?php echo url('/mobile/Crowd/crowds'); ?>">
					<img src="/static/mobile/images/zc0-iocn.png" alt="">
					<p><?php echo lang('预热中'); ?></p>
				</a>
				<div class="nj"></div>
			</li>
			<li>
				<a href="<?php echo url('/mobile/Crowd/crowds',array('step'=>1)); ?>">
					<img src="/static/mobile/images/zc1-iocn.png" alt="">
					<p class="nop"><?php echo lang('进行中'); ?></p>
				</a>
				<div class="nj"></div>
			</li>
			<li>
				<a href="<?php echo url('/mobile/Crowd/crowds',array('step'=>2)); ?>">
					<img src="/static/mobile/images/zc2-iocn.png" alt="">
					<p><?php echo lang('已结束'); ?></p>
				</a>
				<div class="nj"></div>
			</li>
		</ul>
	</div>


	<style type="text/css">
		body{
			color: #333;
		}
		.zcweikais_bottom_jx_a{
			width: 20%;
			background: #5577cc;
			text-align: center;
			height: 22px;
			display: block;
			position: absolute;
			right: 0;
			top:0;
			border-radius: 5px;
			line-height: 22px;
			font-size: 12px;
			color: #eee;
		}
		a:hover {
			color: #fff;
		}
	</style>
	<?php if($page == 1): foreach($list as $key=>$vo): ?>
	<div class="zcweikais" >
		<div class="zcweikais_top clear_wl">
			<input type="hidden" value="<?php echo htmlentities($vo['id']); ?>" class="crowdid">
			<img src="/static/mobile/images/zhongctub.png" class="zcimg">
			<div class="zcweikais_topwz">
				<h3><?php echo htmlentities($vo['name']); ?></h3>
				<p class="zcxwz"><span><?php echo lang('每个ID限购'); ?><?php echo htmlentities($vo['limit']); ?><?php echo lang('枚'); ?></span> <?php echo lang('剩余数量'); ?>：<?php echo htmlentities($vo['shengyu']); ?></p>
				<p><?php echo lang('接收币种'); ?>：<span><?php echo lang('余额'); ?></span></p>
			</div>
			<div class="zcwksshij">
				<img src="/static/mobile/images/naozz.png"><?php echo date("Y-m-d",$vo["start_time"]) ?>
			</div>


		</div>
		<div class="zcweikais_mid clear_wl">
			<ul>
				<li class="zcweikais_mid_lia"><p><?php echo lang('众筹模式'); ?><br/><span><?php echo htmlentities($vo['nums']); ?></span></p></li>
				<li class="zcweikais_mid_lib"><p><?php echo lang('价格'); ?><br/><span>1 易物币=<?php echo htmlentities($vo['price']); ?>(<?php echo lang('余额'); ?>)</span></p></li>
				<li class="zcweikais_mid_lic"><p><?php echo lang('剩余时间'); ?><br/><span class="hse"><?php echo htmlentities($vo['days']); ?><?php echo lang('天'); ?></span></p></li>
			</ul>

		</div>

		<div class="zcweikais_bottom clear_wl">



			<div class="zcweikais_bottom_jdzb">
				<div class="layui-progress layui-progress-big " lay-showPercent="true">
					<div class="layui-progress-bar layui-bg-blue" lay-percent=<?php echo htmlentities($vo['bili']); ?>%></div>
				</div>
			</div>
			<a href="#" class="zcweikais_bottom_jx_a goumai" id="goumai"><?php echo lang('立即购买'); ?></a>
		</div>
	</div>
	<?php endforeach; else: ?>
	<span style='color:#666;display: block;min-width:3rem;text-align:center;margin:1rem auto;'><?php echo lang('没找到相关记录'); ?></span>
	<?php endif; ?>



</div>


<!--浮动层-->
<div class="ftc_wzsf" >
	<div class="srzfmm_box">
		<div class="qsrzfmm_bt clear_wl">
			<img src="/static/mobile/images/xx_03.jpg" class="tx close fl">
			<input type="hidden" id="dealid" value="123">
			<span class="fl goumaiduix"><?php echo lang('众筹项目：易物币数字资产'); ?></span></div>
		<div class="zfmmxx_shop">
			<div class="xiange_titel">
				<p class="xe_pl"><?php echo lang('限 额'); ?>：<span class="limit">1000</span></p>
				<p class="xe_pr"></p>
			</div>
			<center>
				<form>
					<div class="xiange_titel xiange_titela">
						<p class="xe_pl" ><?php echo lang('价格'); ?>：</p>
						<input type="number" size=40 name="Data"  id="dprice" onkeyup="enfocus()" readonly="readonly" value="6.00000" class="jiaoyjis" >

					</div>
					<div class="xiange_titel">
						<p class="xe_pl"><?php echo lang('数量'); ?>：</p>
						<input type="number" size=40 name="Data2"     id="num" onkeyup="enfocus()" class="jiaoyjis livalue" value="" onkeyup="value=value.replace(/[^\d]/g,'')" placeholder="<?php echo lang('请输入数量'); ?>">
						<a href="#" class="xe_pl_a"><?php echo lang('全额'); ?></a>
					</div>

					<div class="xiange_titel">
						<p class="xe_pl"><?php echo lang('余 额'); ?>：</p>
						<input type="number" size=40 name="Copy"   onkeyup="enfocus()"  readonly="readonly" id="copy" class="jiaoyjis">

					</div>
				</form>
			</center>
		</div>
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


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script src="/static/mobile/js/layui/layui.js"></script>
<script src="/static/mobile/js/crowds.js"></script>
<script>
    function enfocus(){
        var t1 = document.forms[0].Data.value;
        var t2 = document.forms[0].Data2.value;
        var t3 = document.forms[0].Copy.value ;

        if(t1!="" && t2!=""){
            var floatValue = parseFloat(t1) * parseFloat(t2);
            document.getElementById("copy").value = floatValue.toFixed(4) ;
        }
        else {
            document.getElementById("copy").value = "";
        }
    }
    $('.xe_pl_a').click(function(){
        $('#num').val($('.limit').html());
        $('#copy').val($('.limit').html() * $('#dprice').val());
    })

    //注意进度条依赖 element 模块，否则无法进行正常渲染和功能性操作
    layui.use('element', function(){
        var element = layui.element;
    });

    $(".goumai").click(function(){
        //先获取当前点击的众筹具体信息
        var id = $(this).parents('.zcweikais ').find('.crowdid').val();
        $.ajax({
            url:'/mobile/Crowd/crowd_detail',
            asyn:false,
            type:'post',
            data:{'id':id},
            datatype:'json',
            success:function (mes) {
                post_flag = false;
                if(mes.code == 0){
                    $(".goumaiduix").html(mes.data.name);
                    $(".limit").html(mes.data.limit);
                    $("#dprice").val(mes.data.price);
                    $("#dealid").val(mes.data.id);
                    $(".ftc_wzsf").show();
					$(".numb_box").hide();
                }else{
                    msg_alert(mes.msg);
                }
            },
            error: function(){
                post_flag =false; //AJAX失败也需要将标志标记为可提交状态
            }
        });

    });
    $(function(){
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
        //点击数字键盘
        var i = 0;
        post_flag = false;
        $(".nub_ggg li .zf_num").click(function(){
            if(i<6){
                $(".mm_box li").eq(i).addClass("mmdd");
                $(".mm_box li").eq(i).attr("data",$(this).text());
                //console.log(i)
                i++
                if (i==6) {

                    var pwd = "";
                    $(".mm_box li").each(function(){
                        pwd += $(this).attr("data");
                    });
                    // alert("支付成功"+data);

                    if(post_flag) return;
                    post_flag = true;

                    var dprice=($('#dprice').val());//支付单价
                    var tprice=($('#copy').val());//支付总价
                    var num = parseFloat($('#num').val());//数量
                    var dealid = parseInt($('#dealid').val());//众筹ID
                    var ss1=parseFloat($(".limit").text());
                    $.ajax({
                        url:'/mobile/Crowd/crowd_buy',
                        asyn:false,
                        type:'post',
                        data:{'dprice':dprice,'num':num,'pwd':pwd,'dealid':dealid},
                        datatype:'json',
                        success:function (mes) {
                            post_flag = false;
                            if(mes.code == 0){
                                $(".ftc_wzsf").hide();
                                msg_alert(mes.msg,mes.msg);
                            }else{
                                $(".ftc_wzsf").hide();
                                msg_alert(mes.msg,mes.msg);
                            }
                        },
                        error: function(){
                            post_flag =false; //AJAX失败也需要将标志标记为可提交状态
                        }
                    });
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
    })
</script>

</body>
</html>