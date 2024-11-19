<?php
/* Template Name: Homepage Template */ 
?>
<?php get_header(); ?>
  <section id="covid" class="no-margin"><?php the_field('notice_title');?><a href="<?php the_field('notice_link');?>"> <?php the_field('notice_link_text');?></a></section>
      <!-- ================================== -->
      <div id="wrapper">
         <div class="container">
            <div class="content">
               <div class="row">
                  <div class="col-md-8">
                     <div id="mainCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <?php
                              $count = 1; 
                              if( have_rows('home_slider_repeater') ):
                              while( have_rows('home_slider_repeater') ) : the_row();
                                if($count == '1'){?>
                                  <div class="item active">
                                    <a href="<?php the_sub_field('slider_image_link');?>" title="">
                                       <picture>
                                         <!--  <source data-srcset="<?php //the_sub_field('slider_image');?>">
                                          <source data-srcset="<?php //the_sub_field('slider_image');?>"> -->
                                          <img src="<?php the_sub_field('slider_image');?>">
                                       </picture>
                                    </a>
                                    <div class="carousel-caption">
                                       <p><strong></strong></p>
                                    </div>
                                 </div>
                                <?php } else{
                                ?>
                                <div class="item ">
                              <a href="<?php the_sub_field('slider_image_link');?>" title="">
                                 <picture>
                                   <!--  <source data-srcset="<?php //the_sub_field('slider_image');?>">
                                    <source data-srcset="<?php //the_sub_field('slider_image');?>"> -->
                                    <img src="<?php the_sub_field('slider_image');?>">
                                 </picture>
                              </a>
                              <div class="carousel-caption">
                                 <p><strong></strong></p>
                              </div>
                           </div>
                             <?php }
                            ?>
                              
                           <?php
                           $count++;
                              endwhile; 
                              endif 
                              
                            ?>
                         
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
                     <div class="center-content">
                        <div class="row">
                           <div class="col-md-12"><a href="<?php the_field('single_image_link');?>"><img class="img-responsive" src="<?php the_field('single_image');?>"></a></div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <p class="h2"><?php the_field('right_title');?></p>
                              <p>
                                 <a title="Visit Our Nursing Home FAQ" href="nursing-home-abuse.html">
                                    <picture>
                                       <!-- <source data-srcset="assets/images/homepage/nursing-home.webp" type="image/webp" />
                                       <source data-srcset="assets/images/homepage/nursing-home.jpg" type="image/jpg" /> -->
                                       <img class="left noborder" src="<?php the_field('right_image');?>" alt="nursing home abuse" /> 
                                    </picture>
                                    <!--<img class="left noborder" src="assets/images/homepage/nursing-home.jpg" alt="nursing home abuse" /> --> 
                                 </a>
                                 <?php the_field('right_sub_title');?>
                              </p>
                              <?php the_field('right_description');?> <a class="pull-right read-more" title="Click For More" href="<?php the_field('right_link_url');?>"><?php the_field('right_link_title');?></a>
                           </div>
                           <div class="col-md-6">
                              <p class="h2"><?php the_field('left_title');?></p>
                              <div class="row" id="vehicule-acc">
                                <?php 
                                  if( have_rows('multiple_image_repeater') ):
                                  while( have_rows('multiple_image_repeater') ) : the_row();
                                ?>
                                 <div class="col-md-4">
                                    <a title="Auto Accident Claim Assistance" href="<?php the_sub_field('image_link');?>">
                                       <picture>
                                          <!-- <source data-srcset="assets/images/homepage/car.webp" type="image/webp" />
                                          <source data-srcset="assets/images/homepage/car.jpg" type="image/jpeg" /> -->
                                          <img src="<?php the_sub_field('image');?>" alt="car accidents" /> 
                                       </picture>
                                       <!--<img src="assets/images/homepage/car.jpg" alt="car accidents" />--> 
                                    </a>
                                 </div>
                                  <?php
                                    endwhile; 
                                    endif 
                                  ?>
                              </div>
                              <p></p>
                             <?php the_field('left_description');?><a class="pull-right read-more" title="Click For More" href="<?php the_field('left_image_link_url');?>"><?php the_field('left_image_link_title');?></a>
                           </div>
                        </div>
                        <p></p>
                        <div class="callout">
                           <div class="row">
                              <div class="col-md-5">
                                 <a href="javascript:StartNgageChat();">
                                    <picture>
                                       <!-- <source data-srcset="assets/images/click-to-chat.webp" type="image/webp" />
                                       <source data-srcset="assets/images/click-to-chat.png" type="image/png" />
 -->                                       <img src="<?php the_field('chat_image');?>" alt="click to chat" /> 
                                    </picture>
                                    <!--<img data-src="assets/images/click-to-chat.png" alt="click to chat" />--> 
                                 </a>
                              </div>
                              <div class="col-md-7">
                                 <p class="text-center"><?php the_field('chat_title');?></p>
                              </div>
                           </div>
                        </div>
                        <h1 class="headline"><?php the_field('home_single_title');?></h1>
                        <p>
                           <a title="Click To Contact Us Today" href="contact-us.html">
                              <picture>
                                <!--  <source data-srcset="assets/images/attorney-jeffrey-pitman-thumbnail-smaller.webp" type="image/webp" class="left" />
                                 <source data-srcset="assets/images/attorney-jeffrey-pitman-thumbnail-smaller.jpg" type="image/jpeg" class="left" /> -->
                                 <img src="<?php the_field('home_single_image');?>" alt="" class="left" /> 
                              </picture>
                              <!--<img class="left" data-src="assets/images/attorney-jeffrey-pitman-thumbnail-smaller.jpg" alt="Wisconsin accident lawyers" /></a></p>--> 
                           </a>
                        </p>
                        <?php the_field('home_single_description');?>
                        <p class="well text-center"><span> <?php the_field('contact_title');?></span> <a href="tel: <?php the_field('contact_phone_number');?>"> <?php the_field('contact_phone_number');?></a></p>
                     </div>
                  </div>
                  <aside class="col-md-4 sidebar" id="sidebar">
                     <div id="contact-form" class="">
                        <?php
                            if(is_active_sidebar('sidebar-1')){
                                dynamic_sidebar('sidebar-1');
                            }
                        ?>
                        
                     </div>
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
<?php get_footer(); ?>