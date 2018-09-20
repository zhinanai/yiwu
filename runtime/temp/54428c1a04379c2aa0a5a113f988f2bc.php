<?php /*a:2:{s:71:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/growth/conpay.html";i:1537428796;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> <?php echo lang('提交打款'); ?> </title>
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
    .pagination div span {
        padding: 0 0.3rem;
    }
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
        <h2><?php echo lang('提交打款'); ?></h2>
    </div>
    <div class="header_r"></div>
</div>
<div class="demo">
    <div class="accordion">
        <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>

        <ul class="pagination">
            <div style="margin-top:1.2rem;text-align: center;color: #999">
                <span class="rows"><?php echo lang('没有相关内容'); ?></span>
            </div>
        </ul>

        <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v): ?>
        <div class="changeclass">
            <div class="accordion-handle">
                <h4>
                    <p class="accmrp"><?php echo lang('买入金额'); ?>：<?php echo htmlentities($v['money']); ?>RMB
                        <span class="acco_con_spana"> <?php if(empty($v['pic']) || (($v['pic'] instanceof \think\Collection || $v['pic'] instanceof \think\Paginator ) && $v['pic']->isEmpty())): ?><?php echo lang('确认收款'); else: ?><?php echo lang('等待收款'); endif; ?></span>
                    </p>
                    <p><?php echo htmlentities($v['create_time']); ?> 
                        <span><?php echo lang('收款人'); ?>：<?php echo htmlentities($v['name']); ?></span>
                    </p>
                </h4>
                <i></i>
            </div>
            <div class="accordion-content por">
                <div class="acco_con_up">
                    <p><?php echo lang('收款人姓名'); ?>：
                        <span> <?php echo htmlentities($v['name']); ?></span>
                    </p>
                    <p><?php echo lang('手机号码'); ?>：
                        <span><?php echo htmlentities($v['users']['mobile']); ?></span>
                    </p>
                    <p><?php echo lang('开户银行'); ?>：
                        <span><?php echo htmlentities($v['bandcard_name']); ?></span>
                    </p>
                    <p><?php echo lang('银行卡号'); ?>：
                        <span><?php echo htmlentities($v['bandcard_cardnumber']); ?></span>
                    </p>
                    <p><?php echo lang('开户支行'); ?>：
                        <span><?php echo htmlentities($v['bandcard']['account_opening_branch']); ?></span>
                    </p>
                    <p><?php echo lang('交易金额'); ?>：
                        <span><?php echo htmlentities($v['tomoney']); ?>RMB</span>
                    </p>
                    <p><?php echo lang('状态'); ?>：
                        <span class="acco_con_spana"><?php if(empty($v['pic']) || (($v['pic'] instanceof \think\Collection || $v['pic'] instanceof \think\Paginator ) && $v['pic']->isEmpty())): ?><?php echo lang('确认收款'); else: ?><?php echo lang('等待收款'); endif; ?></span>
                    </p>
                </div>
                <div class="acco_con_upa">
                    <h3><?php echo lang("上传打款截图"); ?></h3>
                    <?php if(empty($v['pic']) || (($v['pic'] instanceof \think\Collection || $v['pic'] instanceof \think\Paginator ) && $v['pic']->isEmpty())): ?>
                    <div class="shangcjt">
                        <form id='myupload<?php echo htmlentities($v['id']); ?>' action="" method='post' enctype='multipart/form-data'>
                            <div class="containera"></div>
                            <input type="text" value="<?php echo htmlentities($v['id']); ?>" name="id" class="chid">
                             <input type="file" id="photo" name="pic" class="shangcanj">
                        </form>
                    </div>
                    <?php else: ?>
                    <img src="<?php echo htmlentities($v['pic']); ?>" width="100" class="shangcanj"> <?php endif; ?>
                </div>

                <a onclick="form(<?php echo htmlentities($v['id']); ?>)" class="<?php echo !empty($v['pic']) ? 'paid' : 'lanseanna'; ?>"><?php echo lang("提交"); ?></a>
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
    
            $('.shangcanj').change(function (e) {
                var old_this = $(this);
               var pform= old_this .parent();
              console.log(pform);
                var files = this.files;
                var img = new Image();
                var reader = new FileReader();
                reader.readAsDataURL(files[0]);
                reader.onload = function (e) {
                    var dx = (e.total / 1024) / 1024;
                    if (dx >= 2) {
                        alert("<?php echo lang('文件不能大于2M'); ?>");
                        return;
                    }
                    img.src = this.result;
                    img.style.width = "100%";
                    img.style.height = "90%";
                   pform.find('.containera').html(img);
                }
            })
    
        function form(id) {
                var old = $(this);
                var fid="myupload"+id;
                var formData = new FormData(document.getElementById(fid));
                $.ajax({
                    url: '',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    // dataType: 'json',
                    success: function (data) {
                        if (data.status == 1) {
                            msg_alert(data.msg);
                            old.parents('.changeclass').find('.acco_con_spana').text('<?php echo lang("等待收款"); ?>');
                            old.text('<?php echo lang("已打款"); ?>');
                            old.addClass('paid').removeClass('lanseanna');
                        } else {
                            msg_alert(data.msg);
                        }
                    },
                    error: function (xhr) { //上传失败
                        msg_alert('<?php echo lang("上传失败"); ?>');
                    }
                   
                })
    
            }
        </script>
    
</body>
</html>