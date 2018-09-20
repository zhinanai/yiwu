
//公共提示框
function msg_alert(message,url){
  
  if(url){
    layer.msg(message,{time:1000},function(){
          window.location.href=url;
        });
  }else{
    layer.msg(message,{time:1500});
  }
  
}

$(".notopen").click(function(){
	msg_alert("{:lang('该功能暂未开放，敬请期待')}");
});