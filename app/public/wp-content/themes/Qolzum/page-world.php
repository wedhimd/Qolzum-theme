<?php get_header()?>
<div class="page">
    <div class="container mt-4">
        <div class="row">
            <div class="col-8">
            <h3 class="page__title block-title">
                <span><?php the_title()?> </span>
            </h3>
            <?php  $world = new WP_Query(array(
                    // Define our WP Query Parameters
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'world',
                    "posts_per_page" => 10,
                )); ?>
            <div class="cards">
                <?php
                    // Start our WP Query
                    if ($world->have_posts()) : while ($world->have_posts()) : $world->the_post(); 
                ?>
            
                <a href="<?php the_permalink() ?>" class="card">
                        <div class="card__image" style="background-image: url('<?php echo the_post_thumbnail_url(get_the_ID())?>');"></div>
                        <div class="card__content">
                            <div class="card__title"><?php the_title() ?></div>
                            <p class="card__snippet">
                                <?php  echo wp_trim_words(get_the_content(), 18);?>
                            </p>
                        <div class="card__readmore">أكمل القراءة</div>
                    </div>
                </a>
                <?php  endwhile; endif; wp_reset_postdata();?>                                
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
        <?php echo paginate_links()?>
    </div>
</div>

<?php get_footer()?>