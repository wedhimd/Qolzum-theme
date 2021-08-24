<?php get_header()?>
<div class="page">
    <div class="container mt-4">
        <div class="row">
            <div class="col-8">
                <h3 class="block-title">
                    <span><?php the_title()?> </span>
                </h3>
                <div class="widget">
                    <div class="widget-content">
                        <div class="opinion-cards">
                            <?php  $opinions = new WP_Query(array(
                            // Define our WP Query Parameters
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'category_name' => 'opinions',
                            "posts_per_page" => 10,
                            )); ?>
                            <?php
                            // Start our WP Query
                            if ($opinions->have_posts()) : while ($opinions->have_posts()) : $opinions->the_post(); 
                            ?>

                            <div class="box">
                                <div class="heading">
                                    <h2><?php the_author() ?> </h2>
                                    <!-- <img src="..." alt=""> -->
                                </div>
                                <div class="text">
                                    <h4><?php the_title() ?> </h4>
                                    <p> <?php  echo wp_trim_words(get_the_content(), 18);?></p>
                                    <a href="<?php the_permalink() ?> ">أكمل القراءة</a>
                                </div>
                            </div>
                            <?php  endwhile; endif; wp_reset_postdata();?> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
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
                                                echo wp_trim_words(get_the_content(), 18);
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
            </div>                        
        </div>
    </div>
</div>


<?php get_footer()?>