<?php get_header() ?>
<main>

        <section class="main-content mt-5">
            <div class="container"> <!-- Container start -->
                <div class="row"> <!--Main row start-->
                    <!-- main content column start -->
                    <div class="col-lg-8 col-md-12">
                        <!-- local news start -->
                        <div class="block-container">
                            <h3 class="block-title">
                                <span><?php wp_title($sep=" ")?></span>
                            </h3>
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="cards">
                                <a href="<?php the_permalink()?>" class="card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url("largest"); ?>" class="card__image">
                                <?php endif; ?>
                                    <!-- <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/1.jpg')?>);"></div> -->
                                    <div class="card__content">
                                        <div class="card__title"><?php the_title()?></div>
                                        <p class="card__snippet"><?php the_excerpt()?></p>
                                        <div class="card__readmore">أكمل القراءة</div>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile;
                            endif; ?>
                            <div class="cards">
                                <a href="#" class="card">
                                    <div class="card__image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/1.jpg')?>);"></div>
                                    <div class="card__content">
                                        <div class="card__title"><?php the_title()?></div>
                                        <p class="card__snippet"><?php the_excerpt()?></p>
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
                        <!-- Economy news end -->

                        <!-- Sport news start -->
                        <div class="block-container mt-5">
                            <h3 class="block-title">
                                <span>أخبار الرياضة</span>
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
                                                        <img src="/Sass/dist/images/1.jpg" class="latest-news-img" alt="">
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
                                                        <img src="/Sass/dist/images/1.jpg" class="latest-news-img" alt="">
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
                <?php echo paginate_links()?>
            </div> <!-- Container end -->
        </section>
    </main>
<?php get_footer(); ?>