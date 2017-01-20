<?php

$fields = acf_get_fields('121');

if ( $fields )

{   
    echo '<div class="cta">';

    echo '<a class="row small-11 medium-8 large-6" href="';
    echo get_field_object('link')['value'];
    echo '">';

    if ( get_field('tittel') ){
        echo '<h3>';
        the_field('tittel'); 
        echo '</h3>';
    }
    
    if ( get_field('link_text') ){
        echo '<span>';
        the_field('link_text'); 
        echo '</span>';
    } else {
        echo '<span>';
        echo 'Les mer';
        echo '</span>';
    }

    echo '</a>';
    echo '</div>';
}
?>