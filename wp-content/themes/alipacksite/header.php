<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo( 'name' ); ?></title>
        <?php wp_head() ?>
        <link rel="stylesheet" href="/alipacksite/wp-content/themes/alipacksite/style.css">
    </head>

<body <?php body_class(); ?>>
    <div class="container"> <!-- This class is for the entire body content -->
        <header class="site-header">
            <div class="header-icon">
                <a href="<?php echo home_url(); ?>"><img src="<?php site_icon_url(); ?>" alt="Logotype"></a>
            </div>
            <div class="header-title">
                <img src="/alipacksite/wp-content/uploads/2026/02/alipackiconheader.png" alt="Logotype">
            </div>
            <div class="header-navigation">
                <?php wp_nav_menu(['theme_location' => 'primary', 'container' => 'nav']); ?>
            </div>
        </header>