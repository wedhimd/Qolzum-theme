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
            <a href="<?php echo esc_url(site_url() )?>"><h1>القلزم للأخبار</h1></a>
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
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid header__links hide-for-mobile">
                <?php if (function_exists('the_custom_logo')) { the_custom_logo(); } ?>
                <a class="navbar-brand"  href="<?php echo esc_url(site_url() )?>"><img src="<?php echo get_theme_file_uri("/assets/images/logo.svg")?>" alt="الشعار"></a>
                    <a href="#" id="btnHamburger" data-bs-target="#navbarNavDropdown" data-bs-toggle="collapse" class="navbar-toggler header__toggle hide-for-desktop">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo esc_url(site_url()) ?>">الرئيسية</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="<?php echo esc_url(site_url("/politics")) ?>">الأخبار </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo esc_url(site_url("/politics/local")) ?>">الأخبار المحلية</a></li>
                            <li><a class="dropdown-item" href="<?php echo esc_url(site_url("/politics/world")) ?>">الأخبار العالمية</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url(site_url("/economy")) ?>">الإقتصاد</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url(site_url("/sports")) ?>">الرياضة</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url(site_url("/science")) ?>">العلوم والتكنلوجيا</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url(site_url("/culture")) ?>">الثقافة والفنون</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url(site_url("/miscellaneous")) ?>">المنوعات </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url(site_url("/opinions")) ?>">الآراء </a>
                        </li>
                        <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                    </ul>
                    </div>
                </div>
            </nav>
        </section>

    </header>