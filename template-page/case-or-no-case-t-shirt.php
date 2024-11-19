<?php
/* Template Name: Case or No case T-shirt Template */ 
?>
<?php get_header(); ?>
<div id="wrapper">
    <div class="container t-shirt-promo-container scrapecontent">
    	<div class="content">
    		<div class="row">
    			<div class="col-sm-12 bg-t-shirt" style="background-image: url(<?php echo get_field('banner_image')['url'] ?>);">
                    <div class="col-sm-5 col-sm-offset-6 col-md-4 col-md-offset-6 col-lg-4 col-lg-offset-7">
                        <div class="form-wrap hidden-xs">
                            <div>
                                <img src="<?php echo get_field('banner_form_image')['url']; ?>">
                            </div>
                            <?php echo do_shortcode(get_field('banner_form_shortcode')); ?>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 title-wrap">
                    <div class="col-sm-12 col-lg-10 col-lg-offset-1 title-main">
                        <?php the_field('banner_title'); ?>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1 title-sub hidden-xs" style="font-size:32px;">
                        <?php the_field('banner_sub_title'); ?>
                    </div>
                    <div class="col-lg-10 col-lg-offset-2 title-sub visible-xs">
                        <?php the_field('banner_title_for_mobile'); ?>
                    </div>
                    <div class="actions text-center visible-xs">
                        <div class="form-group">
                            <a name="t-shirt" href="#CaseEvaluationTshirtModal" role="button" data-toggle="modal" class="btn btn-primary btn-large btn-block "><?php the_field('banner_button_text_for_mobile'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row videos-container">
                <div class="col-sm-12">
                    <h2><?php the_field('recent_case_title'); ?></h2>
                </div>
                <?php
                    $counter = 1;
                    if( have_rows('recent_case_repeater') ):
                    while( have_rows('recent_case_repeater') ) : the_row();

                        $iframe = get_sub_field('recent_case_video');
                        //preg_match('/src="(.+?)"/', $iframe, $matches);
                        //$src = $iframe[1];
                ?>
                <div class="col-sm-4">
                    <a id="video_<?php echo $counter; ?>" class="thumbnail" href="<?php echo $iframe['url']; ?>" data-options="width:848, height:480, html5video: { webm: '<?php echo $iframe['url']; ?>', poster: '<?php echo get_sub_field('recent_case_poster')['url'];?>' }">
                        <img src="<?php echo get_sub_field('recent_case_poster')['url'];?>">
                    </a>
                </div>
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
                <?php
                    $counter ++;
                    endwhile;   
                    endif 
                ?>
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
<div id="CaseEvaluationTshirtModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="CaseEvaluationTshirtModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="tmodal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body masstorts">
                <div id="contact-form" class="">
                <div class="sidebar-free-consultation">
                    <?php echo do_shortcode(get_field('banner_form_shortcode_mobile')); ?>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>