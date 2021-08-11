<!doctype html>
<html lang="ar" dir="rtl">

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
            <img src="<?php echo get_theme_file_uri("/assets/images/logo.svg")?>" alt="الشعار">
            <a href="<?php echo site_url() ?>"><h1>القلزم للأخبار</h1></a>
            <?php if (function_exists('the_custom_logo')) { the_custom_logo(); } ?> 
            <div class="social-icons">
                <a href="https://www.facebook.com/QolzumNews"><i class="fab fa-facebook-square"></i></a>
                <a href="https://twitter.com/QolzumNews"><i class="fab fa-twitter"></i></a>
                <i class="fab fa-instagram"></i>
                <i class="fas fa-rss"></i>
            </div>
        </div>
        <section class="header">
        <div class="overlay has-fade"></div>
        <nav class="my-container my-container--pall flex flex-jc-sb flex-ai-c">
        <?php if (function_exists('the_custom_logo')) { the_custom_logo(); } ?> 
        <a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri("/assets/images/logo.svg")?>" alt="الشعار"></a>
          <a href="#" id="btnHamburger" class="header__toggle hide-for-desktop">
            <span></span>
            <span></span>
            <span></span>
          </a>

          <div class="header__links hide-for-mobile">
              <ul class="flex">
                  <li><a href="<?php echo site_url() ?>">الرئيسية</a></li>
                  <li><a href="#">الأخبار العالمية</a></li>
                  <li><a href="#">الأخبار المحلية</a></li>
                  <li><a href="#">الإقتصاد</a></li>
                  <li><a href="#">الرياضة</a></li>
                  <li><a href="#">العلوم والتكنلوجيا</a></li>
                  <li><a href="#">الثقافة والفنون</a></li>
                  <li><a href="#">المنوعات </a></li>
              </ul>
          </div>
        </nav>
    
        <div class="header__menu has-fade">
            <ul>
                <li><a href="<?php echo site_url() ?>">الرئيسية</a></li>
                <li><a href="#">الأخبار العالمية</a></li>
                <li><a href="#">الأخبار المحلية</a></li>
                <li><a href="#">الإقتصاد</a></li>
                <li><a href="#">الرياضة</a></li>
                <li><a href="#">العلوم والتكنلوجيا</a></li>
                <li><a href="#">الثقافة والفنون</a></li>
                <li><a href="#">المنوعات </a></li>
            </ul>
        </div>
        </section>

    </header>