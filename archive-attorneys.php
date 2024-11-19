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
<div id="wrapper">
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-md-8">
					<div class="center-content">
						<h1><?php the_field('h1_title_attorneys_page','options') ?></h1>
						 <div class="breadcrumbs">
						 	<ul id="breadcrumbs" class="breadcrumbs list-inline">
						 		<li class="item-home">
						 			<a class="bread-link bread-home" href="<?php echo home_url(); ?>" title="Home">Home</a>
						 		</li>
						 		<li class="item-current item-archive">
						 			<span class="bread-current bread-archive">Our Attorneys</span>
						 		</li>
						 	</ul>
						 </div>
						<div class="scrapecontent">
							<!-- <div class="row"> -->
								<?php
									$args = array(
				                    'post_type' => 'attorneys',
				                    'post_status' => 'publish',
				                    'order' => 'ASC'
				                    );
									$teams_loop = new WP_Query( $args );	 
										 while ( $teams_loop->have_posts() ) : $teams_loop->the_post();
								?>
									<div class="col-md-4 team-container">
										<a class="practice-overlay" title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('full'); ?>
											<div class="caption">
												<p><?php the_title(); ?></p>
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
                            if(is_active_sidebar('sidebar-attorneys')){
                                dynamic_sidebar('sidebar-attorneys');
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
