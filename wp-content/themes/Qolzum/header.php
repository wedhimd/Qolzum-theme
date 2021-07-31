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
        <section class="header">
        <div class="overlay has-fade"></div>
        <nav class="my-container my-container--pall flex flex-jc-sb flex-ai-c">
          <a href="/" class="header__logo"><img src="<?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } ?>" alt="logo"></a>
          <a href="#" id="btnHamburger" class="header__toggle hide-for-desktop">
            <span></span>
            <span></span>
            <span></span>
          </a>
          <div class="header__links hide-for-mobile">
            <a href="#">الرئيسية</a>
            <a href="#">الأخبار العالمية</a>
            <a href="#">الأخبار المحلية</a>
            <a href="#">أخبار الرياضة</a>
            <a href="#">التكنلوجيا</a>
          </div>
        </nav>
    
        <div class="header__menu has-fade">
            <a href="#">الرئيسية</a>
            <a href="#">الأخبار العالمية</a>
            <a href="#">الأخبار المحلية</a>
            <a href="#">أخبار الرياضة</a>
            <a href="#">التكنلوجيا</a>
        </div>
        <div class="breaking-news-section">
                <span id="btext">اﻷخبار العاجلة</span>
            <marquee direction="right" onmouseover="this.stop()" onmouseout="this.start()">
                <a href="#" class="breaking-news">
                    <p class="bntime">time</p>
                محمد علي يسلم على علي ويقول كل سنة ، وأنت طيب
                </a>
                <a href="#" class="breaking-news">
                    <p class="bntime">time</p>محمد علي يسلم على علي ويقول له ما في أي حاجة إضافة ، تعليق إقتراح
                </a>
                <a href="#" class="breaking-news">
                    <p class="bntime">time</p>اليابان تطلق قمر صناعي جديد إلى المريخ
                </a>
            </marquee>
        </div>
        </section>

    </header>