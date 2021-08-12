<?php get_header(); ?>
<div class="container pt-5 pb-5">
    <div class="block-container">
        <h3 class="block-title">
            <span><?php the_archive_title(); ?></span>
        </h3>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="cards">
            <div class="card">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url("small"); ?>" class="card__image">
            <?php endif; ?>
                <div class="card__content">
                    <div class="card__title"><?php the_title()?></div>
                    <p class="card__snippet"><?php the_excerpt()?></p>
                    <a href="<?php the_permalink()?>" class="card__readmore btn btn-success">أكمل القراءة</a>
                </div>
            </div>
        </div>
        <?php endwhile;
        endif; ?>
    </div>
</div>
<?php get_footer() ?>