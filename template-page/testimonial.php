<?php
/* Template Name: Testimonial Template */ 
?>
<?php get_header(); ?>

<section class="hero-testimonials" style="background-image:url('<?php the_field('testimonial_hero_section_banner_background_image'); ?>') ;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 col-lg-3 col-xl-3">
                <div class="reviews-hero-carousel-main-title">
                    <span class="h1"><?php the_field('testimonial_hero_section_title');?></span>
                    <div class="reviews-hero-carousel-score">
                        <p><?php the_field('testimonial_hero_section_rating');?> <img src="<?php the_field('testimonial_hero_section_rating_image');?>"></p>
                        <p><?php the_field('testimonial_hero_section_rating_text');?></p>
                    </div>
                    <p><?php the_field('testimonial_hero_section_rating_description');?></p>
                </div>
            </div>
            <div class="col-sm-7 col-lg-9 col-xl-9 p-relative">
                <div class="reviews-hero-carousel">
                   
                    <?php
                        $args = array(
                        'post_type' => 'reviews',
                        'post_status' => 'publish',
                        'order' => 'ASC'
                        );
                        $reviews_loop = new WP_Query( $args );
                        $counter = 1;
                        if ( $reviews_loop->have_posts() ) :
                        while ( $reviews_loop->have_posts() ) : $reviews_loop->the_post();
                        $title = get_the_title();
                        $imgurl = get_field('featured_image_for_review');

                    ?>
                    
                    <div class="carousel-cell">
                        <a href="" data-toggle="modal" data-target="#client-review-modal-<?php echo $counter;?>" class="card card-client-reviews">
                            <div class="card-head">
                                <img src="<?php echo $imgurl; ?>" alt="five stars icon">
                            </div>
                            <div class="card-body">
                                <?php the_content();?>
                            </div>
                            <div class="card-footer">
                                <span><?php echo $title;?></span>
                            </div>
                        </a>
                    </div>
                    
                     <?php
                        $counter++;
                        endwhile;
                        wp_reset_postdata();
                        endif;  
                    ?>
                </div>

                <div class="slider-arrows-reviews">
                    <button class="circle prev">
                        <img class="arrow-left" src="<?php the_field('testimonial_hero_section_slider_left_image');?>" alt="">
                    </button>
                    <button class="circle next">
                        <img class="arrow-right" src="<?php the_field('testimonial_hero_section_slider_right_image');?>" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="wrapper">
<div class="container">
	<div class="content">
		<div class="row">
			<div class="col-md-8">
			     <div class="center-content">
				 <h1><?php the_field('testimonial_h1_title');?></h1>
				 <div class="breadcrumbs"><?php custom_breadcrumbs(); ?></div>
				 <div class="scrapecontent">
			         <div class="row">
                        <div class="col-md-6">
                            <video width="100%" height="auto" controls="controls" controlslist="nodownload" poster="<?php the_field('testimonial_video_first_image');?>"><source src="<?php the_field('testimonial_video_first');?>" type="video/mp4" /><object width="100%" height="auto" data="assets/components/tinymce/jscripts/tiny_mce/plugins/media/moxieplayer.swf" type="application/x-shockwave-flash"><param name="src" value="assets/components/tinymce/jscripts/tiny_mce/plugins/media/moxieplayer.swf" /><param name="flashvars" value="url=/assets/video/testimonial/PKSD-Testimonial-Dawn.mp4&amp;poster=/assets/video/testimonial/dawn.JPG" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="true" /></object> </video>
                        </div>
                        <div class="col-md-6">
                            <video width="100%" height="auto" controls="controls" controlslist="nodownload" poster="<?php the_field('testimonial_video_second_image');?>"><source src="<?php the_field('testimonial_video_second');?>" type="video/mp4" /><object width="100%" height="auto" data="assets/components/tinymce/jscripts/tiny_mce/plugins/media/moxieplayer.swf" type="application/x-shockwave-flash"><param name="src" value="assets/components/tinymce/jscripts/tiny_mce/plugins/media/moxieplayer.swf" /><param name="flashvars" value="url=/assets/video/testimonial/PKSD-Testimonial-Linda.mp4&amp;poster=/assets/video/testimonial/linda.JPG" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="true" /></object> 
                            </video>
                        </div>
                    </div>
                    <p></p>
                    <p><a href="publishing-a-google-review.html"><button type="button" class="btn btn-primary btn-lg btn-block"><?php the_field('google_review_title');?></button></a></p>
                    <p><script type="text/javascript" src="<?php the_field('google_review_script');?>"></script><div id="bf-revz-widget-1358790575" style="-webkit-overflow-scrolling:touch;"><div class="bf-dv"><?php the_field('google_review_copyright');?></div></div></p>
                    <hr />
                    <p><img src="<?php the_field('testimonials_image');?>" alt="" /></p>
                    <p> </p>
			     </div>
			     
			 </div>
		</div>
		<aside class="col-md-4 sidebar" id="sidebar">
	       <div id="contact-form" class="">
                <?php
                    if(is_active_sidebar('testimonials-sidebar')){
                        dynamic_sidebar('testimonials-sidebar');
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
    			<div class="col-md-12" id="back-top"><a href="testimonials.html#top"><img src="<?php the_field('back_top_image', 'option'); ?>" alt="Back to top" class="img-responsive" /></a></div>
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
                     <!-- =============================================== -->
                                        <!-- CLIENT REVIEWS MODALS     -->
                    <!-- =============================================== -->
                     <?php
                        $args = array(
                        'post_type' => 'reviews',
                        'post_status' => 'publish',
                        'order' => 'ASC'
                        );
                        $reviews_loop = new WP_Query( $args );
                        $counter = 1;
                        if ( $reviews_loop->have_posts() ) :
                        while ( $reviews_loop->have_posts() ) : $reviews_loop->the_post();
                        $title = get_the_title();
                        $imgurl = get_field('featured_image_for_review');

                    ?>
                    <div class="modal modal-client-reviews fade" id="client-review-modal-<?php echo $counter;?>" tabindex="-<?php echo $counter;?>" role="dialog" aria-labelledby="clientReviews<?php $counter;?>" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content card-client-reviews">
                                    <div class="modal-header">
                                        <h3 class="mb-0" id="clientReviews<?php echo $counter;?>">Client Reviews</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card card-client-reviews">
                                            <div class="card-head">
                                                <img src="<?php echo $imgurl; ?>" alt="five stars icon">
                                            </div>
                                            <div class="card-body">
                                              <?php the_field('client_description_for_review_model');?>
                                            </div>
                                            <div class="card-footer">
                                                <span><?php $title; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                        <?php
                            $counter++;
                            endwhile;
                            wp_reset_postdata();
                            endif;  
                        ?>
<?php get_footer(); ?>
