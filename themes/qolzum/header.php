<!doctype html>
<html lang="ar" dir="rtl" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="One stop for all the Horn of Africa news">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri("/assets/images/logo.svg") ?>" type="image/x-icon"> 
    <?php wp_head(); ?>

</head>

<body <?php body_class() ?>>
    <?php if (!function_exists('wp_body_open')) {
        function wp_body_open()
        {
            do_action('wp_body_open');
        }
    } ?>

    <header>
        <div class="website-header">
            
            <div>
                <a href="<?php echo esc_url(home_url()) ?>">
                    <h1>القلزم للأخبار</h1>
                </a>
            </div>

            <div class="social-icons">
                <a href="#"><img class="search-trigger js-search-trigger" src="<?php echo get_theme_file_uri("/assets/images/search.svg") ?>"></a>
                <a href="https://www.facebook.com/QolzumNews"><img src="<?php echo get_theme_file_uri("/assets/images/facebook.svg") ?>"></a>
                <a href="https://twitter.com/QolzumNews"><img src="<?php echo get_theme_file_uri("/assets/images/twitter.svg") ?>"></a>
                <a href="#"><img src="<?php echo get_theme_file_uri("/assets/images/instagram.svg") ?>"></a>
                <a href="#"><img src="<?php echo get_theme_file_uri("/assets/images/rss.svg") ?>"></a>
            </div>
        </div>
        <section class="header">
            <div class="overlay has-fade"></div>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid header__links hide-for-mobile">
                    <?php if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    } ?>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url()) ?>"><img class="navbar-logo" src="<?php echo get_theme_file_uri("/assets/images/logo.svg") ?>" alt="الشعار"></a>
                    <a href="#" id="btnHamburger" data-bs-target="#navbarNavDropdown" data-bs-toggle="collapse" class="navbar-toggler header__toggle hide-for-desktop">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?php echo esc_url(home_url()) ?>">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/news")) ?>">أخبار</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/politics")) ?>">سياسة</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="<?php echo esc_url(home_url("/local")) ?>">القرن الإفريقي </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="<?php echo esc_url(home_url("/local/somalia")) ?>"> الصومال </a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(home_url("/local/ethiopia")) ?>">إثيوبيا</a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(home_url("/local/eritrea")) ?>"> إرتريا </a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(home_url("/local/sudan")) ?>">السودان</a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(home_url("/local/djibouti")) ?>"> جيبوتي </a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(home_url("/local/south-sudan")) ?>">جنوب-السودان</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/economy")) ?>">اقتصاد</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/sports")) ?>">رياضة</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/science")) ?>"> تكنولوجيا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/culture")) ?>">ثقافة </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/health")) ?>"> صحة</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/miscellaneous")) ?>">منوعات </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/press")) ?>"> صحافة</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/opinions")) ?>"> مقالات </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>

    </header>