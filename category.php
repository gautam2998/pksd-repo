<?php
/**
 * The template for displaying category
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
						<h1><?php single_cat_title(); ?></h1>
						<div class="breadcrumbs">
							<ul id="breadcrumbs" class="breadcrumbs list-inline">
								<li class="item-home"><a class="bread-link bread-home" href="<?php echo get_site_url(); ?>" title="Home">Home</a></li>
								<li class="item-blog-page"><a class="bread-link" href="<?php echo home_url('blog'); ?>" title="Blog">Blog</a></li>
								<li class="item-current"><span class="bread-current" title="<?php single_cat_title(); ?>"><?php single_cat_title(); ?></span></li>
							</ul>
						</div>
                        <div id="blogContent">
                        	<p><img alt="blog PKSD" title="blog PKSD" class="img-polaroid" src="<?php the_field('category_banner_image','options');?>"></p>
                        	<?php
                        	$category = get_queried_object();
							$current_cat_id=$category->term_id;
                    			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
								$args = array(
			                     	'nopaging'               => false,
								    'paged'                  => $paged,
								    'posts_per_page'         => '10',
								    'post_type'              => 'post',
								    'cat'					 => $current_cat_id,
			                    );
								$query = new WP_Query( $args );	 
									 while ( $query->have_posts() ) : $query->the_post();
							?>
                        	<div class="blog-list">
	                           	<h3><a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a></h3>
	                           	<p class="meta-data">Posted by PKSD Law Firm on <em><?php the_date();?></em> in
	                           
	                           <?php
		                           	$category_detail=get_the_category();//$post->ID
		                           	foreach($category_detail as $cd){
		                           	$category_link  = get_category_link( $cd->cat_ID ); ?>
		                           		<a href="<?php echo $category_link; ?>"><?php echo $cd->cat_name;?></a></p>
	                       		<?php  } ?>
	                           <?php the_excerpt(''); ?><a href="<?php the_permalink(); ?>">Read More</a>
	                           	<div class="hr"><hr></div>
	                        </div>
	                   
	                        <?php 
		                    	endwhile; 
		                        wp_reset_postdata();
	                        ?>
	                        <nav>
	                          	<?php if (function_exists("pagination")) {
								    pagination($query->max_num_pages);
								} ?>
	                        </nav>
	                    </div>
					</div>
				</div>
				<aside class="col-md-4 sidebar" id="sidebar">
                     <div id="contact-form" class="">
                        <?php
                        	$sidebar_options = !is_archive() ? get_field('sidebar_options') : null;
                        	if (empty($sidebar_options)) {
					            switch (get_post_type()) {
					                case 'post':
					                    $sidebar_options = is_archive() ? get_field('sidebar_blog_category_pages_sidebar_options', 'option') : get_field('sidebar_blog_pages_sidebar_options', 'option');
					                    break;

					                case 'practice-areas':
					                    $sidebar_options = get_field('sidebar_practice_areas_sidebar_options', 'option');
					                    break;

					                case 'attorneys':
					                    $sidebar_options = get_field('attorney_pages_sidebar_options', 'option');
					                    break;
					            }
					        }
                          	if (empty($sidebar_options)) {
	                            if(is_active_sidebar('blog-category-sidebar')){
	                                dynamic_sidebar('blog-category-sidebar');
	                            }
	                        } else {
	                        	require get_template_directory() . '/partials/sidebar/case-review-form.php';
                            	require get_template_directory() . '/partials/sidebar/sidebar-builder.php';
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
