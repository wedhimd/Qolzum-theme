<?php get_header(); ?>

    <main>
        <!-- breaking news headlines start -->
        <div class="breaking-news">
            <div class="breaking-news__title"> <h3 >آخر الأخبار</h3> </div>
            <div class="breaking-news__body">
                <?php 
                    $breakingNews = new WP_Query(array(
                        "posts_per_page" => 6,
                        "category_name" => "news"
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
                 <section class="popular-news-carousel">
                    <div id="carouselHero" class="carouselHero">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
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
                                        <a href="<?php the_permalink() ?>"><div class="carousel-caption  d-md-block">
                                            <p><?php the_title()?> </p>
                                        </div></a>
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
            <div id="parent">
                <!-- latest politics end -->
            <div id="latest-politcs">
                <section class="news">
                    <?php 
                    $politicsNews = new WP_Query(array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'politics',
                        'posts_per_page' => 1,
                    )); ?>
                    <?php if ($politicsNews->have_posts()) : while ($politicsNews->have_posts()) : $politicsNews->the_post(); ?>
                        <?php if(has_post_thumbnail()): ?>
                        <a href="<?php the_permalink() ?>">
                            <div class="news-container">
                                <div class="float" >
                                    <img src="<?php the_post_thumbnail_url(); ?>" width="300" height="200">
                                    <h3 class="float__title">سياسة</h3>
                                </div>
                                <div ><span class="carousel-text"> <?php the_title()?> </span> </div>
                            </div>
                        </a>    
                        <?php endif?>
                    <?php endwhile;
                    endif; wp_reset_postdata();?>
                </section>
            </div>
            <!-- latest politics end -->

            <!-- latest economy start -->
            <div id="latest-economic">
                <section class="news">
                    <?php 
                    $economyNews = new WP_Query(array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'economy',
                        'posts_per_page' => 1,
                    )); ?>
                    <?php if ($economyNews->have_posts()) : while ($economyNews->have_posts()) : $economyNews->the_post(); ?>
                        <?php if(has_post_thumbnail()): ?>
                        <a href="<?php the_permalink() ?>">
                            <div class="news-container">
                                <div class="float" >
                                    <img src="<?php the_post_thumbnail_url(); ?>" width="300" height="200">
                                    <h3 class="float__title">اقتصاد</h3>
                                </div>
                                <div ><span class="carousel-text"> <?php the_title()?> </span> </div>
                            </div>
                        </a>   
                        <?php endif?>
                    <?php endwhile;
                    endif; wp_reset_postdata();?>
                </section>
            </div>
            <!-- latest economy end -->

            <!-- latest science start -->
            <div id="latest-science">
                <section class="news">
                <?php 
                    $healthFeaturedNews = new WP_Query(array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'health',
                        'meta_query' => array(array('key' => '_thumbnail_id')),
                        'posts_per_page' => 1,
                    )); ?>

                    <?php if ($healthFeaturedNews->have_posts()) : while ($healthFeaturedNews->have_posts()) : $healthFeaturedNews->the_post(); ?>
                        <a href="<?php the_permalink() ?>">
                            <div class="news-container">
                                <div class="float" >
                                    <img src="<?php the_post_thumbnail_url(); ?>" width="300" height="200">
                                    <h3 class="float__title">صحة</h3>
                                </div>
                                <div ><span class="carousel-text"> <?php the_title()?> </span> </div>
                            </div>
                        </a>   
                    <?php endwhile;
                    endif; wp_reset_postdata();?>
                </section>
            </div>
            <!-- latest science end -->

            <!-- latest sport start -->
            <div id="latest-sport">
                <section class="news">
                <?php 
                    $sportsFeaturedNews = new WP_Query(array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'sports',
                        'meta_query' => array(array('key' => '_thumbnail_id')),
                        'posts_per_page' => 1,
                    )); ?>

                    <?php if ($sportsFeaturedNews->have_posts()) : while ($sportsFeaturedNews->have_posts()) : $sportsFeaturedNews->the_post(); ?>
                    <a href="<?php the_permalink() ?>">
                            <div class="news-container">
                                <div class="float" >
                                    <img src="<?php the_post_thumbnail_url(); ?>" width="300" height="200">
                                    <h3 class="float__title">رياضة</h3>
                                </div>
                                <div ><span class="carousel-text"> <?php the_title()?> </span> </div>
                            </div>
                        </a>   
                    <?php endwhile;
                    endif; wp_reset_postdata();?>
                </section>
            </div>
            <!-- latst sport end -->
            </div>
            
        </article> <!-- carousel end -->

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
                                    "posts_per_page" => 4,
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
                                    "posts_per_page" => 4,
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
                                    "posts_per_page" => 4,
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
                                    "posts_per_page" => 4,
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
                                        "posts_per_page" => 4,
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

                        <!-- latest opinions start -->
                        <div class="block-container mt-5">
                            <h3 class="block-title">
                                <span>مقالات</span>
                            </h3>
                            <div class="opinion">
                                <div class="opinion__boxes">
                                    <div class="box">
                                        <?php  $opinions = new WP_Query(array(
                                        // Define our WP Query Parameters
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'category_name' => 'opinions',
                                        "posts_per_page" => 4,
                                        )); ?>
                                        <?php
                                            // Start our WP Query
                                            // $author_avatar = get_avatar();
                                            // $defult_avatar = get_theme_file_uri("/assets/images/logo.png");
                                            if ($opinions->have_posts()) : while ($opinions->have_posts()) : $opinions->the_post(); 
                                        ?>
                                        <div class="box__content">
                                            <!-- <img src="" alt=""> -->
                                            <div><?php echo get_avatar(get_the_author_meta( 'ID' ))?></div>
                                            <h5><?php the_author() ?> </h2>
                                            <h4><?php the_title() ?> </h4>
                                            <p> <?php  echo wp_trim_words(get_the_content(), 18);?></p>
                                            <a class="box__btn" href="<?php the_permalink() ?> ">أكمل القراءة</a>
                                        </div>
                                        <?php  endwhile; endif; wp_reset_postdata();?>
                                    </div>
                                </div>
                            </div>                              
                        </div> <!--latest opinions end-->


                    </div> <!-- Main content column end -->

                    <!-- sidebar content column start -->
                    <div class="col-lg-4 col-md-12">
                        <!-- sidebar start  -->
                        <div class="sidebar">
                            <?php get_sidebar("home"); ?>
                        </div> <!-- sidebar category widget end -->
                        </div> <!-- sidebar end-->
                    </div>  <!-- sidebar content column start -->
                </div> <!--Main row end-->
            </div> <!-- Container end -->
        </section>
    </main>
<?php get_footer() ?>