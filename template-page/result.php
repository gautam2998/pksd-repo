<?php
/* Template Name: Result Template */ 
?>
<?php get_header(); ?>
<div id="wrapper">
<div class="container">
	<div class="content">
		<div class="row">
			<div class="col-md-8">
			     <div class="center-content">
				 <h1><?php the_field('result_h1_title');?></h1>
				 <div class="breadcrumbs"><?php custom_breadcrumbs(); ?></div>
				 <div class="scrapecontent">
			     <p><img class="img-polaroid" src="<?php the_field('result_image');?>" alt="case results from pksd" /><?php the_field('result_deacription');?></p>
					<hr />
					<div class="row">
					<?php
					$field=get_field('result_amout_inforamtion_repeater');
						if( have_rows('result_amout_inforamtion_repeater') ):
						while( have_rows('result_amout_inforamtion_repeater') ) : the_row();
					?>
					<div class="col-md-4">
						<ul class="results-table blue">
							<li class="title"><?php the_sub_field('result_title');?></li>
							<li class="price"><?php the_sub_field('result_amount');?></li>
							<li class="description"><?php the_sub_field('result_description');?></li>
						</ul>
					</div>
					<?php	
						endwhile; 
                    	endif 
                    ?>
					
					</div>
			     </div>
			   </div>
			</div>
    		<aside class="col-md-4 sidebar" id="sidebar">
    		    <div id="contact-form" class="">
    		    	<?php
    		    		if(is_active_sidebar('result-sidebar')){
                            dynamic_sidebar('result-sidebar');
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
			<div class="col-md-12" id="back-top"><a href="results.html#top"><img src="<?php the_field('back_top_image', 'option'); ?>" alt="Back to top" class="img-responsive" /></a></div>
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