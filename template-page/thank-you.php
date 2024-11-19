<?php
/**
 * Template Name: Thankyou Template 
 */

get_header();
?>
<div id="wrapper">
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-md-12">
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
