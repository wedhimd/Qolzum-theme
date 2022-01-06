<!doctype html>
<html <?php language_attributes() ?>>

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
                <i class="fa fa-search search-trigger js-search-trigger" aria-hidden="true"></i>
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
                                <a class="nav-link" href="<?php echo esc_url(home_url("/الأخبار")) ?>">الأخبار</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/السياسة")) ?>">السياسة</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="<?php echo esc_url(home_url("/القرن-الإفريقي")) ?>">القرن الإفريقي </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="<?php echo esc_url(home_url("/القرن_الإفريقي/الصومال")) ?>"> الصومال </a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(home_url("/القرن_الإفريقي/إثيوبيا")) ?>">إثيوبيا</a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(home_url("/القرن_الإفريقي/إرتريا")) ?>"> إرتريا </a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(home_url("/القرن_الإفريقي/السودان")) ?>">السودان</a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(home_url("/القرن_الإفريقي/جيبوتي")) ?>"> جيبوتي </a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(home_url("/القرن_الإفريقي/جنوب_السودان")) ?>">جنوب-السودان</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/الاقتصاد")) ?>">الإقتصاد</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/الرياضة")) ?>">الرياضة</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/العلوم_و_التكنولوجيا")) ?>">العلوم والتكنلوجيا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/الثقافة_و_الفنون")) ?>">الثقافة والفنون</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/المنوعات")) ?>">المنوعات </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/المقالات_و_الآراء")) ?>"> المقالات والآراء </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>

    </header>