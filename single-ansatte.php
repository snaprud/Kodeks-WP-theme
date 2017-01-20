<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Kodeks
 */

get_header(); ?>

<div id="content" class="site-content small-12 row">



    <div id="primary" class="content-area small-12 medium-8 columns">

        <div class="small-12 medium-6 columns">
            <?php 
            if ( has_post_thumbnail() ) : the_post_thumbnail();
            endif;
            ?>
        </div>



        <main id="main" class="site-main small-12 medium-6 columns" role="main">
           
            <?php $fields = acf_get_fields('93'); ?>

                <?php if( $fields )
                { 
                foreach( $fields as $field )
                {
                    $value = get_field( $field['name'] );

                    if ($value) {

                        echo '<dl>';
                        echo '<dt>' . $field['label'] . '</dt>';
                        echo '<dd>' . $value . '</dd>';
                        echo '</dl>';
                    }
                } 

                } 
                ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <?php
    include ('sidebar-ansatte.php');
    get_footer();
