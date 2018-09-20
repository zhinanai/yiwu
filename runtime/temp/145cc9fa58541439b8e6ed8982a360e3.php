<?php /*a:2:{s:73:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/trading/conpayd.html";i:1537328251;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 确认收款 </title>
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
<style>
</style>
   
</head>
<body>

<div class="header">
    <div class="header_l">
        <a href="<?php echo url('/mobile/Growth/buycenter'); ?>">
            <img src="/static/mobile/images/jiant.png" alt="">
        </a>
    </div>
    <div class="header_c">
        <h2><?php echo lang("确认收款"); ?></h2>
    </div>
    <div class="header_r"></div>
</div>

<div class="demo">
    <div class="accordion">
        <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
        <ul class="pagination">
                <div style="margin-top:1.2rem;text-align: center;color: #999;">
                <span class="rows"><?php echo lang("没有相关内容"); ?></span>
            </div>
        </ul>


        <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v): ?>
        <div class="accordion-handle">
            <h4>
                <p class="accmrp"><?php echo lang("卖出金额"); ?>：<?php echo htmlentities($v['money']); ?>
                    <span class="acco_con_spana"><?php echo lang("确认收款"); ?></span>
                </p>
                <p><?php echo htmlentities($v['update_time']); ?>
                    <span><?php echo lang("打款人"); ?>：<?php echo !empty($v['buy_id']) ? htmlentities($v['user']['nickname']) : ''; ?></span>
                </p>
            </h4>
            <i></i>
        </div>
        <div class="accordion-content por">
            <div class="acco_con_up">
                <p><?php echo lang("打款人姓名"); ?>：
                    <span><?php echo !empty($v['buy_id']) ? htmlentities($v['user']['nickname']) : ''; ?></span>
                </p>
                <p><?php echo lang("手机号码"); ?>：
                    <span><?php echo !empty($v['buy_id']) ? htmlentities($v['user']['mobile']) : ''; ?></span>
                </p>

                <p><?php echo lang("交易金额"); ?>：
                    <span><?php echo !empty($v['buy_id']) ? htmlentities($v['tomoney']) : ''; ?>RMB</span>
                </p>
                <p><?php echo lang("状态"); ?>：
                    <span class="acco_con_spana"><?php echo lang("确认收款"); ?></span>
                </p>
            </div>
            <div class="acco_con_upa">
                <h3><?php echo lang("上传打款截图"); ?></h3>
                <div class="shangcjt">

                    <div class="containera">
                        <a href="/mobile/Growth/paidimg?id=<?php echo htmlentities($v['id']); ?>">
                            <img src="<?php echo htmlentities($v['pic']); ?>" class="img">
                        </a>
                    </div>
                </div>
            </div>
            <a href="#" class="<?php echo $v['status']==2 ? 'paid' : 'lanseanna'; ?>" data-id="<?php echo htmlentities($v['id']); ?>"><?php echo lang("确认已收款"); ?></a>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
    </div>
</div>



   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script type="text/javascript" src="/static/mobile/js/responsive.tabs.js"></script>
<script>
    $(document).ready(function () {
        $('.accordion,.changeclass').respTabs({
            model: 'accordions'
        });
    });

    $('.lanseanna').click(function () {
        var old = $(this);
        var trid = $(this).attr('data-id');
        if (trid == '') {
            msg_alert('<?php echo lang("请选择正确的收款"); ?>');
            return false;
        }
        var img = $('.img').attr('src');
        if (img == '') {
            msg_alert('<?php echo lang("未上传凭证"); ?>');
            return false;
        }
        $.ajax({
            url: '',
            type: 'post',
            data: { 'trid': trid },
            datatype: 'json',
            success: function (mes) {
                if (mes.status == 1) {
                    old.parents('.changeclass').find('.acco_con_spana').text('<?php echo lang("已收款"); ?>');
                    old.text('<?php echo lang("已收款"); ?>');
                    old.addClass('paid').removeClass('lanseanna');
                    msg_alert(mes.msg);
                } else {
                    msg_alert(mes.msg);
                }
            }
        })
    })
</script> 
</body>
</html>