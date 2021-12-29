
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