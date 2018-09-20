<?php /*a:2:{s:72:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/growth/addbank.html";i:1535609480;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
<?php echo lang('添加银行卡'); ?>
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
    
<link rel="stylesheet" href="/static/mobile/css/yangStyle.css">
<style>
    .ansel_search{border-bottom: 1px solid #ff0000 !important;}
    .ansel_search input:-ms-input-placeholder{color:#ff0000}
    .ansel_searchinput:-moz-placeholder{color:#ff0000}
    .ansel_search input::-webkit-input-placeholder{color:#ff0000}
    .demo{ margin-bottom: 0px;}
    .tips{ margin: 10px 0; }
</style>

   
</head>
<body>

    <div class="header">
        <div class="header_l">
                <a href="javascript:history.go(-1)"><img src="/static/mobile/images/jiant.png" alt=""></a>
        </div>
        <div class="header_c"><h2><?php echo lang('添加银行卡'); ?></h2></div>
        <div class="header_r"></div>
    </div>
    
    <div class="big_width100">
        <div class="tips">*<?php echo lang('请绑定持卡人本人的银行卡，姓名一经填写不可修改'); ?>!</div>
        <div class="add_bank_add_gr">
            <div class="fill_sty add_gr_b10">
                <p><?php echo lang('持卡人姓名'); ?></p>
                <input type="text" name="other_account" placeholder="<?php echo lang('姓名'); ?>" autocomplete="off" id="crkxm">
            </div>
            <div class="fill_sty add_gr_b10">
                <p><?php echo lang('开户银行'); ?></p>
                <div class="demo">
                    <select class="select" isval="true" msg="<?php echo lang('请选择开户行'); ?>" id="khy">
                        <option value="0" selected><?php echo lang('请选择开户行'); ?></option>
                        <?php if(is_array($account_opening_bank) || $account_opening_bank instanceof \think\Collection || $account_opening_bank instanceof \think\Paginator): if( count($account_opening_bank)==0 ) : echo "" ;else: foreach($account_opening_bank as $i=>$v): ?>
                        <option value="<?php echo htmlentities($v['id']); ?>" ><?php echo htmlentities($v['bank_name']); ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <!--开户名-->
            <div class="fill_sty add_gr_b10">
                <p><?php echo lang('银行卡号'); ?></p>
                <input type="text" name="other_account" placeholder="<?php echo lang('请输入开户银行的卡号'); ?>" autocomplete="off" id="yhk">
            </div>
            <div class="fill_sty add_gr_b10 mababno">
                <p><?php echo lang('开户支行'); ?></p>
                <input type="text" name="other_account" placeholder="<?php echo lang('请输入开户银行的支行分行'); ?>" autocomplete="off" id="khzy">
            </div>
        </div>
    
        <label class="label_check" for="checkbox-01" class="status">
            <input name="sample-checkbox-01"  class="status" id="checkbox-01" value="1" type="checkbox" checked=""><?php echo lang('设置为默认银行卡'); ?>
        </label>
        <input type="hidden" name="__token__" value="<?php echo htmlentities(app('request')->token()); ?>" id="token"/>
        <div class="buttonGeoup">
            <a  class="not_next" id="confirm"><?php echo lang('确定'); ?></a>
        </div>
    </div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script type="text/javascript" src="/static/mobile/js/ansel_select.js"></script>
<script type="text/javascript" src="/static/mobile/js/ansel_select.js"></script>
    <script>
        $('#confirm').click( function(){
            var name =$.trim($('#crkxm').val()); //姓名
            var open_id =$.trim($('#khy').val()); //开户行
            var cardnumber =$.trim($('#yhk').val()); //银行卡
            var account_opening_branch =$.trim($('#khzy').val()); //开户支行
            var token =$.trim($('#token').val());
            var status =$.trim($('#checkbox-01').val());
            if(name == ''){
                msg_alert("<?php echo lang('请填写持卡人姓名'); ?>");
                return false;
            }else if(open_id==0){
                msg_alert("<?php echo lang('请选择开户行'); ?>");
                return false;
            }else if(cardnumber == ''){
                msg_alert("<?php echo lang('银行卡号不能为空！'); ?>");
                return false;
            } else if(account_opening_branch == ''){
                msg_alert("<?php echo lang('开户银行支行分行输入有误'); ?>");
                return false;
            }
            $.post("/mobile/Growth/doaddbank",{name:name,open_id:open_id,cardnumber:cardnumber,account_opening_branch:account_opening_branch,status:status,token:token},function(mes){
                if(mes.status == 1){
                   // msg_alert();
                    //javascript:location.reload();
                    layer.msg(mes.msg, {
                        time: 2000 //2秒关闭（如果不配置，默认是3秒）
                    }, function(){
                        history.go(-1);
                        location.reload();
                    });
                }else{
                    msg_alert(mes.msg);
                }
            },"json");
        });

        function setupLabel() {
            if ($('.label_check input').length) {
                $('.label_check').each(function(){
                    $(this).removeClass('c_on');
                    $('#checkbox-01').val("0"); 
                });
                $('.label_check input:checked').each(function(){
                    $(this).parent('label').addClass('c_on');
                     $('#checkbox-01').val("1"); 
               
                });
            };
            // if ($('.label_radio input').length) {    /////
            //     $('.label_radio').each(function(){
            //         $(this).removeClass('r_on');
            //         alert($(this));
            //         //console.log($(this).removeClass('c_on'));
            //     });
            //     $('.label_radio input:checked').each(function(){
            //         $(this).parent('label').addClass('r_on');
            //     });
            // };
        };
        $(document).ready(function(){
            $('body').addClass('has-js');
            $('.label_check, .label_radio').click(function(){
                setupLabel();
            });
            setupLabel();
        });

        //插件初始化配置
        $('.select').anselcfg({});
    </script>

</body>
</html>