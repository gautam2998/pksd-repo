<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PKSD
 */

?>

<div id="wrapper post-<?php the_ID(); ?>" <?php post_class(); ?>>

         <div class="container">
            <div class="content">
               <div class="row">
                  <div class="col-md-8">
                     <div class="center-content">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        <div class='breadcrumbs'><?php //custom_breadcrumbs(); ?>
                           <ul id="breadcrumbs" class="breadcrumbs list-inline">
                              <li class="item-home">
                                 <a class="bread-link bread-home" href="<?php echo home_url(); ?>" title="Home">Home</a>
                              </li>
                              <li class="item-page">
                                 <a class="bread-link bread-page" href="<?php echo home_url('blog'); ?>" title="Blog">Blog</a>
                              </li>
                              <li class="item-current item-archive">
                                 <span class="bread-current bread-page" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></span>
                              </li>
                           </ul>
                        </div>

                        <p class="blog-date">Posted by PKSD Law Firm on <em><?php the_date();?></em> in <?php
                           $category_detail=get_the_category();//$post->ID
                           foreach($category_detail as $cd){
                           $category_link  = get_category_link( $cd->cat_ID ); ?>
                              <a href="<?php echo esc_url( $category_link ); ?>"><?php echo $cd->cat_name;?></a>
                         <?php  }
                           ?></p>
                        <div id="blogContent">
                        	<?php the_content();?>  
                        </div>
                     </div>
                  </div>
                  <aside class="col-md-4 sidebar" id="sidebar">
                     <div id="contact-form" class="">
                        <?php

                           $sidebar_options = get_field('sidebar_options');

                           if (empty($sidebar_options)) {
                              $sidebar=get_field('select_sidebar_template');
                              switch($sidebar){
                                 case 'post-sidebar-template-2':
                                    if(is_active_sidebar('post-sidebar-template-2')){
                                       dynamic_sidebar('post-sidebar-template-2');
                                    }
                                    break;
                                 case 'post-sidebar-template-3':
                                    if(is_active_sidebar('post-sidebar-template-3')){
                                       dynamic_sidebar('post-sidebar-template-3');
                                    }
                                    break;
                                 default:
                                    if(is_active_sidebar('post-sidebar')){
                                       dynamic_sidebar('post-sidebar');
                                    }
                                    break;
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
<?php// endwhile;?>
      <div class="btt">
         <div class="container">
            <div class="row">
               <div class="col-md-12" id="back-top"><a href="blog/questions-asked-in-free-legal-consultations.html#top"><img src="<?php the_field('back_top_image', 'option'); ?>" alt="Back to top" class="img-responsive" /></a></div>
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