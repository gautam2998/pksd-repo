<?php
/**
 * Template Name: Archives post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
                        <h1><?php the_field('blog_page_title');?></h1>
                        <div class="breadcrumbs"><?php custom_breadcrumbs(); ?></div>
                        <p><img alt="" title="" class="img-polaroid" src="<?php the_field('blog_page_banner_image');?>"></p>
                        <div id="blogContent">
                        	<?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : '1';
                                $args = array(
                                     'nopaging'               => false,
                                    'paged'                  => $paged,
                                    'posts_per_page'         => '10',
                                    'post_type'              => 'post',
                                );
                                $query = new WP_Query($args);
                                     while ($query->have_posts()) : $query->the_post();
                            ?>
                        	<div class="blog-list">
	                           <h3><a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a></h3>
	                           <p class="meta-data">Posted by PKSD Law Firm on <em><?php the_date();?></em> in

	                           <?php
                                       $category_detail=get_the_category();//$post->ID
                                       foreach ($category_detail as $cd) {
                                           $category_link  = get_category_link($cd->cat_ID); ?>
		                           		<a href="<?php echo $category_link; ?>"><?php echo $cd->cat_name; ?></a></p>
	                       		<?php
                                       } ?>
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
                            if (is_active_sidebar('blog-page-sidebar')) {
                              dynamic_sidebar('blog-page-sidebar');
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
               <div class="col-md-12" id="back-top"><a href="blog/#top"><img src="<?php the_field('back_top_image', 'option'); ?>" alt="Back to top" class="img-responsive" /></a></div>
            </div>
         </div>
      </div>
      <div class="bottom-logo-section hidden-xs">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
				<?php
                    if (have_rows('cerificate_repeater', 'option')):
                    while (have_rows('cerificate_repeater', 'option')) : the_row(); ?>

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
