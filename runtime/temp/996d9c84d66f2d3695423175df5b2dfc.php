<?php /*a:2:{s:67:"/www/wwwroot/yiwunqianbaonew/application/admin/view/tree/index.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>标题</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/admin/css/xadmin.css" media="all"/>
    <link rel="stylesheet" href="/static/admin/css/swiper.min.css" media="all"/>
    <link rel="stylesheet" href="/static/common/lib/layui/css/layui.css" media="all"/>
    <style>
        .childrenBody {
            margin-top: 10px;
            padding: 0 20px;
        }
        p{color: #fff !important;}
    </style>
    

<link rel="stylesheet" href="https://at.alicdn.com/t/font_741477_4inbu7de1oj.css">
<link rel="stylesheet" href="/static/admin/css/treestyle.css">
<style>
    .layui-elem-quote{background: rgba(0, 0, 0, 0.3);}
    .layui-inline button{border-radius: 2px;border: none;}
    body{background: none !important;}
</style>

</head>
<body class="childrenBody">

<div id="main" class="col-xs-12 col-sm-9 main" style="overflow-y: scroll;">
    <blockquote class="layui-elem-quote news_search">
      <form action="<?php echo url('/admin/Tree/Index'); ?>" method="post">
        <div class="layui-inline">
            <div class="layui-input-inline">
                <input name="id" type="text" class="layui-input searchUser" placeholder="请输入搜索的UID">
            </div>
            <button type="submit"><a class="layui-btn search_btn">搜索</a></button>
        </div>
      </form>

    </blockquote>
    <div class="tab-content ct-tab-content">
        <div class="panel-body">
            <div class="builder formbuilder-box">
                <!-- 数据列表 -->
                <div class="builder-container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="builder-table">
                                <div class="panel panel-default table-responsive">
                                    <!-- 树 -->
                                    <ul id="treeid" class="tree">

                                      <li id="treeid_1" treenode="">
                                       <!--  <button type="button" id="treeid_1_switch" title="" class="switch_center_close" treenode_switch="" onfocus="this.blur();"></button> -->
                                        <a id="treeid_1_a" treenode_a="" onclick="" target="_blank" data-href="123">
                                            <button type="button" id="treeid_1_ico" title="" treenode_ico="" onfocus="this.blur();" class=" ico_open"></button>
                                            <span id="treeid_1_span" <?php if($my != ''): ?> class="edits" data-src="<?php echo url('/admin/User/editUser',['id'=>$my['id']]); ?>" }<?php else: endif; ?> ><?php if($my != ''): ?><?php echo htmlentities($my['mobile']); else: ?>one<?php endif; ?></span>
                                        </a>
                                        <?php if(count($users) > 0){ ?>
                                        <ul id="treeid_1_ul" class="" style="display: block;">
                                            <?php 
                                            $i = 1;
                                            foreach ($users as $k => $tree):
                                                $i++;
                                            ?>
                                            <li id="treeid_<?=$i?>" treenode="">
                                                <button onclick="javascript:showTree(this,'<?=$tree->id?>')" type="button" id="treeid_<?=$i?>_switch" title="" class="switch_center_close" treenode_switch="" onfocus="this.blur();"></button>
                                                <a href="javascript:;" id="treeid_<?=$i?>_a" treenode_a="" target="_blank">
                                                    <button type="button" id="treeid_<?=$i?>_ico" title="" treenode_ico="" onfocus="this.blur();" class=" ico_docu"></button>
                                                    <span id="treeid_<?=$i?>_span"  class="edits"  data-src="<?php echo url('/admin/User/editUser',['id'=>$tree['id']]); ?>"><?=$tree->mobile?></span>
                                                </a> 
                                                <ul id="treeid_<?=$i?>_ul" class="line" style="display: none"></ul>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <?php }?>
                                      </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                   
</div>


<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>

<script>
    // $(function () {
        function showTree(obj,munumber){
     
         if($(obj).attr('class') == 'switch_center_close'){
             $(obj).attr('class','switch_center_open');
             $.ajax({
                 type: "POST",
                 url:"<?php echo url('/admin/Tree/tree'); ?>",
                 data:'id='+munumber,
                 dataType:'json',
                 success:function(tree){
                    // //console.log(tree);
                     if(tree.length > 0){
                         var ulstr = '';
                         for(var i = 0;i<tree.length;i++){
                             ulstr += '<li  treenode=""><button type="button" onclick="javascript:showTree(this,\''+tree[i].id+ '\')" title="" class="switch_center_close" treenode_switch="" onfocus="this.blur();"></button><a onclick="" style=""><button type="button"   title="" treenode_ico="" onfocus="this.blur();" class=" ico_docu" style=""></button><span class="edits"  data-src="/admin/User/editUser/id/'+tree[i].id+'">'+ tree[i].mobile +'</span></a><ul class="line" style="display: none"></ul></li>';
                         }
                         $(obj).parent().find('ul').attr('style','display:block');
                         $(obj).parent().find('ul').append(ulstr);
                     }
                 },
             });
         }else if($(obj).attr('class') == 'switch_center_open'){
             $(obj).attr('class','switch_center_close');
             $(obj).parent().find('ul').html('');
         }
      }

    // });
    layui.config({
    base: "/static/admin/js/"
    }).use(['form', 'layer', 'jquery', 'table'], function () {
    $("body").on('click','.edits',function(){
        
        var src=$(this).attr("data-src");
           //console.log(src);
        var index = layui.layer.open({
            title : "修改管理员",
            type : 2,
            content : src,
            success : function(layero, index){
                setTimeout(function(){
                    layui.layer.tips('点击此处返回用户列表', '.layui-layer-setwin .layui-layer-close', {
                        tips: 3
                    });
                },500)
            }
        })
        $(window).resize(function(){
            layui.layer.full(index);
        })
        layui.layer.full(index);
            
    })
})
</script>

</body>
</html>