<?php /*a:2:{s:74:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/growth/cardinfos.html";i:1535595570;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>选择银行卡</title>
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
    
<link rel="stylesheet" href="/static/mobile/css/yangStyle.css">
<link rel="stylesheet" href="/static/mobile/css/wenStyle.css"/>
<style>
    .addBankCard{margin-top: 0;}
    .w_card{width: 5.2rem;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
</style>
   
</head>
<body>

<div class="header">
    <div class="header_l">
        <a href="javascript:history.go(-1)"><img src="/static/mobile/images/jiant.png" alt=""></a>
    </div>
    <div class="header_c">
        <h2><?php echo lang('选择银行卡'); ?></h2></div>
    <div class="header_r"></div>
</div>
<div class="big_width100">
    <div class="pad10"></div>
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v): ?>
        <div class="myBankCard">
            <?php if(strtoupper($sell) == '1'): ?> 
                <a href="/mobile/Trading/sell/bid/<?php echo htmlentities($v['id']); ?>" class="clear_wl">
              <?php else: ?> 
                 <a href="/mobile/Growth/purchase/bid/<?php echo htmlentities($v['id']); ?>" class="clear_wl">
            <?php endif; ?>
            
                <img src="<?php echo htmlentities($v['AccountOpeningBank']['pic']); ?>">
                <div class="yhxx">
                    <p><?php echo htmlentities($v['AccountOpeningBank']['bank_name']); ?></p>
                    <p class="w_card"><?php echo htmlentities($v['cardnumber']); ?></p>
                </div>
            </a>
            <div class="myBankCard_snac">
                <a href="javascript:void(0)" onclick="deleteb(this)" data-id="<?php echo htmlentities($v['id']); ?>"><?php echo lang('删除'); ?></a>
            </div>
        </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <div class="addBankCard" style="margin-top: 1.2rem">
        <a href="<?php echo url('/mobile/Growth/addbank'); ?>" class="clear_wl"><img src="/static/mobile/images/addyhk.png"> <p><?php echo lang('添加银行卡'); ?></p></a>
    </div>
 </div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script>
        function deleteb(e) {
            var bangid = $(e).attr('data-id');
            if(bangid == ''){
                msg_alert('<?php echo lang("请选择对应银行卡进行操作"); ?>');
                return false;
            }
            $.ajax({
                url:'',
                type:'post',
                data:{'id':bangid},
                datatype:'json',
                success:function (mes) {
                    if(mes.status == 1){
                        msg_alert(mes.msg,mes.url);
                    }else{
                        msg_alert(mes.msg);
                    }
                }
            })
        }
        </script>

</body>
</html>