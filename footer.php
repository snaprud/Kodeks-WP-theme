<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kodeks
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info row small-12">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'Kodeks' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'Kodeks' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'Kodeks' ), 'Kodeks', '<a href="http://wordpressblogg.no" rel="designer">WordPressblogg.no</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php bloginfo('template_url'); ?>/theme-js/vendor/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/theme-js/vendor/foundation.js"></script>
<script src="<?php bloginfo('template_url'); ?>/theme-js/vendor/what-input.js"></script>
<script src="<?php bloginfo('template_url'); ?>/theme-js/jquery.flexslider-min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/theme-js/app.js"></script>
  
   
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo get_custom('google_analytics_id'); ?>', 'auto');
  ga('send', 'pageview');

</script>
    
</body>
</html>
