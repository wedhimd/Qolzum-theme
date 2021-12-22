
<!-- most recet widget start -->
<div class="widget">
<h3 class="widget-title">آخر اﻷخبار</h3>
<?php  $recentNews = new WP_Query(array(
    // Define our WP Query Parameters
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'news',
    'meta_query' => array(array('key' => '_thumbnail_id')),
    "posts_per_page" => 4,
)); ?>

<?php 
    // Start our WP Query
    while ($recentNews -> have_posts()) : $recentNews -> the_post(); 
    // Display the Post Title with Hyperlink
?>

<div class="widget-content">
    <ul class="latest-news">
        <li>
            <div class="latest-news-item clearfix">
                <div class="item-thumbnail">
                <a href="<?php the_permalink()?>">
                        <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url($size = "smallest"); ?>" class="latest-news-img">
                        <?php endif; ?>
                    </a>
                </div>
                <div class="news-item-container">
                    <h2 class="news-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <p class="news-exerpt">
                        <?php if(has_excerpt()){
                            echo get_the_excerpt();
                        } else {
                            echo wp_trim_words(get_the_content(), 8);
                        } ?> <a href="<?php the_permalink(); ?>">...  المزيد</a>
                    </p>
                    <div class="news-meta">
                    <span class="news-date"> <?php the_modified_date('j  F,  Y'); ?> م</span>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<?php 
    // Repeat the process and reset once it hits the limit
    endwhile;
    wp_reset_postdata();
?>
</div> <!-- most recet widget end -->

<!-- most read widget start -->
<div class="widget">
<h3 class="widget-title">الأكثر قراءة </h3>
<div class="widget-content">
    <ul class="latest-news">
    <?php 
        $popularpost = new WP_Query( array( 
            'posts_per_page' => 4, 
            'meta_key' => 'wpb_post_views_count', 
            'orderby' => 'meta_value_num', 
            'order' => 'DESC'  ) );
        while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>

        <li>
            <div class="latest-news-item clearfix">
                <div class="item-thumbnail">
                    <a href="<?php the_permalink()?>">
                        <?php if (has_post_thumbnail()) { ?>
                        <img src="<?php the_post_thumbnail_url($size = "smallest"); ?>" class="latest-news-img">
                        <?php }else { ?>
                            <img src="https://res.cloudinary.com/wedhimd/image/upload/v1628691789/Qolzum/sport_jl6hs2.webp" class="latest-news-img">
                        <?php }?>    
                    </a>
                </div>
                <div class="news-item-container">
                    <a href="<?php the_permalink()?>"><h2 class="news-title"><?php the_title();?></h2> </a> 
                    <p class="news-exerpt">
                        <?php if(has_excerpt()){
                            echo get_the_excerpt();
                        } else {
                            echo wp_trim_words(get_the_content(), 18);
                        } ?> <a href="<?php the_permalink(); ?>">...  المزيد</a>
                    </p>
                    <div class="news-meta"> 
                    <span class="news-date"><?php  echo wpb_get_post_views(get_the_ID());?></span>
                    </div>
                </div>
            </div>
        </li> 
        <?php endwhile; ?>
    </ul>
</div>
</div>  <!-- most read widget end -->

<!-- latest opinion  widget start -->
<div class="widget">
<h3 class="widget-title">الرأي</h3>
<div class="widget-content">
    <div class="opinion">
        <div class="opinion__boxes">
            <div class="box">
                <?php  $opinions = new WP_Query(array(
                // Define our WP Query Parameters
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'opinions',
                "posts_per_page" => 3,
                )); ?>
                <?php
                    // Start our WP Query
                    if ($opinions->have_posts()) : while ($opinions->have_posts()) : $opinions->the_post(); 
                ?>
                <div class="box__content">
                    <img src="<?php echo get_theme_file_uri("/assets/images/logo.png")?>" alt="">
                    <h5><?php the_author() ?> </h2>
                    <h4><?php the_title() ?> </h4>
                    <p> <?php  echo wp_trim_words(get_the_content(), 18);?></p>
                    <a class="box__btn" href="<?php the_permalink() ?> ">أكمل القراءة</a>
                </div>
                <?php  endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>
</div> <!-- latest opinion widget  end -->

<!-- sidebar ad widget start-->
<div class="widget">
<div class="widget-content">
    <div class="sidebar-ad">
        <img src="<?php echo get_theme_file_uri('/assets/images/ad-banner.png')?>" class="img-fluid" alt="">
    </div>
</div>
</div> <!-- sidebar ad widget end-->

<!-- sidebar tags widget start -->
<div class="widget">
<h3 class="widget-title">أشهر #_الوسوم</h3>
<div class="widget-content">
<div class="sidebar-tags">
        <ul>
            <li><a href="<?php echo esc_url(home_url("/tag/politics")) ?>"> #سياسة</a></li>
            <li><a href="<?php echo esc_url(home_url("/tag/sports")) ?>"> #رياضة</a></li>
            <li><a href="<?php echo esc_url(home_url("/tag/economy")) ?>"> #إقتصاد</a></li>
            <li><a href="<?php echo esc_url(home_url("/tag/science")) ?>"> #تكنلوجيا</a></li>
            <li><a href="<?php echo esc_url(home_url("/tag/culture")) ?>"> #ثقافة وعلوم</a></li>
            <li><a href="<?php echo esc_url(home_url("/tag/miscellaneous")) ?>"> #منوعات</a></li>
        </ul>
        <ul>
            <li><a href="<?php echo esc_url(home_url("/tag/eritrea")) ?>"> #إريتريا</a></li>
            <li><a href="<?php echo esc_url(home_url("/tag/sudan")) ?>"> #السودان</a></li>
            <li><a href="<?php echo esc_url(home_url("/tag/ethiopia")) ?>"> #أثيوبيا</a></li>
            <li><a href="<?php echo esc_url(home_url("/tag/somalia")) ?>"> #الصومال</a></li>
            <li><a href="<?php echo esc_url(home_url("/tag/djibouti")) ?>"> #جيبوتي</a></li>
            <li><a href="<?php echo esc_url(home_url("/tag/south-sudan")) ?>"> #جنوب_السودان</a></li>
        </ul>
</div> 
</div>
</div> <!-- sidebar tags widget end -->

<!-- sidebar category widget start -->
<div class="widget">
<h3 class="widget-title">الفئات</h3>
<div class="widget-content">
    <div class="categories">
        <ul>
            <li><a href="/news/politics/"> سياسة</a><span><?php echo count_cat_post("politics"); ?></span></li>
            <li><a href="/news/politics/local/"> القرن الإفريقي</a><span><?php echo count_cat_post("local"); ?></span></li>
            <li><a href="/news/politics/world/"> العالم</a><span><?php echo count_cat_post("world"); ?></span></li>
            <li><a href="/news/economy/"> إقتصاد</a><span><?php echo count_cat_post("economy"); ?></span></li>
            <li><a href="/news/sports/"> رياضة</a><span><?php echo count_cat_post("sports"); ?></span></li>
            <li><a href="/news/science/"> العلوم والتكنلوجيا</a><span><?php echo count_cat_post("science"); ?></span></li>
            <li><a href="/news/culture/"> الثقافة والفنون</a><span><?php echo count_cat_post("culture"); ?></span></li>
            <li><a href="/news/miscellaneous/"> منوعات </a><span><?php echo count_cat_post("miscellaneous"); ?></span></li>
        </ul>
    </div>
</div>