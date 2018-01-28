<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package panakeia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');
        wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="masthead" class="header">
    <div class="container container-default clearfix">
        <?php if (get_custom_logo()) : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-header" rel="home">
                <?php the_custom_logo(); ?>
            </a>
        <?php else : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-header" rel="home">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/panaceia-logo.png" alt="Panakeia"
                     class="logo-img">
            </a>
        <?php endif; ?>

        <?php wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container' => '',
            'menu_class' => 'nav-main'

        )) ?>
    </div>
</header>
<div class="content">
