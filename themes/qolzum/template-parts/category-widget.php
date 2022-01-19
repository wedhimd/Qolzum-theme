<!-- sidebar category widget start -->
<div class="widget">
    <h3 class="widget-title">الفئات</h3>
    <div class="widget-content">
        <div class="categories">
            <ul>
                <li><a href="<?php echo esc_url(home_url("/category/news")) ?>" > أخبار</a><span><?php echo count_cat_post("news"); ?></span></li>
                <li><a href="<?php echo esc_url(home_url("/category/politics")) ?>"> سياسة</a><span><?php echo count_cat_post("politics"); ?></span></li>
                <li><a href="<?php echo esc_url(home_url("/category/local")) ?>"> القرن الإفريقي</a><span><?php echo count_cat_post("local"); ?></span></li>
                <li><a href="<?php echo esc_url(home_url("/category/world")) ?>"> عالم</a><span><?php echo count_cat_post("world"); ?></span></li>
                <li><a href="<?php echo esc_url(home_url("/category/economy")) ?>"> اقتصاد</a><span><?php echo count_cat_post("economy"); ?></span></li>
                <li><a href="<?php echo esc_url(home_url("/category/sports")) ?>"> رياضة</a><span><?php echo count_cat_post("sports"); ?></span></li>
                <li><a href="<?php echo esc_url(home_url("/category/science")) ?>"> تكنولوجيا</a><span><?php echo count_cat_post("science"); ?></span></li>
                <li><a href="<?php echo esc_url(home_url("/category/press")) ?>"> صحافة</a><span><?php echo count_cat_post("press"); ?></span></li>
                <li><a href="<?php echo esc_url(home_url("/category/culture")) ?>"> ثقافة</a><span><?php echo count_cat_post("culture"); ?></span></li>
                <li><a href="<?php echo esc_url(home_url("/category/health")) ?>"> صحة</a><span><?php echo count_cat_post("health"); ?></span></li>
                <li><a href="<?php echo esc_url(home_url("/category/miscellaneous")) ?>"> منوعات </a><span><?php echo count_cat_post("miscellaneous"); ?></span></li>
            </ul>
        </div>
    </div>
</div>