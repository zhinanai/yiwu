$(document).ready(function(){$(".accordion").respTabs({model:"accordions"})});function quxiao(orderid){$.ajax({url:"/mobile/Growth/cancellation_of_order",asyn:false,type:"post",data:{"id":orderid},datatype:"json",success:function(mes){msg_alert(mes.msg,mes.url);if(!mes.url){location.reload()}}})};