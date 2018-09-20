layui.config({
    base: "/static/admin/js/"
}).use(['form', 'layer', 'jquery', 'table'], function () {
    var form = layui.form,
        layer = parent.layer === undefined ? layui.layer : parent.layer,
        table = layui.table,
        $ = layui.jquery;
    //第一个实例
    table.render({
        elem: '#list'
        , height: 'full-10'
        , url: '/admin/crowd/crowdList2' //数据接口
        , page: true //开启分页
        , cols: [[ //表头
            {field: 'userid', title: 'UID', sort: true}
            ,{field: 'nickname', title: '购买者昵称'}
            , {field: 'name', title: '众筹名称'}
            , {field: 'num', title: '众筹数量'}
            , {field: 'price', title: '单价'}
            , {field: 'money', title: '金额'}
            , {field: 'create_time', title: '购买时间', sort: true}
        ]]
    });
    var $ = layui.$, active = {
        reload: function(){
            var demoReload = $('#demoReload');
            var demoReload2 = $('#demoReload2');
            table.reload('list', {
                where: {
                    keyword: demoReload.val(),
                    keyword2: demoReload2.val()
                }
            });
        }
    };
    $('.demoTable .layui-btn').on('click', function(){
        var type = $(this).data('type');
        active[type] ? active[type].call(this) : '';
    });
});