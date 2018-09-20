<?php /*a:2:{s:83:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/transaction/balance_trade.html";i:1535790612;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    交易
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
<link rel="stylesheet" href="/static/mobile/js/layui/css/layui.css"/>
<style type="text/css">
  .highcharts-credits{
    display: none;
  }
</style>
   
</head>
<body>

	
	<div class="header">
	    <div class="header_l">
	    <a href="<?php echo url('/mobile/Digitalassets/index'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
	    </div>

      
	    <div class="header_c" id="dig_xiala"><h2  style="line-height:36px;" id="coin_name"><?php echo htmlentities($coindets['coin_name']); ?></h2> <p id="a"></p>
        <div id="dig_xiala_xs">
          <div class="downa">
              <ul>
                  <li><a href="<?php echo url('/mobile/Transaction/balance_trade',['cid'=>1,'coin_name'=>'易物币']); ?>">易物币</a></li>
                  <li><a href="<?php echo url('/mobile/Transaction/balance_trade',['cid'=>2,'coin_name'=>'Bitcoin']); ?>"><?php echo lang('比特币'); ?></a></li>
                  <li><a href="<?php echo url('/mobile/Transaction/balance_trade',['cid'=>3,'coin_name'=>'USDT']); ?>"><?php echo lang('USDT'); ?></a></li>
                  <li class="off"><a href="<?php echo url('/mobile/Transaction/balance_trade',['cid'=>4,'coin_name'=>'Ethereum']); ?>"><?php echo lang('以太坊'); ?></a></li>
                  <li class="off"><a href="<?php echo url('/mobile/Transaction/balance_trade',['cid'=>5,'coin_name'=>'TRX']); ?>">TRX</a></li>
              </ul>
          </div>
          <div class="reveal-modal-bg"></div>
        </div>
	    </div>
	    <div class="header_r"></div>
	</div>

    <div class="big_width100">
	    <div class="big_width100">
	    <div class="buy_Wpayzu clear_wl">
	     	  <div class="buy_Wpayzu_l">
          <p><?php echo htmlentities($coindets['coin_name']); ?></p>
          <p><?php echo isset($myassets['c_nums']) ? htmlentities($myassets['c_nums']) : '0.0000'; ?></p>
         </div>
         <div class="buy_Wpayzu_l">
          <p><?php echo lang('余额'); ?></p>
          <p><?php echo htmlentities($wallet['wallet_num']); ?></p>
         </div>
	     	 <div class="buy_Wpayzu_z"></div>
     </div>

     <div class="buy_inde_dangq">
     	<ul class="clear_wl">
     		<li> <p><span><?php echo lang('当前价格'); ?></span><?php echo htmlentities($coindets['coin_price']); ?></p></li>
     		<li> <p><span><?php echo lang('高'); ?></span><?php echo htmlentities($coindets['coin_price']*1.1); ?><img src="/static/mobile/images/buy_bie.png"></p></li>
     		<li> <p><span><?php echo lang('低'); ?></span><?php echo htmlentities($coindets['coin_price']*0.9); ?> <img src="/static/mobile/images/buy_jiang.png"></p></li>
     	</ul>
     </div>

     <div class="wpzicicon_buy">
	    		<ul class="clear_wl">
	    			<li>
	    				<a href="<?php echo url('/mobile/Transaction/tran_salesell',['coin_name'=>$coindets['coin_name']]); ?>">
	    					<img src="/static/mobile/images/jiaoy01-iocn.png" alt="">
	    					<p><?php echo lang('发布出售订单'); ?></p>
	    				</a>
	    			</li>
	    			<li>
	    				<a href="<?php echo url('/mobile/Transaction/tran_salebuy',['coin_name'=>$coindets['coin_name']]); ?>">
	    					<img src="/static/mobile/images/jiaoy02-iocn.png" alt="">
	    					<p><?php echo lang('发布购买订单'); ?></p>
	    				</a>
	    			</li>
	    			<li>
	    				<a href="<?php echo url('/mobile/Transaction/tran_orderinfos'); ?>">
	    					<img src="/static/mobile/images/jiaoy03-iocn.png" alt="">
	    					<p><?php echo lang('订单'); ?></p>
	    				</a>
	    			</li>
	    			<li>
	    				<a href="<?php echo url('/mobile/Transaction/tran_dealrecords'); ?>">
	    					<img src="/static/mobile/images/jiao04-iocn.png" alt="">
	    					<p><?php echo lang('交易记录'); ?></p>
	    				</a>
	    			</li>
	    		</ul>
	   </div>




 <div class="buy_quexiant">		   
			   <ul class="clear_wl">
			   	  <li id="s1" onclick="cont1();" class="yon"><?php echo lang('一小时'); ?></li>
			   	  <li id="s2"  onclick="cont2();" class=""><?php echo lang('五小时'); ?></li>
			   	  <li id="s3"  onclick="cont3();" class=""><?php echo lang('日线'); ?></li>
			   </ul>

	</div>
<div id="container1"  style="width:100%; height: 300px;margin-top: .2rem;"></div>
<div id="container2"  style="display:none;width:100%; height: 300px; margin-top: .2rem; "></div>
<div id="container3"  style="display:none;width:100%; height: 300px; margin-top: .2rem;"></div>

	  <div class="investment_f">
      <div class="investment_title">
        <div  class="<?php if($type==1): ?>on<?php endif; ?>">
          <a href="<?php echo url('/mobile/Transaction/balance_trade',['type'=>1,'coin_name'=>$coindets['coin_name']]); ?>" ><?php echo lang('购买'); ?></a>
        </div>
        <div class="<?php if($type==2): ?>on<?php endif; ?>"><a href="<?php echo url('/mobile/Transaction/balance_trade',['type'=>2,'coin_name'=>$coindets['coin_name']]); ?>" ><?php echo lang('出售'); ?></a></div>
      </div>
      <div class="investment_con">
        <div class="investment_con_list" >
          <ul class="buy_gaomai">
            <?php if(count($list)>0): if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
              <div class="buy_li_gol">
                <img src="<?php echo htmlentities((isset($v['d_img_head']) && ($v['d_img_head'] !== '')?$v['d_img_head']:'/static/mobile/images/toux-icon.png')); ?>">
                <div class="li_gop">
                  <p style="display:none"><?php echo htmlentities($vo['id']); ?></p>
                  <!-- <p>UID：<span><?php echo htmlentities($vo['userid']); ?></span></p> -->
                  <p><?php echo lang('用户'); ?>：<span><?php echo htmlentities($vo['user']['nickname']); ?></span></p>
                  <p><?php echo lang('币的种类'); ?>：<span class="cid"><?php echo htmlentities($vo['cid']); ?></span></p>
                  <p><span><?php echo lang('限额'); ?>：<?php echo htmlentities($vo['num']); ?></span></p>
                </div>
              </div>
              <div class="buy_li_gor">
                <p>$<?php echo htmlentities($vo['tprice']); ?></p>
                <a href="javascript:void(0);" class="ljzf_but " onclick=""><?php if($vo['type']==1): ?><?php echo lang('购买'); else: ?><?php echo lang('出售'); endif; ?></a>
              </div>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
          </ul>
        </div>
      </div>
    </div>
	 </div>	 
 

  <!--浮动层-->
		    <div class="ftc_wzsf" >
		        <div class="srzfmm_box">
		            <div class="qsrzfmm_bt clear_wl">
		                <img src="/static/mobile/images/xx_03.jpg" class="tx close fl">
		               <input type="hidden" id="dealid" value="">
		                <span class="fl goumaiduix"><span id="ftype"></span>[<span id="fuser"></span>]<br/></span></div>
		            <div class="zfmmxx_shop">
		                <div class="xiange_titel">
		                	<p class="xe_pl"><?php echo lang('限 额'); ?>：<span class="limit" id="fnum"></span></p>
		                	<p class="xe_pr" class="fuid"></p>
		                </div>
                        <center><form> 
		                  <div class="xiange_titel xiange_titela">
		                	<p class="xe_pl" ><?php echo lang('价格'); ?>：</p>
		                	<input type="number" size="40" name="Data"  id="dprice" onkeyup="enfocus()" readonly="readonly" value="" class="jiaoyjis" >
		                	
		                </div>
		                 <div class="xiange_titel">
		                	<p class="xe_pl"><?php echo lang('数量'); ?>：</p>
		                	<input type="number" size="40" name="Data2"  min='0.0' oninput="checkNum(this)"  id="num" onkeyup="enfocus()" class="jiaoyjis livalue" value="" onkeyup="value=value.replace(/[^\d]/g,'')" placeholder="<?php echo lang('请输入数量'); ?>">
		                	<a href="#" class="xe_pl_a"><?php echo lang('全额'); ?></a>
		                </div>

		                  <div class="xiange_titel">
		                	<p class="xe_pl"><?php echo lang('总价'); ?>：</p>
		                	<input type="number" size="40" name="Copy" min='0.0'  onkeyup="enfocus()"  readonly="readonly" id="copy" class="jiaoyjis"> 
		                	
		                </div>
		            </form></center> 
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

<!-- <script type="text/javascript" src="/static/mobile/js/highcharts.js"></script> -->
<!-- <script type="text/javascript" src="/static/mobile/js/export-data.js"></script> -->

<script src="https://img.hcharts.cn/highcharts/highcharts.js"></script>
<script type="text/javascript" src="/static/mobile/js/crowds.js"></script>
<script type="text/javascript">
 
var arr1=[];
function getceshi(){
        
                        
               
                        $.ajax({
                        type : "post",
                        async : false, //同步执行
                        url : "/mobile/Transaction/getcoindets",
                        data : {'coin_name':$('#coin_name').html(),'time':1},
                        dataType : "json", //返回数据形式为json
                        success : function(result) {
                          arr1=$.parseJSON(result);
                          for(var i=0;i<arr1.length;i++){
                                arr1[i]=parseInt(arr1[i]);
                                //console.log(arr1[i]) ;                        
                              }
                    },
                    error : function(errorMsg) {
                        alert("sorry，<?php echo lang('请求数据失败'); ?>");
                      
                    }
                    })
                  return arr1;
    };
    var arr2=[];
function getceshi2(){
        
                        
               
                        $.ajax({
                        type : "post",
                        async : false, //同步执行
                        url : "/mobile/Transaction/getcoindets",
                        data : {'coin_name':$('#coin_name').html(),'time':5},
                        dataType : "json", //返回数据形式为json
                        success : function(result) {
                          arr2=$.parseJSON(result);
                          for(var i=0;i<arr2.length;i++){
                                arr2[i]=parseInt(arr2[i]);
                                //console.log(arr2[i]) ;                        
                              }
                    },
                    error : function(errorMsg) {
                        alert("sorry，<?php echo lang('请求数据失败'); ?>");
                      
                    }
                    })
                  return arr2;
    };
   
    var arr3=[];
function getceshi3(){
        
                       
               
                        $.ajax({
                        type : "post",
                        async : false, //同步执行
                        url : "/mobile/Transaction/getcoindets",
                        data : {'coin_name':$('#coin_name').html(),'time':24},
                        dataType : "json", //返回数据形式为json
                        success : function(result) {
                        
                          arr3=$.parseJSON(result);
                          for(var i=0;i<arr3.length;i++){
                                arr3[i]=parseInt(arr3[i]);
                                //console.log(arr3[i]) ;                        
                              }
                        
                    },
                    error : function(errorMsg) {
                        alert("sorry，<?php echo lang('请求数据失败'); ?>");
                      
                    }
                    })
                  return arr3;
    };
    getceshi();getceshi2();getceshi3();

Highcharts.chart('container1', {
  chart: {
    type: 'area'
  },
  title: {
    text: ''
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    allowDecimals: false,
    labels:{
      formatter: function () {
        // return (1-this.value)*12 ; // clean, unformatted number for year
        // return 60-(this.value/2)*12+'分钟前';
        return 60-(this.value/5)*10+'<?php echo lang("分钟前"); ?>';
      },
    }
  },
  yAxis: {
    title: {
      text: ''
    },
    // max:parseInt(Math.max(arr1)), // 定义Y轴 最大值  
    // min:parseInt(Math.min(arr1)), // 定义最小值  
    // tickInterval:0.2, // 刻度值  
  },
  tooltip: {
    pointFormat: '<?php echo lang("当前值"); ?>：{point.y}'
  },
  plotOptions: {
    area: {
      pointStart: 1,
      marker: {
        enabled: false,
        symbol: 'circle',
        radius: 2,
        states: {
          hover: {
            enabled: true
          }
        }
      }
    }
  },
  series: [{
      name: '<?php echo lang("时间"); ?>',
      data:  arr1
  }, ]
});


Highcharts.chart('container2', {
  chart: {
    type: 'area'
  },
  title: {
    text: ''
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    allowDecimals: false,
    labels: {
      formatter: function () {
        return (5-(this.value/2)) +'<?php echo lang("小时前"); ?>'; // clean, unformatted number for year
      },
       
    }
  },
  yAxis: {
    title: {
      text: ''
    },
    // max:0.6000, // 定义Y轴 最大值  
    // min:0.1000, // 定义最小值  
 
    // tickInterval:0.01, // 刻度值  
  },
  tooltip: {
    pointFormat: '<?php echo lang("当前值"); ?>：{point.y}'
  },
  plotOptions: {
    area: {
      pointStart: 1,
      marker: {
        enabled: false,
        symbol: 'circle',
        radius: 2,
        states: {
          hover: {
            enabled: true
          }
        }
      }
    }
  },
  series: [{
    name: '<?php echo lang("时间"); ?>',
    data: arr2
  }, ]
});



Highcharts.chart('container3', {
  chart: {
    type: 'column'
  },
  title: {
    text: ''
  },
  xAxis: {
    // categories: ['0', '1', '2', '3', '4', '5', '6', '7', '9', '10', '11', '12', '13', '14', '15', '16', '17','18', '19', '20', '21', '22','23',]
    categories: ['<?php echo lang("五天前"); ?>','<?php echo lang("四天前"); ?>','<?php echo lang("三天前"); ?>','<?php echo lang("两天前"); ?>','<?php echo lang("昨天"); ?>','<?php echo lang("现在"); ?>']
  },
  credits: {
    enabled: false
  },
  series: [{
    name: '<?php echo lang("时间"); ?>',
    data:  arr3
    
    // data: [0.5,0.1112,1.5555]
  }]
});

</script>



<script type="text/javascript">
    
    $(document).ready(function(){ 
    // 　　  $('.highcharts-legend').remove('g');
    // $('highcharts-background').css('height','20vmin');
    });
   var a=0;

    $('.xe_pl_a').click(function(){
      var limitvalue = $('.limit').text();
      $('.livalue').val(limitvalue);
      enfocus();
    })


    function enfocus() 
    { 
        var t1 = document.forms[0].Data.value; 
        var t2 = document.forms[0].Data2.value; 
        var t3 = document.forms[0].Copy.value ;
        var xnum=$('#fnum').html();
        var num=$('#num').val();
        
        if(Number(num)>Number(xnum)){
          msg_alert('<?php echo lang("超出限额数量"); ?>');
          document.getElementById("copy").value = "";
          a=0;
          return false;
        }else{
         
          if(t1!="" && t2!=""){ 
            var floatValue = parseFloat(t1) * parseFloat(t2);
            document.getElementById("copy").value = floatValue.toFixed(4) ; 
            a=1; 
          } 
          else {
            document.getElementById("copy").value = "";
            a=0;
          }
        } 
    } 

    $(document).ready(function(){
        $("#dig_xiala").click(function(){
          $("#dig_xiala_xs").toggle(); //toggle() 方法切换元素的可见状态。 如果被选元素可见,则隐藏这些元素,如果被选元素隐藏,则显示这些元素。
        });	 
    });


      //限制number  输入格式
      function checkNum(obj){

        obj.value = obj.value.replace(/^(\-)*(\d+)\.(\d\d\d\d).*$/,'$1$2.$3');//只能输入三个小数.(\d\d\d) 修改个数  加\d
      }

      function gbzhi(s1,s2,s3,s4) 
      { 

          $(".limit").text(s1);
          $(".goumaiduix").html("<?php echo lang('向'); ?>["+s3+"]<?php echo lang('购买'); ?><br>123");
          $("#dprice").val(s2);	
          // $("#dealid").val(s4);	
          $(".ftc_wzsf").show();                  
      }
      function cont1(){
        $("#container2").hide();
        $("#container3").hide();
        $("#container1").show();
        $("#s2").removeClass("yon");
        $("#s1").addClass("yon");
        $("#s3").removeClass("yon");
      }

      function cont2(){
        $("#container1").hide();
        $("#container3").hide();
        $("#container2").show();
        $("#s1").removeClass("yon");
        $("#s2").addClass("yon");
        $("#s3").removeClass("yon");
      }


      function cont3(){
        $("#container1").hide();
        $("#container2").hide();
        $("#container3").show();
        $("#s2").removeClass("yon");
        $("#s3").addClass("yon");
        $("#s1").removeClass("yon");
      }

      $(function(){
        
          //出现浮动层
          $(".ljzf_but").click(function(){
            id=$(this).parents('li').find('p').eq(0).text();
            $.post('/mobile/Transaction/orderinfo',{'id':id},function(data){
                if(data==1){
                  $(".ftc_wzsf").hide();
                  msg_alert('<?php echo lang("自己不能和自己交易"); ?>');
                  
                  return false;
                }
                $('#fuser').html(data.nickname);
                $('#fnum').html(data.num);
                $('.fuid').html(data.userid);
                $('#dprice').val(data.dprice);
                $('#dealid').val(data.id);
                if(data.type==1){
                  $('#ftype').html('<?php echo lang("购买"); ?>');
                }else{
                  $('#ftype').html('<?php echo lang("出售"); ?>');
                }
            },'json')
              $(".ftc_wzsf").show();
          });
          $("#container2").hide();
          $("#container3").hide();

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
          post_flag = false;
          $(".nub_ggg li .zf_num").click(function(){
            if(a==0){
              msg_alert('<?php echo lang("数量错误"); ?>');
              return false;
              }
              if(i<6){
                  $(".mm_box li").eq(i).addClass("mmdd");
                  $(".mm_box li").eq(i).attr("data",$(this).text());                      
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
                      var orderid = parseInt($('#dealid').val());//订单ID
                      // var cid = $('#cid').val();//币的种类
                      var ss1=parseFloat($(".limit").text());			
                      
                      
                          $.ajax({
                              url:'/mobile/Transaction/tran_buysell',
                              asyn:false,
                              type:'post',
                              data:{'dprice':dprice,'num':num,'tprice':tprice,'pwd':pwd,'ss1':ss1,'orderid':orderid},
                              datatype:'json',
                              success:function (mes) {
                                //console.log(mes);
                                post_flag = false;
                              
                                  if(mes.status == 1){

                                    $(".ftc_wzsf").hide();
                                      msg_alert(mes.message,mes.url);
                                      
                                  }else{
                                      msg_alert(mes.message);
                                      
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
          
      });

</script>


</body>
</html>