layui.config({
    base: "/static/admin/js/"
}).use(['form', 'layer', 'jquery', 'table'], function () {
    var form = layui.form,
        layer = parent.layer === undefined ? layui.layer : parent.layer,
        table = layui.table,
        $ = layui.jquery;
  

    //添加
    $(".adminAdd_btn").click(function(){
       
        var index = layui.layer.open({
            title : "添加管理员",
            type : 2,
            content : "/admin/admin/addAdmin",
            success : function(layero, index){
                setTimeout(function(){
                    layui.layer.tips('点击此处返回用户列表', '.layui-layer-setwin .layui-layer-close', {
                        tips: 3
                    });
                },500)
            }
        })
        //改变窗口大小时，重置弹窗的高度，防止超出可视区域（如F12调出debug的操作）
        $(window).resize(function(){
            layui.layer.full(index);
        })
        layui.layer.full(index);
    })
    //执行管理员添加
    form.on("submit(addadmin)",function(data){
        // alert(1);
        $.post('/admin/admin/addAdmin',data.field,function (res) {
            console.log(res);
           if(res==1){
                top.layer.msg("添加成功");
                layer.closeAll("iframe"); 
            //刷新父页面
            parent.location.reload();
        } else {
            top.layer.msg(res);
        }
        });

        return false;
    })
    //执行角色添加
    form.on("submit(addrole)",function(data){
        // alert(1);
        $.post('/admin/Role/addrole',data.field,function (res) {
            console.log(res);
           if(res==1){
                top.layer.msg("添加成功");
                layer.closeAll("iframe"); 
            //刷新父页面
            parent.location.reload();
        } else {
            top.layer.msg(res);
        }
        });

        return false;
    })
    //执行修改
    form.on("submit(editadmin)",function(data){
        // alert(1);
        $.post('/admin/admin/editAdmin',data.field,function (res) {
            console.log(res);
           if(res){
                top.layer.msg("修改成功");            
                layer.closeAll("iframe"); 
            //刷新父页面
            parent.location.reload();
        } else {
            top.layer.msg('修改失败');
        }
        });

        return false;
    })
    //删除
    $(".admins_del").click(function(){
        
        var id=$(this).attr("data-id");
            layer.confirm('真的删除？', function(index){
                // obj.del(); //删除对应行（tr）的DOM结构，并更新缓存
                layer.close(index);
                //向服务端发送删除指令
                $.post('/admin/admin/delete', {
                                    id: id
                                }, function (data) {
                                    // console.log(data);
                                    if (data) {
                                        console.log(data);
           
                                        top.layer.msg("删除成功");
                                        layer.closeAll("iframe");
                                    //刷新父页面
                                    parent.location.reload();
                                    } else {
                                        top.layer.msg("出错了！！！");
                                    }
                
                                }
                            );
            });
       
    })
    //修改
    $(".admins_edit").click(function(){
        
        var id=$(this).attr("data-id");
        //    alert(id);
        var index = layui.layer.open({
            title : "修改管理员",
            type : 2,
            content : "/admin/admin/editAdmin?id="+id,
            success : function(layero, index){
                setTimeout(function(){
                    layui.layer.tips('点击此处返回用户列表', '.layui-layer-setwin .layui-layer-close', {
                        tips: 3
                    });
                },500)
            }
        })
        //改变窗口大小时，重置弹窗的高度，防止超出可视区域（如F12调出debug的操作）
        $(window).resize(function(){
            layui.layer.full(index);
        })
        layui.layer.full(index);
                
           
       
    })
    //批量删除
    $(".batchDel").click(function(){
        var checkStatus = table.checkStatus('list');
        // console.log(checkStatus);
        if(checkStatus.data.length>0){
            var datalist={};
            for(var i=0;i<checkStatus.data.length;i++){
                 datalist[i]=checkStatus.data[i].id;    
            }
            // console.log(datalist);
            layer.confirm('真的删除'+checkStatus.data.length+'条？', function(index){
                // obj.del(); //删除对应行（tr）的DOM结构，并更新缓存
                layer.close(index);
                //向服务端发送删除指令
                $.post('/admin/user/batchdel', {
                                    ids: datalist
                                }, function (data) {
                                    // console.log(data);
                                    if (data) {
                                        top.layer.msg("删除成功");
                                        window.location.reload();
                                    } else {
                                        top.layer.msg("出错了！！！");
                                    }
                
                                }
                            );
            });
        }else{
            top.layer.msg("请选择数据！！");
        }
    })
   
        //用户搜索
        $('.search_btn').click(function () {

            var nickname= $('.searchVal').val();
    
            console.log(nickname);
    
            table.reload('list', {
    
                 url: '/admin/user/userList'
    
                ,where: {nickname:nickname} //设定异步数据接口的额外参数
    
            });
    
        })


})