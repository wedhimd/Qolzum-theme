<?php get_header() ?>
<div class="page main-content">
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h3 class="page__title block-title">
                    <span><?php the_title() ?> </span>
                </h3>
                <?php $sports = new WP_Query(array(
                    // Define our WP Query Parameters
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'sports',
                    "posts_per_page" => 10,
                )); ?>
                <div class="cards">
                    <?php
                    // Start our WP Query
                    if ($sports->have_posts()) : while ($sports->have_posts()) : $sports->the_post();
                    ?>

                            <a href="<?php the_permalink() ?>" class="card">
                                <div class="card__image" style="background-image: url('<?php echo the_post_thumbnail_url(get_the_ID()) ?>');"></div>
                                <div class="card__content">
                                    <div class="card__title"><?php the_title() ?></div>
                                    <p class="card__snippet">
                                        <?php echo wp_trim_words(get_the_content(), 18); ?>
                                    </p>
                                    <div class="card__readmore">أكمل القراءة</div>
                                </div>
                            </a>
                    <?php endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <?php get_sidebar("page"); ?>
            </div>
        </div>
        <?php echo paginate_links() ?>
    </div>
</div>

<?php get_footer() ?>