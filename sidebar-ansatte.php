<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kodeks
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside id="secondary" class="small-12 medium-4 columns widget-area" role="complementary">

    <ul>

        <?php $fields = acf_get_fields('98'); ?>

        <?php if( $fields )
            { 
                foreach( $fields as $field )
                {
                    $value = get_field( $field['name'] );

                    if ($value) {

                        echo '<li><a href="' . $value . '" target="_blank">' . $field['label'] . '</a></li>';
                    }
                } 

            } 
        ?>

    </ul>


</aside><!-- #secondary -->
