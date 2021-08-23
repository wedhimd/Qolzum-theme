<?php get_header()?>
<div class="container">
<div class="block-container mt-5">
    <h3 class="block-title">
        <span><?php the_title()?> </span>
    </h3>
    <?php  $economyNews = new WP_Query(array(
            // Define our WP Query Parameters
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'miscellaneous',
            "posts_per_page" => 10,
        )); ?>
    <div class="cards">
        <?php
            // Start our WP Query
            if ($economyNews->have_posts()) : while ($economyNews->have_posts()) : $economyNews->the_post(); 
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
</div>

<?php get_footer()?>