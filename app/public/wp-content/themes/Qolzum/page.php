<?php get_header()?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'page' ); ?>>
    <div class="container mt-4">
        <div class="row">
            <div class="col-8">
                <h3 class="page__title block-title">
                <span><?php  the_title($sep=" ")?> </span>
                </h3>
                <?php
                    // Start our WP Query
                    if (have_posts()) : while (have_posts()) : the_post(); 
                ?>
            
                <div>
                    <?php if(has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" width="300" height="200">
                    <?php endif; ?>
                </div>

                <div>
                    <p><?php the_content()?></p>
                </div>
                <?php  endwhile; endif;?>                                
            </div>
            <div class="col-4">
                <?php get_sidebar("page"); ?>
            </div>
            
        </div>
        <?php echo paginate_links()?>
    </div>
</div>

<?php get_footer()?>