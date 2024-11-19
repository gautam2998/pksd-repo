<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PKSD
 */

get_header();
?>
<div id="wrapper test">
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-md-8">
					<div class="center-content">
						<h1><?php the_field('h1_title_practice_area_page' ,'option');?></h1>
						 <div class="breadcrumbs"><?php custom_breadcrumbs(); ?></div>
						<div class="scrapecontent">
							<!-- <div class="row"> -->
								<?php
									$args = array(
				                    'post_type' => 'practice-areas',
				                    'post_status' => 'publish',
				                    'order' => 'ASC',
				                    'posts_per_page' => -1
				                    );
									$practice_area_loop = new WP_Query( $args );	 
										 while ( $practice_area_loop->have_posts() ) : $practice_area_loop->the_post();
								?>
									<div class="col-md-4 team-container">
										<a class="practice-overlay" title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail(); ?>
											<div class="caption">
												<p><?php the_field('practice_area_title_listing_page'); ?></p>
											</div>
										</a>
									</div>
								<?php endwhile; ?>
							<!-- </div> -->
						</div>
					</div>
				</div>
				<aside class="col-md-4 sidebar" id="sidebar">
                     <div id="contact-form" class="">
                        <?php
                            if(is_active_sidebar('sidebar-practice-area')){
                                dynamic_sidebar('sidebar-practice-area');
                            }
                        ?>
                     </div>
               </aside>
			</div>
		</div>
	</div>
</div>
<div class="btt">
	<div class="container">
		<div class="row">
			<div class="col-md-12" id="back-top"><a href="#top"><img src="<?php the_field('back_top_image', 'option'); ?>" alt="Back to top" class="img-responsive" /></a></div>
		</div>
	</div>
</div>
<div class="bottom-logo-section hidden-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<?php 
					if( have_rows('cerificate_repeater','option') ):
					while( have_rows('cerificate_repeater','option') ) : the_row(); ?>

					<img src="<?php the_sub_field('certificate_image'); ?>" alt="Million Dollar Advocates" />
				<?php
					endwhile; 
					endif ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
