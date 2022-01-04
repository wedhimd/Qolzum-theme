<?php get_header(); ?>
<div class="page main-content">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="single__title mb-1"><?php the_title() ?></h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2"> <?php the_time('Y/m/d') ?> م</div>
                    </header>
                    <!-- Preview image figure-->
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" class="single__img card__image">

                    <?php endif; ?>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p><?php the_content() ?></p>
                        <!-- Post categories-->
                        <div class="catLink flex flex-d-c"><?php the_category() ?></div>
                    </section>
                </article>
                <?php
                $orig_post = $post;
                global $post;
                $tags = wp_get_post_tags($post->ID);
                if ($tags) :
                    $tag_ids = array();
                    foreach ($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                    $args = array(
                        'tag__in' => $tag_ids,
                        'post__not_in' => array($post->ID),
                        'posts_per_page' => 6, // Number of related posts to display.
                        'caller_get_posts' => 1
                    ); ?>
                    <div class="widget">
                        <h3 class="widget-title"> مواضيع أخرى قد تعجبك</h3>
                        <div class="related">
                            <?php
                            $relatedPosts = new wp_query($args);
                            while ($relatedPosts->have_posts()) :
                                $relatedPosts->the_post();
                            ?>
                                <a class="related__card" href="<?php the_permalink() ?>">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <div class="related__image" style="background-image: url('<?php the_post_thumbnail_url($size = "small"); ?>');"></div>
                                        <img src="" class="latest-news-img">
                                    <?php } else { ?>
                                        <div class="related__image" style="background-image: url('https://res.cloudinary.com/wedhimd/image/upload/v1628691789/Qolzum/sport_jl6hs2.webp');"></div>
                                    <?php } ?>

                                    <div class="related__title"><?php the_title(); ?></div>
                                </a>
                            <?php endwhile;
                            $post = $orig_post;
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4 col-md-12">
                <?php get_sidebar("page"); ?>
            </div>
        </div>

        <?php wp_link_pages(); ?>
    </div>
</div>
</div>


<?php get_footer() ?>