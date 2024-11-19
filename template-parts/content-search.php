<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PKSD
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blog-box'); ?>>
	<div class="article-box">
		<h3 class="search-results entry-title" title="<?php the_title_attribute(); ?>"><a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<p class="meta-data"><?php echo get_permalink(); ?></p>
		<div class="extract">
			<?php the_excerpt(); ?>
		</div>
	</div>
	
</div>
<hr>
