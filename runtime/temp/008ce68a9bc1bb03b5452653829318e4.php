<?php /*a:2:{s:82:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/transaction/tran_salebuy.html";i:1535790612;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
<?php echo lang('发布购买订单'); ?>
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
    <link rel="stylesheet" href="/static/mobile/css/ion.rangeSlider.css"/>

    <link rel="stylesheet" href="/static/mobile/css/ion.rangeSlider.skinHTML5.css"/>
<style>
	.zsselect_nrr{float: right;
    width: 41%;}
    .sdynd{
    width: 27%;
    display: block;
    line-height: 10vmin;
    margin-top: 1vmin;
    float: left;
    text-align: left;
    color: #333;
    }
    .sdynd i{text-align: left;font-size: 3.5vmin;}

    .irs-slider{
        z-index: 0;
    }

</style>

	
	  <?php

       $arr=array(1=>"易物币",2=>"Bitcoin",3=>"USDT",4=>"Ethereum",5=>"TRX");

       ?>
	<div class="header">
	    <div class="header_l">
	    <a href="<?php echo url('/mobile/Transaction/balance_trade',['coin_name'=>$coindets['coin_name']]); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
	    </div>
	    <div class="header_c" id="dig_xiala"><h2 style="line-height:36px;"><?php echo htmlentities($coindets['coin_name']); ?></h2> <p id="a"></p>
            <div id="dig_xiala_xs">
             <div class="downa">
                <ul>
                    <li><a href="<?php echo url('/mobile/Transaction/tran_salebuy',['cid'=>1,'coin_name'=>'易物币']); ?>">易物币</a></li>
                    <li><a href="<?php echo url('/mobile/Transaction/tran_salebuy',['cid'=>2,'coin_name'=>'Bitcoin']); ?>"><?php echo lang('比特币'); ?></a></li>
                    <li><a href="<?php echo url('/mobile/Transaction/tran_salebuy',['cid'=>3,'coin_name'=>'USDT']); ?>"><?php echo lang('USDT'); ?></a></li>
                    <li class="off"><a href="<?php echo url('/mobile/Transaction/tran_salebuy',['cid'=>4,'coin_name'=>'Ethereum']); ?>"><?php echo lang('以太坊'); ?></a></li>
                    <li class="off"><a href="<?php echo url('/mobile/Transaction/tran_salebuy',['cid'=>5,'coin_name'=>'TRX']); ?>">TRX</a></li>
                </ul>
            </div>
            <div class="reveal-modal-bg"></div>
            </div>
	    </div>
	    <div class="header_r"></div>
	</div>

   <div class="big_width100">
	     <div class="buy_Wpayzu clear_wl">
	     	 <div class="buy_Wpayzu_l">
          <p><?php echo htmlentities($coindets['coin_name']); ?></p>
          <p><?php echo isset($myassets['c_nums']) ? htmlentities($myassets['c_nums']) : '0.0000'; ?></p>
         </div>
         <div class="buy_Wpayzu_l">
          <p><?php echo lang('余额'); ?></p>
          <p>$<?php echo htmlentities($wallet['wallet_num']); ?></p>
         </div>

	     	 <div class="buy_Wpayzu_z"></div>

	     </div>
<!-- 输入 -->
	     <div class="fabchsding">     	
		      <div class="fill_styaa">      	
		       	<p><?php echo lang('当前价格'); ?>：</p>
                   <input type="text" id="other_account" name="other_account" readonly="readonly" value="<?php echo htmlentities($coindets['coin_price']); ?>" class="lanse" >
                   <input type="hidden" id="cid" value="<?php echo htmlentities($cid); ?>">
		      </div>

		       <center><form> 	
			     	<div class="fill_styaa">	       	
			       	<p><?php echo lang('购买价格'); ?>：</p>
			       	
              <span class="sdynd">
                  <input type="number" style="width:22.5vmin"  size=40 name="Data"  id="total"   readonly="readonly"  value="" class="" ></span>
					
					<div class="zsselect_nrr">
				      <div class="zsnr">
						  <span><i id="start_01" style="color: #343434;font-size: 3.5vmin;"></i></span>
				          <div class="index" style="width: 100%; margin-left: -5%;margin-top: -2vmin;">
				            <input id="range_44" />
				            <div class="demo-big__extra">
				              <!-- <pre id="result_44"></pre> -->
				            </div>
				          </div>
				      </div>
					</div>

			       	</div>

			       	<div class="fill_styaa">	       	
                       <p><?php echo lang('购买数量'); ?>：</p>
                       
			       	<input type="number" size="40" name="Data2" min='0.0' id="num" onkeyup="enfocus()" class="livalue" value="" onkeyup="value=value.replace(/[^\d]/g,'')" oninput="checkNum(this)" placeholder="">
			       	</div>

			       	<div class="fill_styaa">	       	
			       	<p><?php echo lang('支付金额'); ?>：</p>
			       	<input type="number" size="40" name="Copy" min='0.0' onkeyup="enfocus()"  readonly="readonly" id="copy" class=""> 
			       	</div>
		      </form></center>

		      <a href="#" class="dig_zhifuanj ljzf_but">
				  <?php echo lang('发布'); ?>
		      </a>
	       </div>
	 </div>	 
</body>
 

  <!--浮动层-->
		    <div class="ftc_wzsf" >
		        <div class="srzfmm_box" style="top:30%;">
		            <div class="qsrzfmm_bt clear_wl">
		                <img src="/static/mobile/images/xx_03.jpg" class="tx close fl">
		               
		                <span class="fl goumaiduix"><?php echo lang('请输入支付密码'); ?></span></div>
		            <div class="zfmmxx_shop">
		                
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
   
</head>
<body>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>
			
<script type="text/javascript" src="/static/mobile/js/ion.rangeSlider.js"></script>
<script type="text/javascript" src="/static/mobile/js/crowds.js"></script>

      <script>
           $('.xe_pl_a').click(function(){
           		var limitvalue = $('.limit').text();
           		$('.livalue').val(limitvalue);
           		enfocus();
           })
		 </script>


	     <script LANGUAGE="JavaScript">
			
		 </script> 
	
         <script type="text/javascript">

         	//限制number  输入格式
            function checkNum(obj){

            obj.value = obj.value.replace(/^(\-)*(\d+)\.(\d\d\d\d).*$/,'$1$2.$3');//只能输入三个小数.(\d\d\d) 修改个数  加\d
            }


           $(document).ready(function(){
			  $("#dig_xiala").click(function(){
			  $("#dig_xiala_xs").toggle(); //toggle() 方法切换元素的可见状态。 如果被选元素可见,则隐藏这些元素,如果被选元素隐藏,则显示这些元素。
			  });
			 
			});

         </script>

         <script type="text/javascript">
         var a=false;
            function enfocus() 
			{ 
			    var t1 = document.forms[0].Data.value; 
			    var t2 = document.forms[0].Data2.value; 
			    var t3 = document.forms[0].Copy.value ; 
            
			if(t1!="" && t2!=""){ 
				var floatValue = parseFloat(t1) * parseFloat(t2);

            document.getElementById("copy").value = floatValue.toFixed(4) ; 
            var cid = $('#cid').val();//币的种类 
            t3 = document.forms[0].Copy.value ; 
            
            $.ajax({
                            url:'/mobile/Transaction/tran_orpayment',
                            type:'post',
                            data:{'num':t2,'tprice':t3,'type':2,'cid':cid},
                            datatype:'json',
                            success:function (mes) {
                               
                                if(mes.status == 1){
                              
                                  a=true;
                                    // msg_alert(mes.message,mes.url);

                                }else{
                                     msg_alert(mes.message);
                                    // $(".mm_box li").removeClass("mmdd");
                                    // $(".mm_box li").attr("data","");
                                    // i = 0;
                                   a=false;
                                }
                            }
                        })
			} 
			else {document.getElementById("copy").value = "";} 
			} 

		 $(function(){
        //出现浮动层
        $(".ljzf_but").click(function(){
            
            if(a==false){
                msg_alert('<?php echo lang("数量错误"); ?>');
                return false;
            }
            $(".ftc_wzsf").show();
        });
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
            //----
        var i = 0;
        $(".nub_ggg li .zf_num").click(function(){
                
            if(i<6){
                $(".mm_box li").eq(i).addClass("mmdd");
                $(".mm_box li").eq(i).attr("data",$(this).text());
                i++
                if (i==6) {
                  setTimeout(function(){
                    var pwd = "";
                        $(".mm_box li").each(function(){
                        pwd += $(this).attr("data");
                    });
                   

                    var dprice=parseFloat($('#total').val());//支付单价
                    var tprice=parseFloat($('#copy').val());//支付总价
                    var num = parseFloat($('#num').val());//数量
                    var cid = $('#cid').val();//币的种类

                        $.ajax({
                            url:'/mobile/Transaction/tran_payment',
                            type:'post',
                            data:{'dprice':dprice,'num':num,'tprice':tprice,'type':2,'cid':cid,'pwd':pwd},
                            datatype:'json',
                            success:function (mes) {
                                if(mes.status == 1){
                              
                                  	$(".ftc_wzsf").hide(); 
                                    msg_alert(mes.message,mes.url);
                                    setTimeout(function(){
                                 window.location.reload();
                                },1000);
                                }else{
                                     msg_alert(mes.message);
                                    // $(".mm_box li").removeClass("mmdd");
                                    // $(".mm_box li").attr("data","");
                                    // i = 0;
                                }
                            }
                        })


                  },1000);
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
         
    });
	   </script>


<script type="text/javascript">

    $(document).ready(function () {

      //第一个
      var data1={
        'range':$("#range_44"),
        'result':$("#result_44"),
        'start':$("#start_01"),
        'end':$("#end_01"),
        'min': -10,
        'max': 10,
        'from': 0,
        'to': 10,
        'step': 0.1,
        'grid':true,

      }
      randfuc(data1);
    });


    function randfuc(jsdata){


      var $range = jsdata.range;
      var $result = jsdata.result;
      var track = function (data) {
        jsdata.start.text(data.from+'%');
        jsdata.end.text(data.to);

        delete data.input;

        delete data.slider;

        if (JSON) {
          // //console.log(data);
          $result.html(JSON.stringify(data, null, 2));
          var buy_price=$('#other_account').val();
          if(buy_price){

          	buy_price=buy_price.replace(/,/g,'');
			buy_price=Number(buy_price);
            var total_num=parseFloat(buy_price*1)+parseFloat(buy_price*(data.from/100));

            $('#total').val(total_num.toFixed(4));//单价
            enfocus();

          }
          

        } else {

          $result.html(data.toString());

        }

      };

      var grid_num=4;
      if(jsdata.grid_num){
        grid_num=jsdata.grid_num;
      }

      $range.ionRangeSlider({

        type: "single",

        min: jsdata.min,

        max: jsdata.max,

        from: jsdata.from,

        to: jsdata.to,

        step: jsdata.step,

        grid: jsdata.grid,
        grid_num:grid_num,

        onStart: track,

        onChange: track,

        onFinish: track,

        onUpdate: track

      });
    }

</script>

</body>
</html>