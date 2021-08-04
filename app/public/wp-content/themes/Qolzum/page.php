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
                            <h3 class="widget-title">عنوان الصفحة </h3>
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
                            <div class="widget-content">
                                <ul class="latest-news">

                                <ul class="latest-news">
                                    <div class="latest-news-item clearfix">
                                        <?php 
                                        // Define our WP Query Parameters
                                        $the_query = new WP_Query( 'posts_per_page=5' ); ?>
                                        <?php 
                                        // Start our WP Query
                                        while ($the_query -> have_posts()) : $the_query -> the_post(); 
                                        // Display the Post Title with Hyperlink
                                        ?>

                                        <li>
                                            <div class="item-thumbnail">
                                                <a href="#">
                                                    <img src="/dist/images/1.jpg" class="latest-news-img" alt="">
                                                </a>
                                            </div>
                                            <div class="news-item-container">
                                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                                <p class="news-exerpt">
                                                    <?php 
                                                    // Display the Post Excerpt
                                                    the_excerpt(__('(...المزيد)')); ?>
                                                </p>
                                                <div class="news-meta"> 
                                                    <span class="news-date"> 21 يوليو 2021م </span>
                                                </div>
                                            </div>
                                        </li>
                                        <?php 
                                        // Repeat the process and reset once it hits the limit
                                        endwhile;
                                        wp_reset_postdata();
                                        ?>
                                    </div>
                                </ul>
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
                        </div>   <!-- most recet widget start -->

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