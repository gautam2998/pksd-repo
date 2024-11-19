<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package PKSD
 */

get_header();
?>
<div class="wrapper">
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-md-8">
					<div class="center-content">
						<h1 class="page-title">
							<?php
							printf( esc_html__( '404 - Page Not Found', 'pksd' ));
							?>
						</h1>
						<div class="breadcrumbs"><?php custom_breadcrumbs(); ?></div>
						<div class="scrapecontent">
							<p>
								<img class="img-polaroid" src="<?php the_field('image_404_page','options') ?>" alt="page not found" data-was-processed="true">
							</p>
							<style>
								.double ul{
									display: inline-block;
								}
								.double ul li{
								    width:50%;
								    float: left;
								    padding-right: 20px;
								}
								.list{
								    visibility:hidden;
								}
								.sign{
								    font-weight:bold;
								    float:right;
								      cursor: pointer;
								}
								.sitemap ul li {
								  margin-bottom: 5px;
								}
							</style>
							<div class="sitemap">
								<h2>Home</h2>
								<div class="double">
									<?php
						                wp_nav_menu(
						                    array(
						                        'theme_location' => 'menu-page-404',
						                        'container'       => false, 
						                    )
						                );
						            ?>
								</div>
								<h2>Our Attorneys</h2>
								<div class="double">
									<?php
									$args = array(
					                    'post_type' => 'attorneys',
					                    'post_status' => 'publish',
					                    'posts_per_page'   => -1,
					                    'order' => 'ASC'
					                    );
									$teams_loop = new WP_Query( $args );	 
									echo "<ul>";
									while ( $teams_loop->have_posts() ) : $teams_loop->the_post();
									?>
										<li><a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									<?php 
									endwhile;
									echo "</ul>";
									wp_reset_postdata();
									?>
								</div>
								<h2>Practice Areas</h2>
								<div class="double">
									<?php
									$args = array(
					                    'post_type' => 'practice-areas',
					                    'post_status' => 'publish',
					                    'posts_per_page'   => -1,
										'order' => 'DESC'
					                    );
									$practice_areas_loop = new WP_Query( $args );	 
									echo "<ul>";
									while ( $practice_areas_loop->have_posts() ) : $practice_areas_loop->the_post();
									?>
										<li><a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_field('short_title'); ?></a></li>
									<?php 
									endwhile;
									echo "</ul>";
									wp_reset_postdata();
									?>
								</div>
								<h2>Contact</h2>
								<div class="double">
								<ul style="display:inline-block;">

								</ul>
								</div>

								<?php
									$categories = get_categories( array(
									    'orderby' => 'name',
									    'parent'  => 0,
									    'hide_empty'      => true,
									) );
									 
									foreach ( $categories as $category ) {
									    echo '<h2 class="library">Blog: '.$category->name.'<span class="sign">+</span></h2>';
									    $args = array(
						                    'post_type' => 'post',
						                    'post_status' => 'publish',
						                    'posts_per_page'   => 20,
						                    'order' => 'ASC',
						                    'cat' => $category->term_id,
						                    );
									    $post_loop = new WP_Query( $args );	 
										echo '<div id="single">';
										echo '<ul style="display: none;">';
										while ( $post_loop->have_posts() ) : $post_loop->the_post();
										?>
											<li><a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										<?php 
										endwhile;
										echo '</ul>';
										echo '</div>';
										wp_reset_postdata();
									}
								?>
								
							</div>
						</div>
					</div>
				</div>
				<aside id="sidebar" class="col-md-4 sidebar">
					<div id="contact-form" class="">
	                <?php
	                    if(is_active_sidebar('404-sidebar')){
	                        dynamic_sidebar('404-sidebar');
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
                  while( have_rows('cerificate_repeater','option') ) : the_row();
                ?>
                <img src="<?php the_sub_field('certificate_image'); ?>" alt="Million Dollar Advocates" />
                <?php
                  endwhile; 
                  endif 
                ?>
            </div>
         </div>
      </div>
    </div>
<?php
get_footer();
