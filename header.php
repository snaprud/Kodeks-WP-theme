<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kodeks
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php wp_head(); ?>


        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/theme-css/foundation.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/theme-css/flexslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/theme-css/theme-css.css" type="text/css" media="screen" />

    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kodeks' ); ?></a>

            <header id="masthead" class="site-header" role="banner">

                <div class="small-11 large-12 row">

                    <div class="site-branding small-5 medium-3 columns">
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo.png">
                        </a>
                    </div><!-- .site-branding -->


                    <nav id="site-navigation" class="main-navigation small-7 medium-9 columns" role="navigation">

<!--
                        <div class="searchWrapper">

                            <div class="search">
                                <?php get_search_form(); ?>
                            </div>

                        </div> SØK 
-->


                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kodeks' ); ?></button>
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

                    </nav><!-- #site-navigation -->



                </div>

            </header><!-- #masthead -->

