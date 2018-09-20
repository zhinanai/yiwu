<?php /*a:2:{s:66:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/shop/map.html";i:1535421736;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 地图 </title>
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
<style>
    .map-wrap {
        height: 7rem;
    }
    #mapPage{
        width: 100%;
        height: 13.34rem;
    }
</style> 
   
</head>
<body>

<iframe id="mapPage"frameborder=0 src="https://apis.map.qq.com/tools/locpicker?search=1&type=1&key=OB4BZ-D4W3U-B7VVO-4PJWW-6TKDJ-WPB77&referer=myapp">
</iframe>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script>
    window.addEventListener('message', function (event) {
        // 接收位置信息，用户选择确认位置点后选点组件会触发该事件，回传用户的位置信息
        var loc = event.data;
        if (loc && loc.module == 'locationPicker') {
            var city = loc.cityname;
            var lat = loc.latlng.lat;
            var lng = loc.latlng.lng;
            var address = loc.poiaddress;
            //window.location.replace('<?php echo url("/mobile/User/sellers"); ?>');
            $.ajax({
                url:'/mobile/shop/map',
                method:'post',
                data:{city:city,lat:lat,lng:lng,address:address},
                dataType:'JSON',
                success:function(data){
                    if(data.code='0'){
                        msg_alert(data.msg,data.url);
                    }
                    else
                    msg_alert(data.msg,data.url);
                },
                error:function (data) {
                }
            })

        }
    }, false);
</script> 
</body>
</html>