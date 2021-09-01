<?php get_header()?>
<div class="page">
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h3 class="page__title block-title">
                    <span><?php the_title()?> </span>
                </h3>
                <div class="widget">
                    <div class="widget-content">
                        <div class="opinion">
                            <div class="opinion__boxes">
                                <div class="box">
                                    <?php
                                    // Start our WP Query
                                    query_posts('category_name=opinions');
                                    if (have_posts()) : while (have_posts()) : the_post(); 
                                    ?>
                                    <div class="box__content">
                                        <img src="<?php echo get_theme_file_uri("/assets/images/logo.png")?>" alt="">
                                        <h5><?php the_author() ?> </h5>
                                        <h4><?php the_title() ?> </h4>
                                        <p> <?php  echo wp_trim_words(get_the_content(), 18);?></p>
                                        <a  class="box__btn" href="<?php the_permalink() ?> ">أكمل القراءة</a>
                                    </div>
                                    
                                    <?php  endwhile; endif; wp_reset_query();?> 
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <?php get_sidebar("page"); ?>
            </div>                        
        </div>
        <?php echo paginate_links()?>
    </div>
</div>
<?php get_footer()?>