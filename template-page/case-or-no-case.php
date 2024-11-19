<?php
/* Template Name: Case or No case Template */ 
?>
<?php get_header(); ?>
<div id="wrapper">
<div class="container">
	<div class="content">
		<div class="row">
			<div class="col-md-8">
			     <div class="center-content">
    				 <div class="scrapecontent">
                        <div class="video-player">
                            <video width="100%" height="100%" controls="controls" controlslist="nodownload" poster="<?php the_field('case_no_case_video_cover_image'); ?>">
                                <source src="<?php the_field('case_no_case_video_url'); ?>" type="video/mp4" />
                                <object width="100%" height="100%" data="assets/components/tinymce/jscripts/tiny_mce/plugins/media/moxieplayer.swf" type="application/x-shockwave-flash">
                                    <param name="src" value="assets/components/tinymce/jscripts/tiny_mce/plugins/media/moxieplayer.swf" />
                                    <param name="flashvars" value="url=/assets/video/case-nocase/PKSD-Feb-1-min-A-2020.mp4&amp;poster=/assets/images/case-nocase/may_2017.JPG" />
                                    <param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="true" />
                                </object> Your browser does not support the video tag. 
                            </video>
                        </div>
                        <h1><?php the_field('h1_title'); ?></h1>
                        <div class="signs"><img src="<?php the_field('case_no_case_video_bottom_image'); ?>" alt="case no case" /></div>
                        <?php the_field('case_page_description'); ?>
                        <h2><?php the_field('quiz_title'); ?></h2>
                        <?php the_field('quiz_description'); ?>
                        <?php the_field('quiz_image_and_content'); ?>
                        <hr>
                        <h2><?php the_field('recent_broadcast_title'); ?></h2>
                        <div class="row">
                            <div class="col-sm-12 video-slider-container">
                                <div class="video-slider">
                                    <?php 
                                    $counter = 1;
                                    if( have_rows('recent_broadcast_repeater') ):
                                    while( have_rows('recent_broadcast_repeater') ) : the_row();

                                        $iframe = get_sub_field('recent_video_link');
                                        preg_match('/src="(.+?)"/', $iframe, $matches);
                                        $src = $matches[1];
                                ?>
                                    <div class="video-item">
                                        <a id="video_<?php echo $counter; ?>" class="thumbnail" data-type="iframe" href="<?php echo $src; ?>" data-options="width:848, height:480"><img src="<?php the_sub_field('video_cover_image');?>" alt="video" /></a>
                                        <?php the_sub_field('video_short_description');?>
                                        <script type="text/javascript">
                                            jQuery(document).ready(function($){
                                                $('#video_<?php echo $counter; ?>').iLightBox({
                                                    skin: 'dark',
                                                    fullViewPort: 'fill',
                                                    social: {
                                                        facebook: true,
                                                        twitter: true,
                                                        googleplus: true
                                                        }
                                                });
                                            });
                                        </script>
                                    </div>
                                    <?php
                                        $counter ++;
                                        endwhile;   
                                        endif 
                                    ?>
                                </div>
                            </div>
                        </div>
                       
			     </div>
             </div>
         </div>
    		<aside class="col-md-4 sidebar" id="sidebar">
    	       <div id="contact-form" class="">
                    <?php
                        if(is_active_sidebar('case-no-case-sidebar')){
                            dynamic_sidebar('case-no-case-sidebar');
                        }
                    ?>
                </div>
            </aside>
        </div>
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
<script type="text/javascript">
    jQuery(document).ready(function($){
      $('.video-slider, .video-slider-2').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerPadding: '60px',
        arrows: true,
        
        responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 479,
              settings: {
                slidesToShow: 1,
              }
            },
        ],
        
      });
      $('#slickQuiz').slickQuiz();
    });
</script>