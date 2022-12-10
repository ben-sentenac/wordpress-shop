<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until </header> closing tag
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage shop2022
 * @since shop2022 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class();?>>
        <!-- BEGIN SITE -->
        <div id="page" class="site">
            <header>
                <section class="search">Search</section>
                <section class="top-bar">
                    <div class="brand">Logo</div>
                    <div class="navbar">
                        <div class="account">Account</div>
                        <nav class="main-menu">Menu</nav>
                    </div>
                </section>
            </header>