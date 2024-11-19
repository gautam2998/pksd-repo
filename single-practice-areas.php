<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PKSD
 */

get_header();
?>

<?php
    while (have_posts()) :
    the_post();
?>
<div id="wrapper post-<?php the_ID(); ?>" <?php post_class();?>>
   <div class="container">
      <div class="content">
         <div class="row">
            <div class="col-md-8">
            	<div class="center-content">
                  <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                  <?php $basename= basename(get_permalink()); ?>
                  <a href="<?php echo home_url('reviews'); ?>" id="creview-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/includes/images/five-stars.png" class="loading" data-was-processed="true"> - Client Reviews</a>
                  <div class="breadcrumbs"><?php //custom_breadcrumbs(); 
                  my_menu_breadcrumb('menu-1');?></div>
                  <div class="scrapecontent">
                  <?php
                      $slider_or_image=get_field('slider_or_image');
                      $image = get_field('banner_image');
                      if ($slider_or_image=="image" && $image) {
                          ?>
                        <img class="img-polaroid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php
                      } elseif ($slider_or_image=="slider") {
                          $count = 1;
                          if (have_rows('practice_area_slider')) { ?>
                          <div id="mainCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                              <?php
                              while (have_rows('practice_area_slider')) {
                                  the_row();
                                  if ($count == '1') {?>
                                  <div class="item active">
                                    <a href="<?php the_sub_field('slider_link'); ?>" title="">
                                       <picture>
                                          <?php $image = get_sub_field('slider_image'); ?>
                                          <img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                       </picture>
                                    </a>
                                    <?php if (get_sub_field('slider_title') || get_sub_field('slider_description')) { ?>
                                      <div class="carousel-caption">
                                         <p><strong><?php the_sub_field('slider_title'); ?></strong></p>
                                         <p><?php the_sub_field('slider_description'); ?></p>
                                      </div>
                                  <?php } ?>
                                  </div>
                                <?php } else { ?>
                                <div class="item ">
                                  <a href="<?php the_sub_field('slider_link'); ?>" title="">
                                     <picture>
                                        <?php $image = get_sub_field('slider_image'); ?>
                                          <img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                     </picture>
                                  </a>
                                  <div class="carousel-caption">
                                     <p><strong><?php the_sub_field('slider_title'); ?></strong></p>
                                     <p><?php the_sub_field('slider_description'); ?></p>
                                  </div>
                                </div>
                                 <?php }
                                  $count++;
                              } ?>
                            </div>
                            <a class="left carousel-control" href="#mainCarousel" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#mainCarousel" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                            </div>
                          <?php
                        }
                      }
                   ?>
                    <?php the_content(); ?>
                  </div>
               </div>

            </div>
            <aside class="col-md-4 sidebar" id="sidebar">
               <div id="contact-form" class="">
                <?php
                 require get_template_directory() . '/partials/sidebar/case-review-form.php';
                 require get_template_directory() . '/partials/sidebar/sidebar-builder.php';
                ?>
               </div>
            </aside>
         </div>
      </div>
   </div>
</div>
<?php endwhile;?>
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
