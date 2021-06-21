<!doctype html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="One stop for all the Horn of Africa news">
    <title> Qolzum - القلزم </title>
    <?php wp_head(); ?>

</head>

<body <?php body_class() ?>>

    <header>
        <div class="website-header">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } ?>
            <!-- <img src="assets/images/logo.png"> -->
            <h1>القلزم للأخبار</h1>
            <div class="social-icons">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fas fa-rss"></i>
            </div>
        </div>
        <nav class="navbar navbar-expand-md ">
            <!-- Brand -->

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">الأخبار المحلية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">الأخبار العالمية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">اﻹقتصاد</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">التكنلوجيا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">الرياضة</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="breaking-news-section">
            <span id="btext">اﻷخبار العاجلة</span>
            <marquee direction="right" onmouseover="this.stop()" onmouseout="this.start()">
                <a href="#" class="breaking-news">
                    <p class="bntime"><?php get_post_time('F j, Y'); ?></p>
                    الكونجرس يصادق على قانون جديد
                </a>
                <a href="#" class="breaking-news">
                    <p class="bntime"><?php the_time('F j, Y'); ?></p>عاصفة جديدة تقترب من الشواطئ الأمريكية
                </a>
                <a href="#" class="breaking-news">
                    <p class="bntime"><?php the_time('F j, Y'); ?></p>اليابان تطلق قمر صناعي جديد إلى المريخ
                </a>
            </marquee>
        </div>

    </header>