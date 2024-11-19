<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PKSD
 */

?>

<section class="no-results not-found">

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :
			?>
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'pksd' ); ?></h1>
			</header><!-- .page-header -->
			<?php
			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'pksd' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, we couldn\'t find any results matching "'.get_search_query().'"', 'pksd' ); ?></p>
			<?php
		else :
			?>
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'pksd' ); ?></h1>
			</header><!-- .page-header -->
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'pksd' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
