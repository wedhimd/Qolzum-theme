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

    <header class="sticky-top">
        <?php
        wp_nav_menu(
            array(
                "theme_location" => "top-menu",
                "menu_class" => "navigation"
            )
        )
        ?>
    </header>