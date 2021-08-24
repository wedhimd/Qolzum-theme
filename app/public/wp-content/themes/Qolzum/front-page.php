<?php get_header(); ?>

    <main>
        <!-- breaking news headlines start -->
        <div class="breaking-news">
            <div> <h3 class="breaking-news__title">عاجل</h3> </div>
            <div class="breaking-news__body">
                <?php 
                    $breakingNews = new WP_Query(array(
                        "posts_per_page" => 6,
                        // "category_name" => ""
                    ));

                    while($breakingNews->have_posts()){
                        $breakingNews->the_post(); ?>
                        <div class="breaking-news__link"><a href="<?php the_permalink() ?>"> <?php the_title() ?> </a></div>
                    <?php } wp_reset_postdata() ?>
            </div>
        </div> <!-- breaking news headlines end -->
        
        <!-- carousel start -->
        <article class="popular-news">
            <div class="featured">
                <h2 class="thumbnail-headings">آخر اﻷخبار</h2>
                <section class="popular-news-carousel">
                    <div id="carouselHero" class="carouselHero">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <!-- <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div> -->
                            <div class="carousel-inner">
                                <?php  $featuredNews = new WP_Query(array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'news',
                                    'meta_query' => array(array('key' => '_thumbnail_id')),
                                    "posts_per_page" => 6,
                                ));
                                $firstSlide = 0;
                                while($featuredNews->have_posts()){
                                    $featuredNews->the_post(); $firstSlide ++ ?>
                                    <?php if($firstSlide == 1) {?>
                                        <div class="carousel-item active">
                                    <?php }else {?>
                                            <div class="carousel-item">
                                    <?php }?>
                                        <img src="<?php the_post_thumbnail_url( get_the_ID(), "small");?>" class="d-block"  alt="...">
                                        <div class="carousel-caption  d-md-block">
                                            <p><?php the_title()?> </p>
                                        </div>
                                    </div>
                                <?php } wp_reset_postdata();?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </section>
            </div>

            <div id="latest-economic">
                <h2 class="thumbnail-headings">الاقتصاد</h2>
                <section class="news">
                    <?php 
                    $economyNews = new WP_Query(array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'economy',
                        'posts_per_page' => 2,
                    )); ?>
                    <?php if ($economyNews->have_posts()) : while ($economyNews->have_posts()) : $economyNews->the_post(); ?>
                        <?php if(has_post_thumbnail()): ?>
                        <div class="news-container">
                            <img src="<?php the_post_thumbnail_url(); ?>" width="300" height="200">
                            <p class="carousel-text"><a href="<?php the_permalink() ?>"> <?php the_title()?> </a> </p>
                        </div>
                        <?php endif?>
                    <?php endwhile;
                    endif; wp_reset_postdata();?>
                </section>
            </div>
            <div id="latest-sport">
                <h2 class="thumbnail-headings">الرياضة</h2>
                <section class="news">
                <?php 
                    $sportsFeaturedNews = new WP_Query(array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'sports',
                        'meta_query' => array(array('key' => '_thumbnail_id')),
                        'posts_per_page' => 2,
                    )); ?>

                    <?php if ($sportsFeaturedNews->have_posts()) : while ($sportsFeaturedNews->have_posts()) : $sportsFeaturedNews->the_post(); ?>
                        <div class="news-container">
                            <img src="<?php the_post_thumbnail_url(); ?>" width="300" height="200">
                            <p class="carousel-text"><a href="<?php the_permalink() ?>"> <?php the_title()?> </a> </p>
                        </div>
                    <?php endwhile;
                    endif; wp_reset_postdata();?>
                </section>
                <!-- <section class="news">
                    <div class="news-container">
                        <img src="<?php echo get_theme_file_uri('/assets/images/5.webp')?>" width="300" height="200">
                        <p class="carousel-text">لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار النشوة وتمجيد الألم نشأت بالفعل،</p>
                    </div>
                </section> -->
            </div>
        </article> <!-- carousel start -->

        <section class="main-content mt-5">
            <div class="container"> <!-- Container start -->
                <div class="row"> <!--Main row start-->
                    <!-- main content column start -->
                    <div class="col-lg-8 col-md-12">
                        <!-- local news start -->
                        <div class="block-container">
                            <h3 class="block-title">
                                <span>أخبار القرن الإفريقي</span>
                            </h3>
                            <?php  $localNews = new WP_Query(array(
                                    // Define our WP Query Parameters
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'local',
                                    "posts_per_page" => 6,
                                )); ?>
                            <div class="cards">
                                <?php
                                    // Start our WP Query
                                    if ($localNews->have_posts()) : while ($localNews->have_posts()) : $localNews->the_post(); 
                                ?>
                            
                                <a href="<?php the_permalink() ?>" class="card">
                                        <?php if(has_post_thumbnail()) {?>
                                        <div class="card__image" style="background-image: url('<?php echo the_post_thumbnail_url(get_the_ID())?>');"></div>
                                        <?php } else {?>
                                            <div class="card__image" style="background-image: url('https://res.cloudinary.com/wedhimd/image/upload/v1628691789/Qolzum/sport_jl6hs2.webp');"></div>
                                        <?php } ?>
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
                        </div> <!--local news end-->

                        <!-- world news start -->
                        <div class="block-container mt-5">
                            <h3 class="block-title">
                                <span>الأخبار العالمية</span>
                            </h3>
                            <?php  $worldNews = new WP_Query(array(
                                    // Define our WP Query Parameters
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'world',
                                    "posts_per_page" => 6,
                                )); ?>
                            <div class="cards">
                                <?php
                                    // Start our WP Query
                                    if ($worldNews->have_posts()) : while ($worldNews->have_posts()) : $worldNews->the_post(); 
                                ?>
                            
                                <a href="<?php the_permalink() ?>" class="card">
                                        <?php if(has_post_thumbnail()) {?>
                                        <div class="card__image" style="background-image: url('<?php echo the_post_thumbnail_url(get_the_ID())?>');"></div>
                                        <?php } else {?>
                                            <div class="card__image" style="background-image: url('https://res.cloudinary.com/wedhimd/image/upload/v1628691789/Qolzum/sport_jl6hs2.webp');"></div>
                                        <?php } ?>
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
                        <!--world news end-->                   

                        <!-- Economy news start -->
                        <div class="block-container mt-5">
                            <h3 class="block-title">
                                <span>أخبار الاقتصاد</span>
                            </h3>
                            <?php  $economyNews = new WP_Query(array(
                                    // Define our WP Query Parameters
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'economy',
                                    "posts_per_page" => 3,
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
                        <!-- Economy news end -->

                        <!-- Sport news start -->
                        <div class="block-container mt-5">
                            <h3 class="block-title">
                                <span>أخبار الرياضة</span>
                            </h3>
                            <?php  $sportsNews = new WP_Query(array(
                                    // Define our WP Query Parameters
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'sports',
                                    "posts_per_page" => 3,
                                )); ?>
                            <div class="cards">
                                <?php
                                    // Start our WP Query
                                    if ($sportsNews->have_posts()) : while ($sportsNews->have_posts()) : $sportsNews->the_post(); 
                                ?>
                            
                                <a href="<?php the_permalink() ?>" class="card">
                                        <?php if(has_post_thumbnail()) {?>
                                        <div class="card__image" style="background-image: url('<?php echo the_post_thumbnail_url(get_the_ID())?>');"></div>
                                        <?php } else {?>
                                            <div class="card__image" style="background-image: url('https://res.cloudinary.com/wedhimd/image/upload/v1628691789/Qolzum/sport_jl6hs2.webp');"></div>
                                        <?php } ?>
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
                        <!-- Sport news end -->

                        <!-- Technology news start -->
                        <div class="block-container mt-5">
                            <h3 class="block-title">
                                <span>أخبار العلوم والتكنلوجيا </span>
                            </h3>
                            <?php  $scienceNews = new WP_Query(array(
                                    // Define our WP Query Parameters
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'science',
                                    "posts_per_page" => 3,
                                )); ?>
                            <div class="cards">
                                <?php
                                    // Start our WP Query
                                    if ($scienceNews->have_posts()) : while ($scienceNews->have_posts()) : $scienceNews->the_post(); 
                                ?>
                            
                                <a href="<?php the_permalink() ?>" class="card">
                                        <?php if(has_post_thumbnail()) {?>
                                        <div class="card__image" style="background-image: url('<?php echo the_post_thumbnail_url(get_the_ID(), $size = "smallest")?>');"></div>
                                        <?php } else {?>
                                            <div class="card__image" style="background-image: url('https://res.cloudinary.com/wedhimd/image/upload/v1628691789/Qolzum/sport_jl6hs2.webp');"></div>
                                        <?php } ?>
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
                        <!-- Technology news end -->

                        <!-- Culture news start -->
                        <div class="block-container mt-5">
                            <h3 class="block-title">
                                <span>أخبار الثقافة والفنون</span>
                            </h3>
                            <?php  $cultureNews = new WP_Query(array(
                                    // Define our WP Query Parameters
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'culture',
                                    "posts_per_page" => 3,
                                )); ?>
                            <div class="cards">
                                <?php
                                    // Start our WP Query
                                    if ($cultureNews->have_posts()) : while ($cultureNews->have_posts()) : $cultureNews->the_post(); 
                                ?>
                            
                                <a href="<?php the_permalink() ?>" class="card">
                                        <?php if(has_post_thumbnail()) {?>
                                        <div class="card__image" style="background-image: url('<?php echo the_post_thumbnail_url(get_the_ID())?>');"></div>
                                        <?php } else {?>
                                            <div class="card__image" style="background-image: url('https://res.cloudinary.com/wedhimd/image/upload/v1628691789/Qolzum/sport_jl6hs2.webp');"></div>
                                        <?php } ?>
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
                        </div> <!-- Culture news end -->

                        <!-- Miscellaneous news start -->
                        <div class="block-container mt-5">
                            <h3 class="block-title">
                                <span>أخبار المنوعات </span>
                            </h3>
                            <?php  $miscellaneousNews = new WP_Query(array(
                                        // Define our WP Query Parameters
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'category_name' => 'miscellaneous',
                                        "posts_per_page" => 3,
                                )); ?>
                            <div class="cards">
                                    <?php
                                        // Start our WP Query
                                        if ($miscellaneousNews->have_posts()) : while ($miscellaneousNews->have_posts()) : $miscellaneousNews->the_post(); 
                                    ?>
                                
                                    <a href="<?php the_permalink() ?>" class="card">
                                            <?php if(has_post_thumbnail()) {?>
                                            <div class="card__image" style="background-image: url('<?php echo the_post_thumbnail_url(get_the_ID())?>');"></div>
                                            <?php } else {?>
                                                <div class="card__image" style="background-image: url('https://res.cloudinary.com/wedhimd/image/upload/v1628691789/Qolzum/sport_jl6hs2.webp');"></div>
                                            <?php } ?>
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
                        </div> <!-- Miscellaneous news end -->

                    </div> <!-- Main content column end -->

                    <!-- sidebar content column start -->
                    <div class="col-lg-4 col-md-12">
                        <!-- sidebar start  -->
                        <div class="sidebar">

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

                            <!-- most read widget start -->
                            <div class="widget">
                                <h3 class="widget-title">الأكثر قراءة </h3>
                                <div class="widget-content">
                                    <ul class="latest-news">
                                    <?php 
                                        $popularpost = new WP_Query( array( 
                                            'posts_per_page' => 4, 
                                            'meta_key' => 'wpb_post_views_count', 
                                            'orderby' => 'meta_value_num', 
                                            'order' => 'DESC'  ) );
                                        while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>

                                        <li>
                                            <div class="latest-news-item clearfix">
                                                <div class="item-thumbnail">
                                                    <a href="<?php the_permalink()?>">
                                                        <?php if (has_post_thumbnail()) { ?>
                                                        <img src="<?php the_post_thumbnail_url($size = "smallest"); ?>" class="latest-news-img">
                                                        <?php }else { ?>
                                                            <img src="https://res.cloudinary.com/wedhimd/image/upload/v1628691789/Qolzum/sport_jl6hs2.webp" class="latest-news-img">
                                                        <?php }?>    
                                                    </a>
                                                </div>
                                                <div class="news-item-container">
                                                    <a href="<?php the_permalink()?>"><h2 class="news-title"><?php the_title();?></h2> </a> 
                                                    <p class="news-exerpt">
                                                        <?php if(has_excerpt()){
                                                            echo get_the_excerpt();
                                                        } else {
                                                            echo wp_trim_words(get_the_content(), 18);
                                                        } ?> <a href="<?php the_permalink(); ?>">...  المزيد</a>
                                                    </p>
                                                    <div class="news-meta"> 
                                                    <span class="news-date"><?php  echo wpb_get_post_views(get_the_ID());?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                       <?php endwhile; ?>
                                    </ul>
                                </div>
                            </div>  <!-- most read widget end -->

                            <!-- latest opinion  widget start -->
                            <div class="widget">
                                <h3 class="widget-title">الرأي</h3>
                                <div class="widget-content">
                                    <div class="opinion-cards">
                                        
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
                                            <div class="box">
                                                <div class="heading">
                                                    <h2><?php the_author() ?> </h2>
                                                    <!-- <img src="..." alt=""> -->
                                                </div>
                                                <div class="text">
                                                    <h4><?php the_title() ?> </h4>
                                                    <p> <?php  echo wp_trim_words(get_the_content(), 18);?></p>
                                                    <a href="<?php the_permalink() ?> ">أكمل القراءة</a>
                                                </div>
                                            </div>
                                            <?php  endwhile; endif; ?>
                                        <div class="box">
                                            
                                            <div class="heading">
                                                <h2>علي حمد</h2>
                                                <!-- <img src="..." alt=""> -->
                                            </div>
                                            <div class="text">
                                                <h4>العنوان</h4>
                                                <p>من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة</p>
                                                <a href="#">أكمل القراءة</a>
                                            </div>
                                        </div>

                                        <div class="box">
                                            
                                            <div class="heading">
                                                <h2>علي نائب</h2>
                                                <!-- <img src="..." alt=""> -->
                                            </div>
                                            <div class="text">
                                                <h4>العنوان</h4>
                                                <p>من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة</p>
                                                <a href="#">أكمل القراءة</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> <!-- latest opinion widget  end -->

                            <!-- sidebar ad widget start-->
                            <div class="widget">
                                <div class="widget-content">
                                    <div class="sidebar-ad">
                                        <img src="<?php echo get_theme_file_uri('/assets/images/ad-banner.png')?>" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div> <!-- sidebar ad widget end-->

                            <!-- sidebar tags widget start -->
                            <div class="widget">
                                <h3 class="widget-title">أشهر #_الوسوم</h3>
                                <div class="widget-content">
                                <div class="sidebar-tags">
                                        <ul>
                                            <li><a href="<?php echo site_url("/tag/sports") ?>"> #سياسة</a></li>
                                            <li><a href="#"> #رياضة</a></li>
                                            <li><a href="#"> #إقتصاد</a></li>
                                            <li><a href="#"> #تكنلوجيا</a></li>
                                            <li><a href="#"> #ثقافة وعلوم</a></li>
                                            <li><a href="#"> #منوعات</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#"> #إريتريا</a></li>
                                            <li><a href="#"> #السودان</a></li>
                                            <li><a href="#"> #أثيوبيا</a></li>
                                            <li><a href="#"> #الصومال</a></li>
                                            <li><a href="#"> #جيبوتي</a></li>
                                            <li><a href="#"> #جنوب_السودان</a></li>
                                        </ul>
                                </div> 
                                </div>
                            </div> <!-- sidebar tags widget end -->

                            <!-- sidebar category widget start -->
                            <div class="widget">
                                <h3 class="widget-title">الفئات</h3>
                                <div class="widget-content">
                                    <div class="categories">
                                        <ul>
                                            <li><a href="/news/politics/"> سياسة</a><span><?php echo count_cat_post("politics"); ?></span></li>
                                            <li><a href="/news/politics/local/"> القرن الإفريقي</a><span><?php echo count_cat_post("local"); ?></span></li>
                                            <li><a href="/news/politics/world/"> العالم</a><span><?php echo count_cat_post("world"); ?></span></li>
                                            <li><a href="/news/economy/"> إقتصاد</a><span><?php echo count_cat_post("economy"); ?></span></li>
                                            <li><a href="/news/sports/"> رياضة</a><span><?php echo count_cat_post("sports"); ?></span></li>
                                            <li><a href="/news/science/"> العلوم والتكنلوجيا</a><span><?php echo count_cat_post("science"); ?></span></li>
                                            <li><a href="/news/culture/"> الثقافة والفنون</a><span><?php echo count_cat_post("culture"); ?></span></li>
                                            <li><a href="/news/miscellaneous/"> منوعات </a><span><?php echo count_cat_post("miscellaneous"); ?></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- sidebar category widget end -->
                        </div> <!-- sidebar end-->
                    </div>  <!-- sidebar content column start -->
                </div> <!--Main row end-->
                <!-- authors list start -->
                <!-- <div class="block-container mt-5">
                    <h3 class="block-title">
                        <span>كتاب القلزم </span>
                    </h3>
                    <div class="authors__cards">

                        <div class="cards">
                            <a href="#" class="card">
                                <div class="card__image" style="background-image: url('/dist/images/Ali.N.jpg');"></div>
                                <div class="card__content">
                                    <div class="card__title">علي نائب </div>
                                    <div class="card__readmore">رئيس التحرير</div>
                                </div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__image" style="background-image: url('/dist/images/Ali.N.jpg');"></div>
                                <div class="card__content">
                                    <div class="card__title">علي نائب </div>
                                    <div class="card__readmore">رئيس التحرير</div>
                                </div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__image" style="background-image: url('/dist/images/Ali.N.jpg');"></div>
                                <div class="card__content">
                                    <div class="card__title">علي نائب </div>
                                    <div class="card__readmore">رئيس التحرير</div>
                                </div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__image" style="background-image: url('/dist/images/Ali.N.jpg');"></div>
                                <div class="card__content">
                                    <div class="card__title">علي نائب </div>
                                    <div class="card__readmore">رئيس التحرير</div>
                                </div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__image" style="background-image: url('/dist/images/Ali.N.jpg');"></div>
                                <div class="card__content">
                                    <div class="card__title">علي نائب </div>
                                    <div class="card__readmore">رئيس التحرير</div>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                </div> -->
                <!-- authors list end -->
            </div> <!-- Container end -->
        </section>
    </main>
<?php get_footer() ?>