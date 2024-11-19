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

                  <div class="breadcrumbs"><?php custom_breadcrumbs(); ?></div>

                  <?php
                      $staff_type_array='';
                      $staff_type =  get_the_terms(get_the_ID(), 'staff-type');
                      if ($staff_type) {
                          foreach ($staff_type as $type) {
                              $staff_type_array.= $type->name.' ';
                          }
                      }
                  ?>
                  <h2><?php //pksd_post_thumbnail();?>
                  <?php the_post_thumbnail('full', ['class' => 'left loading first']); ?>
                  <?php echo $staff_type_array; ?></h2>
                  <?php the_content();?>


               </div>

            </div>
            <aside class="col-md-4 sidebar" id="sidebar">
               <div id="contact-form" class="">
                <?php
                        require get_template_directory() . '/partials/sidebar/case-review-form.php';
                        require get_template_directory() . '/partials/sidebar/sidebar-builder.php';
                ?>
               </div>
               <!-- end: Contact Form -->
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
