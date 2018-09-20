<?php /*a:1:{s:71:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/shop/business.html";i:1535011708;}*/ ?>

    <div class="w_tjdiv">
        <span class="w_shopline">—&nbsp;&nbsp;<?php echo lang('推荐商家'); ?>&nbsp;&nbsp;—</span>
    </div>
    <ul>
        <?php foreach($business as $key=>$vo): ?>
        <li>
            <a href="<?php echo url('/mobile/shop/product',['id'=>$vo['userid']]); ?>">
                <img src="<?php echo htmlentities($vo['shop_img']); ?>" alt="">
                <div class="w_yjright">
                    <div class="w_kmright">
                        <h2><?php echo htmlentities($vo['name']); ?></h2>
                        <h3> 
                            <span><?php echo htmlentities($vo['juli']); ?>m</span>
                        </h3>
                    </div>
                    <div class="w_font">
                        <?php echo htmlentities($vo['address']); ?>
                    </div>
                </div>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>