layui.config({
    base: "/static/admin/js/"
}).use(['form', 'layer', 'jquery', 'table'], function () {
    var form = layui.form,
        layer = parent.layer === undefined ? layui.layer : parent.layer,
        table = layui.table,
        $ = layui.jquery;


    // //添加
    // $(".userAdd_btn").click(function(){
    //     var index = layui.layer.open({
    //         title : "添加用户",
    //         type : 2,
    //         content : "/admin/user/adduser",
    //         success : function(layero, index){
    //             setTimeout(function(){
    //                 layui.layer.tips('点击此处返回用户列表', '.layui-layer-setwin .layui-layer-close', {
    //                     tips: 3
    //                 });
    //             },500)
    //         }
    //     })
    //     //改变窗口大小时，重置弹窗的高度，防止超出可视区域（如F12调出debug的操作）
    //     $(window).resize(function(){
    //         layui.layer.full(index);
    //     })
    //     layui.layer.full(index);
    // })
    //  //会员等级
    //  $(".leveluser_btn").click(function(){
    //     //  alert(1);
    //     var index = layui.layer.open({
    //         title : "会员等级",
    //         type : 2,
    //         content : "/admin/user/leveluser",
    //         success : function(layero, index){
    //             setTimeout(function(){
    //                 layui.layer.tips('点击此处返回用户列表', '.layui-layer-setwin .layui-layer-close', {
    //                     tips: 3
    //                 });
    //             },500)
    //         }
    //     })
    //     //改变窗口大小时，重置弹窗的高度，防止超出可视区域（如F12调出debug的操作）
    //     $(window).resize(function(){
    //         layui.layer.full(index);
    //     })
    //     layui.layer.full(index);
    // })
    // //充值记录
    // $(".userlog_btn").click(function(){
    //     //  alert(1);
    //     var index = layui.layer.open({
    //         title : "会员充值",
    //         type : 2,
    //         content : "/admin/user/userlog",
    //         success : function(layero, index){
    //             setTimeout(function(){
    //                 layui.layer.tips('点击此处返回用户列表', '.layui-layer-setwin .layui-layer-close', {
    //                     tips: 3
    //                 });
    //             },500)
    //         }
    //     })
    //     //改变窗口大小时，重置弹窗的高度，防止超出可视区域（如F12调出debug的操作）
    //     $(window).resize(function(){
    //         layui.layer.full(index);
    //     })
    //     layui.layer.full(index);
    // })
    //批量删除
    // $(".batchDel").click(function(){
    //     var checkStatus = table.checkStatus('list');
    //     // console.log(checkStatus);
    //     if(checkStatus.data.length>0){
    //         var datalist={};
    //         for(var i=0;i<checkStatus.data.length;i++){
    //              datalist[i]=checkStatus.data[i].id;    
    //         }
    //         // console.log(datalist);
    //         layer.confirm('真的删除'+checkStatus.data.length+'条？', function(index){
    //             // obj.del(); //删除对应行（tr）的DOM结构，并更新缓存
    //             layer.close(index);
    //             //向服务端发送删除指令
    //             $.post('/admin/user/batchdel', {
    //                                 ids: datalist
    //                             }, function (data) {
    //                                 // console.log(data);
    //                                 if (data) {
    //                                     top.layer.msg("删除成功");
    //                                     window.location.reload();
    //                                 } else {
    //                                     top.layer.msg("出错了！！！");
    //                                 }
                
    //                             }
    //                         );
    //         });
    //     }else{
    //         top.layer.msg("请选择数据！！");
    //     }
    // })
    //第一个实例
    table.render({
        elem: '#list'
        , height: 'full-10'
        , url: '/admin/sell_order/dolist' //数据接口
        , page: true //开启分页
        , cols: [[ //表头
            //  {type:'checkbox'},
            {field: 'id', title: 'ID', width:'3%'}
            , {field: 'user_nickname', title: '昵称', width:'10%'}
            , {field: 'money', title: '金额', width:'10%'}
            , {field: 'bandcard_cardnumber', title: '银行卡号', width:'20%', }
            , {field: 'bandcard_name', title: '银行名称', width:'10%', }
            , {field: 'status_name', title: '状态', width:'10%',}
            , {field: 'remarks_name', title: '备注', width:'10%',}
            , {field: 'users_nickname', title: '买入的用户',  width:'10%',}
            , {field: 'create_time', title: '买入的用户',  width:'10%',}
        ]]
    });
        // table.render({
        //     elem: '#list'
        //     , height: 'full-10'
        //     , url: '/admin/buy_order/buylist' //数据接口
        //     , page: true //开启分页
        
        // });
    //开关
    // form.on('switch(switchTest)', function(data){
       
    //     console.log(data.value);
    //     var id=$(data.othis).parents('tr').find('td:eq(1)').text();
        
    //     var index = layer.msg('修改中，请稍候',{icon: 16,time:false,shade:0.8});
    //     $.post('/admin/user/editshow',{id:id,disable:$(this).val()},function(res){
    //         console.log(res);
    //         setTimeout(function(){
    //             layer.close(index);
    //             layer.msg("展示状态修改成功！");
    //             location.reload();
    //         },2000);
    //     })
        
        
	// })
            //监听工具条
        // table.on('tool(user)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"
        // var data = obj.data; //获得当前行数据
        // var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
        // var tr = obj.tr; //获得当前行 tr 的DOM对象

        // if(layEvent === 'details'){ //余额与积分
        // //do somehing
        // // alert(data.id);
        //                 //加载页面
        //                 var index = layui.layer.open({
        //                     title : "余额与积分",
        //                     type : 2,
        //                     content : "/admin/user/details?id="+data.id,
        //                     success : function(layero, index){
        //                         setTimeout(function(){
        //                             layui.layer.tips('点击此处返回用户列表', '.layui-layer-setwin .layui-layer-close', {
        //                                 tips: 3
        //                             });
        //                         },500)
        //                     }
        //                 })
        //                 //改变窗口大小时，重置弹窗的高度，防止超出可视区域（如F12调出debug的操作）
        //                 $(window).resize(function(){
        //                     layui.layer.full(index);
        //                 })
        //                 layui.layer.full(index);
                     
        
        // } else if(layEvent === 'del'){ //删除
        // layer.confirm('真的删除行么', function(index){
        //     obj.del(); //删除对应行（tr）的DOM结构，并更新缓存
        //     layer.close(index);
        //     //向服务端发送删除指令
        //     $.post('/admin/user/delete', {
        //                         id: data.id
        //                     }, function (data) {
        //                         if (data) {
        //                             top.layer.msg("删除成功");
        //                             window.location.reload();
        //                         } else {
        //                             top.layer.msg("出错了！！！");
        //                         }
            
        //                     }
        //                 );
        // });
        // } else if(layEvent === 'edit'){ //编辑
        // //do something
        //  //加载页面
        //  var index = layui.layer.open({
        //     title : "用户信息",
        //     type : 2,
        //     content : "/admin/user/edituser?id="+data.id,
        //     success : function(layero, index){
        //         setTimeout(function(){
        //             layui.layer.tips('点击此处返回用户列表', '.layui-layer-setwin .layui-layer-close', {
        //                 tips: 3
        //             });
        //         },500)
        //     }
        // })
        // //改变窗口大小时，重置弹窗的高度，防止超出可视区域（如F12调出debug的操作）
        // $(window).resize(function(){
        //     layui.layer.full(index);
        // })
        // layui.layer.full(index);
        
        // // alert(data.id);
        // //同步更新缓存对应的值
        // // obj.update({
        // //     username: '123'
        // //     ,title: 'xxx'
        // // });
        // }
        // });
        // //用户搜索
        $('.search_btn').click(function () {

            var nickname= $('.searchVal').val();
    
            console.log(nickname);
    
            table.reload('list', {
    
                 url: '/admin/sell_order/dolist'
    
                ,where: {nickname:nickname} //设定异步数据接口的额外参数
    
            });
    
        })


})