<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="page"> <!--page div start-->
            <div class="container  mt-2"> <!--main container start-->
                <div class="row"> <!--main row start-->
                    
                <div class="col-8"> <!-- col-8 start -->
                    <div class="page__main-section ">
                        <h1 class="page__title"><?php the_title()?></h1>
                        <div class="page__image" style="background-image: url(<?php echo get_theme_file_uri('assets/images/1.jpg')?>);"></div>
                        <div class="page__content">
                            <?php the_content();?>                     
                        </div>
                    </div>
                    <div class="container">
                        <div class="widget">
                            <!-- <h3 class="widget-title">عنوان الصفحة </h3> -->
                            <div class="cards">
                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url('/dist/images/1.jpg');"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>
            
                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url('/dist/images/2.jpg');"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>
            
                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url('/dist/images/1.jpg');"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>
            
                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url('/dist/images/2.jpg');"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>
            
                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url('/dist/images/1.jpg');"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>
            
                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url('/dist/images/2.jpg');"></div>
                                    <div class="card__content">
                                        <div class="card__title">منطقية فيعرضهم هذا لمواجهة الظروف الأليمة</div>
                                        <p class="card__snippet">من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة
                                        </p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div> <!-- col-8 start -->
                <!-- col-4 start -->
                <div class="col-4">
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
                                    <li>
                                        <div class="latest-news-item clearfix">
                                            <div class="item-thumbnail">
                                                <a href="#">
                                                    <img src="/dist/images/1.jpg" class="latest-news-img" alt="">
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
                                                    <img src="/dist/images/1.jpg" class="latest-news-img" alt="">
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
                                                    <img src="/dist/images/1.jpg" class="latest-news-img" alt="">
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
                                                    <img src="/dist/images/1.jpg" class="latest-news-img" alt="">
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
                    </div> <!-- col-4 end -->
                </div> <!--main row end-->
            </div> <!--main container end-->
        </div> <!--page div end-->
    
    <?php endwhile;
    endif; ?>

<?php get_footer() ?>