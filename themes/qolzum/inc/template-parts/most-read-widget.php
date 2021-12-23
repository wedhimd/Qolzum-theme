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
