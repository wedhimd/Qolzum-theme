<?php get_header(); ?>
<div class="page">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1"><?php the_title()?></h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">  <?php the_time( 'd/m/Y' )?> م</div>
                        <!-- Post categories-->
                        <a class="catLink flex flex-d-c" href="<?php the_permalink()?>"><?php the_category()?></a>
                    </header>
                    <!-- Preview image figure-->
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" class="single__img card__image">
                        
                    <?php endif; ?>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p><?php the_content()?></p>
                    </section>
                </article>
                    <?php
                        $orig_post = $post;
                        global $post;
                        $tags = wp_get_post_tags($post->ID);
                        if ($tags) :
                            $tag_ids = array();
                        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                                $args=array(
                                'tag__in' => $tag_ids,
                                'post__not_in' => array($post->ID),
                                'posts_per_page'=>4, // Number of related posts to display.
                                'caller_get_posts'=>1
                    ); ?>
                    <div class="widget">
                        <h3 class="widget-title"> مواضيع أخرى قد تعجبك</h3>
                        <div class="flex">
                            <?php        
                                $relatedPosts = new wp_query( $args );
                                while( $relatedPosts->have_posts() ) :
                                    $relatedPosts->the_post();
                            ?>

                            <div class="widget-content">
                                <ul class="latest-news">
                                    <li>
                                        <div class="latest-news-item clearfix">
                                            <div class="item-thumbnail">
                                            <a href="<?php the_permalink()?>">
                                                    <?php if (has_post_thumbnail()) { ?>
                                                        <img src="<?php the_post_thumbnail_url($size = "smallest"); ?>" class="latest-news-img">
                                                    <?php }else { ?>
                                                        <img src="https://res.cloudinary.com/wedhimd/image/upload/v1628691789/Qolzum/sport_jl6hs2.webp"  class="latest-news-img">
                                                    <?php }?>
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
                                                <!-- <div class="news-meta">
                                                <span class="news-date"> <?php the_modified_date('j  F,  Y'); ?> م</span>
                                                </div> -->
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        <?php endwhile;
                            $post = $orig_post;
                            wp_reset_query();
                        ?>
                    </div>
                </div>
                    <?php endif; ?>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
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
                        <!-- Side widget-->
        </div>
        </div>
    </div>
</div>


<?php get_footer() ?>