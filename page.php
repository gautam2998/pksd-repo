<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
						<h1><?php the_field('h1_title'); ?></h1>
						<div class="breadcrumbs">
							<ul vocab="http://schema.org/" typeof="BreadcrumbList" id="breadcrumb" itemprop="breadcrumb" class="list-inline">
								<li property="itemListElement" typeof="ListItem">
									<a property="item" typeof="WebPage" href="<?php echo get_home_url(); ?>">
										<span property="name">Home</span>
									</a>
								</li>
								<li property="itemListElement" typeof="ListItem">
									<span property="name"><?php the_title(); ?></span>
								</li>
							</ul>
						</div>
						<div class="scrapecontent">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<aside class="col-md-4 sidebar" id="sidebar">
                     <div id="contact-form" class="">
                        <?php
                           $sidebar=get_field('select_sidebar_template');
                           switch($sidebar){
                              case 'page-sidebar-template-2':
                                 if(is_active_sidebar('page-sidebar-template-2')){
                                    dynamic_sidebar('page-sidebar-template-2');
                                 }
                                 break;
                              case 'page-sidebar-template-3':
                                 if(is_active_sidebar('page-sidebar-template-3')){
                                    dynamic_sidebar('page-sidebar-template-3');
                                 }
                                 break;
                                  case 'page-sidebar-template-4':
                                 if(is_active_sidebar('page-sidebar-template-4')){
                                    dynamic_sidebar('page-sidebar-template-4');
                                 }
                                 break;
                              default:
                                 if(is_active_sidebar('page-sidebar')){
                                    dynamic_sidebar('page-sidebar');
                                 }
                                 break;
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
