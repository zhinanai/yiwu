
// 公共提示
function msg_alert(message,url){

    if(url){
        layer.msg(message,{time:2000},function(){
            window.location.reload();
        });
    }else{
        layer.msg(message,{time:1500});
    }

}
function msg_alert_url(msg,url) {
    if(url){
        layer.msg(msg,{time:1500},function(){
            window.location.href=url;
        })
    }else{
        layer.msg(msg,{time:1500});
    }
}
function checkNum(obj){
    obj.value = obj.value.replace(/^(\-)*(\d+)\.(\d\d\d\d).*$/,'$1$2.$3');//只能输入三个小数.(\d\d\d) 修改个数  加\d
}