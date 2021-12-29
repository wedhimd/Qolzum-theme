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
            <div class="flex">
                <a href="<?php echo esc_url(home_url()) ?>"><img src="<?php echo get_theme_file_uri("/assets/images/logo.svg") ?>" alt="الشعار"></a>
                <?php if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } ?>
            </div>
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
                                <a class="nav-link" href="<?php echo esc_url(home_url("/news")) ?>">الأخبار</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="<?php echo esc_url(home_url("/politics")) ?>">السياسة </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="<?php echo esc_url(home_url("/politics/local")) ?>"> القرن الإفريقي</a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(home_url("/politics/world")) ?>">العالمية</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/economy")) ?>">الإقتصاد</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/sports")) ?>">الرياضة</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/science")) ?>">العلوم والتكنلوجيا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/culture")) ?>">الثقافة والفنون</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/miscellaneous")) ?>">المنوعات </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url(home_url("/opinions")) ?>">الآراء </a>
                            </li>
                            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>

    </header>