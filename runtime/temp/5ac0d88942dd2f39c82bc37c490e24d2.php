<?php /*a:1:{s:68:"/www/wwwroot/yiwunqianbaonew/application/admin/view/index/index.html";i:1535711766;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>后台管理模板</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no,email=no">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="/static/common/lib/layui/css/layui.css" media="all"/>
    <link rel="stylesheet" href="/static/admin/css/main.css" media="all"/>
    <link rel="stylesheet" href="/static/admin/css/xadmin.css" media="all"/>
    <link rel="stylesheet" href="/static/admin/css/swiper.min.css" media="all"/>
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_759533_ffz1qjxcc4b.css">
</head>
<style>
    .layui-nav .layui-this:after {bottom: auto;}
    .footer{text-align: center;}
    .layui-layout-admin .layui-logo{color: #fff;}
    .bg-changer{z-index: 999;}
    .bg-changer #changer-set {top: 15px;right: 20px;}
    .layui-layout-admin .layui-header{background: rgba(0, 0, 0, .2);z-index: 0;}
    .layui-bg-black{background-color: rgba(0, 0, 0, 0.2) !important;}
    .layui-nav{background-color: rgba(0, 0, 0, 0.2)}
    .layui-nav-tree .layui-this>a{background-color: rgba(0,150,136,0.5)}
    .layui-layout-admin .layui-footer{background-color: rgba(0, 0, 0, 0.25);}
    #top_tabs_box{border-bottom: 1px solid rgba(255, 255, 255, 0.2);}
    .layui-header .layui-nav{margin-right: 60px;}
</style>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">后台管理</div>
        <!-- <ul class="layui-nav layui-layout-left top_menu">
            &lt;!&ndash; 显示/隐藏菜单 &ndash;&gt;
            <a href="javascript:;" class="hideMenu"><i class="layui-icon">&#xe65f;</i></a>
            <li class="layui-nav-item"><a href="javascript:;">控制台</a></li>
            <li class="layui-nav-item">
                <a href="javascript:;">其它系统</a>
                <dl class="layui-nav-child">
                    <dd><a href="">邮件管理</a></dd>
                    <dd><a href="">消息管理</a></dd>
                    <dd><a href="">授权管理</a></dd>
                </dl>
            </li>
        </ul> -->
        <ul class="layui-nav layui-layout-right top_menu">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
                    <?php echo htmlentities($name); ?>
                </a>
                <!--<dl class="layui-nav-child">-->
                    <!--<dd><a href="">基本资料</a></dd>-->
                    <!--<dd><a href="">安全设置</a></dd>-->
                <!--</dl>-->
            </li>
            <li class="layui-nav-item" id="logout_fan"><a href="javascript:;">退出</a></li>
        </ul>
    </div>
    <!-- 左侧导航 -->
    <div class="layui-side layui-bg-black">
        <div class="navBar layui-side-scroll">
            <ul class="layui-nav layui-nav-tree">
                <li class="layui-nav-item layui-this">
                    <a href="javascript:;" data-url="<?php echo url('admin/index/main'); ?>">
                        <i class="iconfont icon-geren1" data-icon="icon-geren1"></i>
                        <cite>后台首页</cite>
                    </a>
                </li>

                <li class="layui-nav-item">
                    <a href="javascript:;">
                        <i class="iconfont icon-huiyuan" data-icon="icon-huiyuan"></i>
                        <cite>会员管理</cite>
                        <span class="layui-nav-more"></span>
                    </a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/User/index'); ?>">
                                <i class="iconfont icon-huiyuan1" data-icon="icon-huiyuan1"></i>
                                <cite>会员列表</cite>
                            </a>
                        </dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/Tree/index'); ?>">
                                <i class="iconfont icon-tuijianliebiao" data-icon="icon-tuijianliebiao"></i>
                                <cite>推荐结构</cite>
                            </a>
                        </dd>
                    </dl>
                </li>

                <li class="layui-nav-item">
                    <a href="javascript:;">
                        <i class="iconfont icon-jiangli" data-icon="icon-jiangli"></i>
                        <cite>奖励设置</cite>
                        <span class="layui-nav-more"></span>
                    </a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/reward/base'); ?>">
                                <i class="iconfont icon-xiangmuguanli" data-icon="icon-xiangmuguanli"></i>
                                <cite>静态奖励</cite>
                            </a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/reward/share'); ?>">
                                <i class="iconfont icon-xiangmuguanli" data-icon="icon-xiangmuguanli"></i>
                                <cite>直推奖励</cite>
                            </a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/reward/transfer'); ?>">
                                <i class="iconfont icon-xiangmuguanli" data-icon="icon-xiangmuguanli"></i>
                                <cite>流通奖励</cite>
                            </a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/reward/exchange'); ?>">
                                <i class="iconfont icon-xiangmuguanli" data-icon="icon-xiangmuguanli"></i>
                                <cite>兑换奖励</cite>
                            </a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/reward/vip'); ?>">
                                <i class="iconfont icon-xiangmuguanli" data-icon="icon-xiangmuguanli"></i>
                                <cite>VIP奖励</cite>
                            </a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/reward/multiple'); ?>">
                                <i class="iconfont icon-xiangmuguanli" data-icon="icon-xiangmuguanli"></i>
                                <cite>倍数设置</cite>
                            </a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/reward/registe'); ?>">
                                <i class="iconfont icon-jifen" data-icon="icon-jifen"></i>
                                <cite>注册送积分</cite>
                            </a>
                        </dd>
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/reward/coindets'); ?>">
                                <i class="iconfont icon-zichan" data-icon="icon-zichan"></i>
                                <cite>资产价格</cite>
                            </a>
                        </dd>
                    </dl>
                </li>
                
                <li class="layui-nav-item">
                    <a href="javascript:;">
                        <i class="iconfont icon-xitongyewuguanli" data-icon="icon-xitongyewuguanli"></i>
                        <cite>业务管理</cite>
                        <span class="layui-nav-more"></span>
                    </a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/crowd/index'); ?>">
                                <i class="iconfont icon-icon-humidity" data-icon="icon-icon-humidity"></i>
                                <cite>众筹管理</cite>
                            </a>
                        </dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/crowd/index2'); ?>">
                                <i class="iconfont icon-jifendingdan" data-icon="icon-jifendingdan"></i>
                                <cite>众筹记录</cite>
                            </a>
                        </dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/Recharge/integral'); ?>">
                                <i class="iconfont icon-jifendingdan" data-icon="icon-jifendingdan"></i>
                                <cite>积分记录</cite>
                            </a>
                        </dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/Recharge/wallet'); ?>">
                                <i class="iconfont icon-fenxiangyuejilu" data-icon="icon-fenxiangyuejilu"></i>
                                <cite>余额记录</cite>
                            </a>
                        </dd>
                    </dl>
                    <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" data-url="<?php echo url('admin/Assetsinfos/index'); ?>">
                                    <i class="iconfont icon-zichan" data-icon="icon-zichan"></i>
                                    <cite>资产交易记录</cite>
                                </a>
                            </dd>
                        </dl>
                        <!-- <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" data-url="<?php echo url('admin/Wbao/index'); ?>">
                                    <i class="iconfont icon-zichan" data-icon="icon-zichan"></i>
                                    <cite>资产v宝记录</cite>
                                </a>
                            </dd>
                        </dl> -->
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/Shoptype/index'); ?>">
                                <i class="iconfont icon-dianpu" data-icon="icon-dianpu"></i>
                                <cite>店铺类别</cite>
                            </a>
                        </dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/business/index'); ?>">
                                <i class="iconfont icon-shangjiarenzheng" data-icon="icon-shangjiarenzheng"></i>
                                <cite>商家认证</cite>
                            </a>
                        </dd>
                    </dl>
                </li>

                <li class="layui-nav-item">
                        <a href="javascript:;">
                            <i class="iconfont icon-xitongcanshushezhi" data-icon="icon-xitongcanshushezhi"></i>
                            <cite>系统参数配置</cite>
                            <span class="layui-nav-more"></span>
                        </a>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" data-url="<?php echo url('admin/index/smsConfig'); ?>">
                                    <i class="iconfont icon-duanxin" data-icon="icon-duanxin"></i>
                                    <cite>短信配置</cite>
                                </a>
                            </dd>
                        </dl>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" data-url="<?php echo url('admin/index/area'); ?>">
                                    <i class="iconfont icon-shouji" data-icon="icon-shouji"></i>
                                    <cite>手机区号配置</cite>
                                </a>
                            </dd>
                        </dl>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" data-url="<?php echo url('admin/admin/index'); ?>">
                                    <i class="iconfont icon-guanliyuan" data-icon="icon-guanliyuan"></i>
                                    <cite>管理员</cite>
                                </a>
                            </dd>
                        </dl>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" data-url="<?php echo url('admin/role/index'); ?>">
                                    <i class="iconfont icon-guanliyuan_jiaoseguanli" data-icon="icon-guanliyuan_jiaoseguanli"></i>
                                    <cite>角色管理</cite>
                                </a>
                            </dd>
                        </dl>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" data-url="<?php echo url('admin/node/index'); ?>">
                                    <i class="iconfont icon-quanxianguanli" data-icon="icon-quanxianguanli"></i>
                                    <cite>权限节点</cite>
                                </a>
                            </dd>
                        </dl>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" data-url="<?php echo url('admin/index/banner'); ?>">
                                    <i class="iconfont icon-lunbotu" data-icon="icon-lunbotu"></i>
                                    <cite>轮播图片</cite>
                                </a>
                            </dd>
                        </dl>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" data-url="<?php echo url('admin/notice/index'); ?>">
                                    <i class="iconfont icon-gonggao" data-icon="icon-gonggao"></i>
                                    <cite>公告管理</cite>
                                </a>
                            </dd>
                        </dl>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" data-url="<?php echo url('admin/complaint/index'); ?>">
                                    <i class="iconfont icon-tousu" data-icon="icon-tousu"></i>
                                    <cite>投诉列表</cite>
                                </a>
                            </dd>
                        </dl>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" data-url="<?php echo url('admin/index/about'); ?>">
                                    <i class="iconfont icon-guanyuwomen" data-icon="icon-guanyuwomen"></i>
                                    <cite>关于我们</cite>
                                </a>
                            </dd>
                        </dl>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" data-url="<?php echo url('admin/index/close'); ?>">
                                    <i class="iconfont icon-guanbi" data-icon="icon-guanbi"></i>
                                    <cite>关闭网站</cite>
                                </a>
                            </dd>
                        </dl>
                </li>

                <li class="layui-nav-item">
                    <a href="javascript:;">
                        <i class="iconfont icon-yuangongcaiwubaobiao" data-icon="icon-yuangongcaiwubaobiao"></i>
                        <cite>财务报表</cite>
                        <span class="layui-nav-more"></span>
                    </a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/Account_opeing_bank/index'); ?>">
                                <i class="iconfont icon-yinxingqia" data-icon="icon-yinxingqia"></i>
                                <cite>银行卡</cite>
                            </a>
                        </dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/buy_order/index'); ?>">
                                <i class="iconfont icon-dingdanliebiao" data-icon="icon-dingdanliebiao"></i>
                                <cite>订单交易列表</cite>
                            </a>
                        </dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo url('admin/wallet/index'); ?>">
                                <i class="iconfont icon-im_zhuanchu" data-icon="icon-im_zhuanchu"></i>
                                <cite>转款列表</cite>
                            </a>
                        </dd>
                    </dl>
                </li>


                <!-- <li class="layui-nav-item">
                    <a href="javascript:;" data-url="<?php echo url('admin/index/banner'); ?>">
                    <i class="layui-icon" data-icon="&#xe600;">&#xe600;</i><cite>轮播图片</cite></a>
                </li> -->
                <!-- <li class="layui-nav-item"><a href="javascript:;" data-url="<?php echo url('admin/goods/index'); ?>">
                    <i class="layui-icon" data-icon="&#xe600;">&#xe600;</i><cite>商品管理</cite></a>
                </li> -->
                <!-- <li class="layui-nav-item"><a href="javascript:;" data-url="<?php echo url('admin/orders/index'); ?>">
                    <i class="layui-icon" data-icon="&#xe63c;">&#xe63c;</i><cite>订单管理</cite></a>
                </li> -->
                <!-- <li class="layui-nav-item">
                    <a href="javascript:;" data-url="<?php echo url('admin/notice/index'); ?>">
                    <i class="layui-icon" data-icon="&#xe705;">&#xe705;</i>
                    <cite>公告管理</cite></a>
                </li> -->
               
                <!-- <li class="layui-nav-item">
                    <a href="javascript:;">
                        <i class="layui-icon" data-icon="&#xe620;">&#xe620;</i>
                        <cite>后台充值记录</cite>
                        <span class="layui-nav-more"></span></a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" data-url="<?php echo url('admin/Recharge/integral'); ?>">
                            <i class="layui-icon" data-icon="&#xe612;">&#xe612;</i><cite>积分记录</cite></a>
                        </dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" data-url="<?php echo url('admin/Recharge/wallet'); ?>">
                            <i class="layui-icon" data-icon="&#xe612;">&#xe612;</i><cite>余额记录</cite></a>
                        </dd>
                    </dl>
                   
                </li> -->
                <!-- <li class="layui-nav-item">
                        <a href="javascript:;"><i class="layui-icon" data-icon="&#xe620;">&#xe620;</i><cite>权限管理</cite>
                            <span class="layui-nav-more"></span></a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;" data-url="<?php echo url('admin/admin/index'); ?>">
                                <i class="layui-icon" data-icon="&#xe612;">&#xe612;</i><cite>管理员</cite></a>
                            </dd>
                        </dl>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;" data-url="<?php echo url('admin/role/index'); ?>">
                                <i class="layui-icon" data-icon="&#xe612;">&#xe612;</i><cite>角色管理</cite></a>
                            </dd>
                        </dl>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;" data-url="<?php echo url('admin/node/index'); ?>">
                                <i class="layui-icon" data-icon="&#xe612;">&#xe612;</i><cite>权限节点</cite></a>
                            </dd>
                        </dl>
                </li> -->
                <!-- <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon" data-icon="&#xe620;">&#xe620;</i><cite>商城管理</cite>
                        <span class="layui-nav-more"></span></a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" data-url="<?php echo url('admin/Shoptype/index'); ?>">
                            <i class="layui-icon" data-icon="&#xe612;">&#xe612;</i><cite>店铺类别</cite></a>
                        </dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" data-url="<?php echo url('admin/business/index'); ?>">
                            <i class="layui-icon" data-icon="&#xe672;">&#xe672;</i><cite>商家认证</cite></a>
                        </dd>
                    </dl>
                    
                </li> -->
                <!-- <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon" data-icon="&#xe620;">&#xe620;</i><cite>系统管理</cite>
                        <span class="layui-nav-more"></span></a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" data-url="<?php echo url('admin/index/about'); ?>">
                            <i class="layui-icon" data-icon="&#xe614;">&#xe614;</i><cite>关于</cite></a>
                        </dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" data-url="<?php echo url('admin/Index/sendmsg'); ?>">
                            <i class="layui-icon" data-icon="&#xe614;">&#xe614;</i><cite>短信管理</cite></a>
                        </dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" data-url="<?php echo url('admin/index/close'); ?>">
                            <i class="layui-icon" data-icon="&#xe614;">&#xe614;</i><cite>关闭网站</cite></a>
                        </dd>
                    </dl>
                </li> -->
                 <!-- <li class="layui-nav-item"><a href="javascript:;" data-url="<?php echo url('admin/crowd/index'); ?>">
                    <i class="layui-icon" data-icon="&#xe636;">&#xe636;</i><cite>众筹管理</cite></a>
                </li> -->
                <!-- <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon" data-icon="&#xe620;">&#xe620;</i><cite>交易管理</cite>
                        <span class="layui-nav-more"></span></a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" data-url="<?php echo url('admin/buy_order/index'); ?>">
                            <i class="layui-icon" data-icon="&#xe612;">&#xe612;</i><cite>订单交易列表</cite></a>
                        </dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" data-url="<?php echo url('admin/sell_order/index'); ?>">
                            <i class="layui-icon" data-icon="&#xe612;">&#xe612;</i><cite>卖出订单列表</cite></a>
                        </dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" data-url="<?php echo url('admin/Account_opeing_bank/index'); ?>">
                            <i class="layui-icon" data-icon="&#xe612;">&#xe612;</i><cite>银行卡</cite></a>
                        </dd>
                    </dl>
                </li> -->
                <!-- <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon" data-icon="&#xe620;">&#xe620;</i><cite>转账管理</cite>
                        <span class="layui-nav-more"></span></a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" data-url="<?php echo url('admin/wallet/index'); ?>">
                            <i class="layui-icon" data-icon="&#xe612;">&#xe612;</i><cite>转出列表</cite></a>
                        </dd>
                    </dl>
                </li> -->
            <!-- <li class="layui-nav-item">
                <a href="javascript:;"><i class="layui-icon" data-icon="&#xe664;">&#xe664;</i><cite>投诉管理</cite>
                    <span class="layui-nav-more"></span></a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;" data-url="<?php echo url('admin/complaint/index'); ?>">
                        <i class="layui-icon" data-icon="&#xe664;">&#xe664;</i><cite>投诉列表</cite></a>
                    </dd>
                </dl>
            </li> -->
            </ul>
        </div>
    </div>
    <!-- 右侧内容 -->
    <div class="layui-body layui-form">
        <div class="layui-tab no-margin" lay-filter="bodyTab" id="top_tabs_box">
            <ul class="layui-tab-title top_tab" id="top_tabs">
                <li class="layui-this" lay-id=""><i class="iconfont icon-geren1"></i><cite>后台首页</cite></li>
            </ul>
            <ul class="layui-nav closeBox">
                <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon">&#xe61a;</i> 页面操作</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" class="refresh refreshThis"><i class="layui-icon">&#xe9aa;</i>
                            刷新当前</a></dd>
                        <dd><a href="javascript:;" class="closePageOther"><i class="layui-icon">&#xe651;</i>
                            关闭其他</a></dd>
                        <dd><a href="javascript:;" class="closePageAll"><i class="layui-icon">&#x1006;</i> 关闭全部</a>
                        </dd>
                    </dl>
                </li>
            </ul>
            <div class="layui-tab-content clildFrame">
                <div class="layui-tab-item layui-show">
                    <iframe src="<?php echo url('admin/index/main'); ?>"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- 底部 -->
    <div class="layui-footer footer">
        <p><span>2018 ©</span>
            版权所有</p>
    </div>
</div>

<!-- 移动导航 -->
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div>

<!-- 背景切换开始 -->
<div class="bg-changer">
    <div class="swiper-container changer-list">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="item" src="/static/admin/images/a.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/static/admin/images/b.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/static/admin/images/c.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/static/admin/images/d.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/static/admin/images/e.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/static/admin/images/f.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/static/admin/images/g.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/static/admin/images/h.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/static/admin/images/i.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/static/admin/images/j.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/static/admin/images/k.jpg" alt=""></div>
            <div class="swiper-slide"><span class="reset">初始化</span></div>
        </div>
    </div>
    <div class="bg-out"></div>
    <div id="changer-set"><i class="iconfont icon-all"></i></div>
</div>
<!-- 背景切换结束 -->
<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="/static/common/lib/layui/layui1.js"></script> -->

<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>
<script type="text/javascript" src="/static/admin/js/index.js"></script>
</body>
</html>