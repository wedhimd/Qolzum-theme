<?php get_header(); ?>

    <main>
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
                
                <!-- <div class="breaking-news__link"><a href="#"> محمد علي يسلم على علي ويقول كل سنة ، وأنت طيب 2</a></div> -->
                <div class="breaking-news__link"><a href="#">3 لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة </a></div>
                <div class="breaking-news__link"><a href="#">  الرجال المفتونون بنشوة اللحظة الهائمون يعقبها من الألم والأسي المحت 4</a></div>
                <div class="breaking-news__link"><a href="#">  الرجال المفتونون بنشوة اللحظة الهائمون في رغباتهم فلا يدركون ما يعقبها من الألم والأسي المحت 5</a></div>
                <div class="breaking-news__link"><a href="#"> من أجل الحصول على ميزة أو فائدة؟ 6</a></div>
            </div>
        </div>

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
                                        <img src="<?php the_post_thumbnail_url( get_the_ID(), "smallest");?>" class="d-block"  alt="...">
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
        </article>

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
                            <div class="cards">
                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/1.jpg')?>);"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>

                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/2.jpg')?>);"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>

                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/3.jpg')?>);"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>

                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/3.jpg')?>);"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>
                                
                            </div>
                        </div> <!--local news end-->

                        <!-- world news start -->
                        <div class="block-container mt-5">
                            <h3 class="block-title">
                                <span>الأخبار العالمية</span>
                            </h3>
                            <div class="cards">
                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/1.jpg')?>);"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>

                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/2.jpg')?>);"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>

                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/2.jpg')?>);"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>

                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/3.jpg')?>);"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>
                                
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
                                    if ($sportsFeaturedNews->have_posts()) : while ($sportsNews->have_posts()) : $sportsNews->the_post(); 
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
                            <div class="cards">
                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/1.jpg')?>);"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>

                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/1.jpg')?>);"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                        <!-- Technology news end -->

                        <!-- Cultural and Science news start -->
                        <div class="block-container mt-5">
                            <h3 class="block-title">
                                <span>أخبار الثقافة والفنون</span>
                            </h3>
                            <div class="cards">
                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/1.jpg')?>);"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>

                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/1.jpg')?>);"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة 
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>
                                
                            </div>
                        </div> <!-- Cultural and Science news end -->

                        <!-- Mecilenious news start -->
                        <div class="block-container mt-5">
                        <h3 class="block-title">
                            <span>أخبار المنوعات </span>
                        </h3>
                        <div class="cards">
                            <a href="#" class="card">
                                <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/1.jpg')?>);"></div>
                                <div class="card__content">
                                    <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                    <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                    </p>
                                    <div class="card__readmore">أكمل القراءة</div>
                                </div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/1.jpg')?>);"></div>
                                <div class="card__content">
                                    <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                    <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                    </p>
                                    <div class="card__readmore">أكمل القراءة</div>
                                </div>
                            </a>
                            
                        </div>
                        </div> <!-- Mecilenious news end -->

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
                                        <li>
                                            <div class="latest-news-item clearfix">
                                                <div class="item-thumbnail">
                                                    <a href="#">
                                                        <img src="<?php echo get_theme_file_uri('/assets/images/1.jpg')?>" class="latest-news-img" alt="">
                                                    </a>
                                                </div>
                                                <div class="news-item-container">
                                                    <h2 class="news-title">العنوان</h2>
                                                    <p class="news-exerpt">
                                                        وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة البشرية، فلا أحد يرفض أو يكره أو يتجنب الشعور بالسعادة،
                                                    </p>
                                                    <div class="news-meta"> 
                                                    <span class="news-date"> 21 يوليو 2021م </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="latest-news-item clearfix">
                                                <div class="item-thumbnail">
                                                    <a href="#">
                                                        <img src="<?php echo get_theme_file_uri('/assets/images/1.jpg')?>" class="latest-news-img" alt="">
                                                    </a>
                                                </div>
                                                <div class="news-item-container">
                                                    <h2 class="news-title">العنوان</h2>
                                                    <p class="news-exerpt">
                                                        وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة البشرية، فلا أحد يرفض أو يكره أو يتجنب الشعور بالسعادة،
                                                    </p>
                                                    <div class="news-meta"> 
                                                    <span class="news-date"> 21 يوليو 2021م </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="latest-news-item clearfix">
                                                <div class="item-thumbnail">
                                                    <a href="#">
                                                        <img src="<?php echo get_theme_file_uri('/assets/images/1.jpg')?>" class="latest-news-img" alt="">
                                                    </a>
                                                </div>
                                                <div class="news-item-container">
                                                    <h2 class="news-title">العنوان</h2>
                                                    <p class="news-exerpt">
                                                        وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة البشرية، فلا أحد يرفض أو يكره أو يتجنب الشعور بالسعادة،
                                                    </p>
                                                    <div class="news-meta"> 
                                                    <span class="news-date"> 21 يوليو 2021م </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="latest-news-item clearfix">
                                                <div class="item-thumbnail">
                                                    <a href="#">
                                                        <img src="<?php echo get_theme_file_uri('/assets/images/1.jpg')?>" class="latest-news-img" alt="">
                                                    </a>
                                                </div>
                                                <div class="news-item-container">
                                                    <h2 class="news-title">العنوان</h2>
                                                    <p class="news-exerpt">
                                                        وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة البشرية، فلا أحد يرفض أو يكره أو يتجنب الشعور بالسعادة،
                                                    </p>
                                                    <div class="news-meta"> 
                                                    <span class="news-date"> 21 يوليو 2021م </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>  <!-- most read widget end -->

                            <!-- latest opinion  widget start -->
                            <div class="widget">
                                <h3 class="widget-title">الرأي</h3>
                                <div class="widget-content">
                                    <div class="opinion-cards">
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
                                            <li><a href="#"> #سياسة</a></li>
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
                                            <li><a href="#"> سياسة</a><span>65</span></li>
                                            <li><a href="#"> إقتصاد</a><span>35</span></li>
                                            <li><a href="#"> رياضة</a><span>34</span></li>
                                            <li><a href="#"> التكنلوجيا</a><span>25</span></li>
                                            <li><a href="#"> ثقافة وعلوم</a><span>40</span></li>
                                            <li><a href="#"> منوعات </a><span>43</span></li>
                                            <li><a href="#"> القرن الإفريقي</a><span>55</span></li>
                                            <li><a href="#"> العالم</a><span>48</span></li>
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