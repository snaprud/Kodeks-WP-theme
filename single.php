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
    
    <?php 

            $images = get_field('heroimage');

            if( $images ): ?>
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <p><?php echo $image['caption']; ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

	<div id="primary" class="content-area small-12 medium-8 columns">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			/*
            // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
            */

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php
        get_sidebar(); 
    ?>
	
	<div class="comments small-12">
	    <?php 
        
            // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
        
        ?>
	    
	</div>

<?php
get_sidebar();
get_footer();
