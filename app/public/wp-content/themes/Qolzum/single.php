<?php get_header(); ?>

<!-- <div class="container pt-5 pb-5">
    <div class="block-container">
        <h3 class="block-title">
            <span><?php the_title()?></span>
        </h3>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="card">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url("medium"); ?>" class="card__image">
            <?php endif; ?>
                <div class="card__content">
                    <div class="card__title"><?php the_title()?></div>
                    <p class="card__snippet"><?php the_content()?></p>
                </div>
            </div>
        <?php endwhile;
        endif; ?>
    </div>
</div> -->

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
                    <figure class="mb-4"><img src="<?php the_post_thumbnail_url("smallest"); ?>" class="card__image"></figure>
                    
                <?php endif; ?>
                <!-- Post content-->
                <section class="mb-5">
                    <p><?php the_content()?></p>
                </section>
            </article>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <div class="widget">
                <h3 class="widget-title">آخر اﻷخبار</h3>
                <div class="widget-content">
                    <ul class="latest-news">
                        <div class="latest-news-item clearfix">
                            <?php 
                            // Define our WP Query Parameters
                            $the_query = new WP_Query( 'posts_per_page=4' ); ?>
                            <?php 
                            // Start our WP Query
                            while ($the_query -> have_posts()) : $the_query -> the_post(); 
                            // Display the Post Title with Hyperlink
                            ?>

                            <li>
                                <div class="item-thumbnail">
                                    <a href="<?php the_permalink()?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                        <figure class="mb-4"><img src="<?php the_post_thumbnail_url(); ?>" width="700" height="500" class="latest-news-img"></figure>
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="news-item-container">
                                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                    <!-- <p class="news-exerpt">
                                        <?php 
                                        // Display the Post Excerpt
                                        //  the_excerpt(__('(...المزيد)')); ?>
                                    </p> -->
                                    <div class="news-meta"> 
                                        <span class="news-date"> <?php the_date('j  F,  Y'); ?> م</span>
                                    </div>
                                </div>
                            </li>
                            <?php 
                            // Repeat the process and reset once it hits the limit
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </ul>
                </div>
            </div>   <!-- most recet widget start -->
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