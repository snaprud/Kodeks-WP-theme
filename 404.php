<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Kodeks
 */

get_header(); ?>

	<div id="primary" class="content-area row pageNotFound">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( '404! Siden eksisterer ikke.', 'kodeks' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Kanskje du kan bruke vår søkefunksjon for å finne det du leter etter?', 'kodeks' ); ?></p>
                    
                    <div class="small-11 medium-8 large-6 columns small-centered">
					<?php
						get_search_form();
					?>
					</div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
