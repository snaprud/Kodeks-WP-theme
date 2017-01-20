<?php
/**
 * Template Name: Full Width
 *
 * @package Kodeks
 */

get_header(); ?>
    
<div id="content" class="site-content fullWidth">

	<div id="primary" class="content-area">
		<main id="main" class="site-main small-11 medium-8 large-6 columns small-centered" role="main">
            
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

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
            
                

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
		
		<?php include('template-parts/cta.php') ?>
            
	</div><!-- #primary -->

<?php
get_footer();
