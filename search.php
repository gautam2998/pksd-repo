<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package PKSD
 */

get_header();
global $wp_query;
?>
	<div class="wrapper">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-md-8">
						<div class="center-content">
							<h1 class="page-title">
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results', 'pksd' ));
								?>
							</h1>
							<div class="breadcrumbs"><?php custom_breadcrumbs(); ?></div>
							<style>
								.search-bar{margin:20px 0}
								.btn-gm-search{background: rgba(44, 80, 115, 0.7);border-radius: 0;color: #fff;}    
							</style>
							<div class="col-md-12 search-bar">
								<form role="search" id="searchform" class="searchform" action="<?php echo home_url(); ?>" method="get">
								    <div class="input-group">
									    <input type="text" id="search" value="" class="form-control" placeholder="Search Our Site" name="s" id="s">
									    <div class="input-group-btn">
									        <div class="btn-group" role="group">
									            <button type="submit" class="btn btn-gm-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>  
									        </div>
									    </div>
								    </div>
								</form>
							</div>
							<div class="col-md-12">
								<?php if ( have_posts() ) : ?>
									<p class="sisea-results"><?php echo $wp_query->found_posts; ?> Results found for "<strong class="sisea-highlight"><?php echo get_search_query(); ?></strong>"</p>
									<div class="sisea-box">
										<?php
										/* Start the Loop */
										while ( have_posts() ) :
											the_post();
											/**
										 	* Run the loop for the search to output the results.
										 	* If you want to overload this in a child theme then include a file
										 	* called content-search.php and that will be used instead.
										 	*/
											get_template_part( 'template-parts/content', 'search' );

										endwhile; 
										if (function_exists("pagination")) {
								    		pagination();
										}
									?>
									</div>
								<?php
									else :

										get_template_part( 'template-parts/content', 'none' );

									endif; ?>
							</div>
						</div>
					</div>
					<aside id="sidebar" class="col-md-4 sidebar">
						<div id="contact-form" class="">
                        <?php
                            if(is_active_sidebar('search-sidebar')){
                                dynamic_sidebar('search-sidebar');
                            }
                        ?>
                    	</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();
