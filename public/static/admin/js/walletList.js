layui.config({
    base: "/static/admin/js/"
}).use(['form', 'layer', 'jquery', 'table'], function () {
    var form = layui.form,
        layer = parent.layer === undefined ? layui.layer : parent.layer,
        table = layui.table,
        $ = layui.jquery;
    table.render({
        elem: '#list'
        , height: 'full-10'
        , url: '/admin/Wallet/walletList' //数据接口
        , page: true //开启分页
       
        , cols: [[ //表头
            {field: 'userid', title: '转款人ID'}
            ,{field: 'nickname', title: '转款人昵称'}
            ,{field: 'second_people_id', title: '收款人ID'}
            ,{field: 'get_name', title: '收款人昵称'}
            , {field: 'money', title: '转款金额'}
            , {field: 'create_time', title: '转账时间', sort: true,}
        ]]
    });
    var $ = layui.$, active = {
        reload: function(){
            var keyword = $('#demoReload').val();
            var keyword2 = $('#demoReload2').val();
            table.reload('list', {
                where: {
                    keyword: keyword,
                    keyword2:keyword2
                }
            });
        }
    };
    $('.demoTable .layui-btn').on('click', function(){
        var type = $(this).data('type');
        active[type] ? active[type].call(this) : '';
    });
});