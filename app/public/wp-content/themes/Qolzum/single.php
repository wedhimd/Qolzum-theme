<?php get_header(); ?>

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
                    <div class="text-muted fst-italic mb-2">تم النشر في <?php the_time( 'j F, Y' )?> بواسطة  <?php the_author()?> </div>
                    <!-- Post categories-->
                    <a class="" href="<?php the_permalink()?>"><?php the_category()?></a>
                </header>
                <!-- Preview image figure-->
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url("smallest"); ?>" class="card__image">
                    
                <?php endif; ?>
                <!-- Post content-->
                <section class="mb-5">
                    <p><?php the_content()?></p>
                </section>
            </article>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- most recet widget start -->
            <div class="widget">
                <h3 class="widget-title">آخر اﻷخبار</h3>
                <?php 
                    // Define our WP Query Parameters
                    $recentNews = new WP_Query( 'posts_per_page=4' ); 
                ?>

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
                                        <img src="<?php the_post_thumbnail_url(); ?>" class="latest-news-img">
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
                                    <span class="news-date"> <?php the_date('j  F,  Y'); ?> م</span>
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
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <!-- <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                      
                            </div>
                        </div> -->
                    </div>
                    <!-- Side widget-->
        </div>
    </div>
</div>

<?php get_footer() ?>