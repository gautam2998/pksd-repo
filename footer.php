<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PKSD
 */

?>

	<footer class="footer-top site-footer" id="colophon">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="footer-logo"><a href="/"><img data-src="<?php the_field('logo', 'option'); ?>" alt="logo" class="img-responsive loaded" src="<?php the_field('logo', 'option'); ?>" data-was-processed="true"></a></div>
			</div>
			<div class="col-md-6">
				<p class="phone pull-right"><?php the_field('header_right_call_title', 'option'); ?><br>
					<a href="tel:8778772228" onclick="ga('send', 'event', 'Phone', 'Click', 'Footer');"><?php the_field('header_right_phone_number', 'option'); ?></a></p>
			</div>
			<div class="col-md-4 photogrid">
				<?php
                    if (is_active_sidebar('footer-1')) {
                        dynamic_sidebar('footer-1');
                    }
                ?>

				<!---<h3>Follow Us</h3>
				<div class="social-media"> <a href="https://www.facebook.com/pages/PKSD-Law-Firm/150717744954140"><img src="assets/images/social-media/facebook.png" alt="Facebook" /></a> <a href="https://twitter.com/PKSDLaw"><img src="assets/images/social-media/twitter.png" alt="Twitter" /></a> <a href="https://www.linkedin.com"><img src="assets/images/social-media/linkedin.png" alt="LinkedIn" /></a> <a href="https://plus.google.com/112412430235722157875" rel="publisher"><img src="assets/images/social-media/google.png" alt="Google Plus" /></a> <a href="https://www.youtube.com/user/PKSLawfirm"><img src="assets/images/social-media/youtube.png" alt="YouTube" /></a> </div>--->
			</div>
			<div class="col-md-4">
				<div class="service-areas">
					<?php
                        if (is_active_sidebar('footer-2')) {
                            dynamic_sidebar('footer-2');
                        }
                    ?>

				</div>
			</div>
			<div class="col-md-4 hidden-xs">
				<h3>Contact Us</h3>
				<div id="quick-connect">

				    <?php
                        if (is_active_sidebar('footer-3')) {
                            dynamic_sidebar('footer-3');
                        }
                    ?>
				</div>
<!-- end: Contact Form -->
			</div>
		</div>
	</div>
</footer>
<!-- <div id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="copy"> &copy;
					<?php
                    ini_set('date.timezone', 'America/New_York');
                    $thisYear = date('Y');
                    $startYear = "2010";
                    if ($startYear == $thisYear) {
                        echo $thisYear;
                    } else {
                        echo $startYear." - {$thisYear}";
                    }
                    ?>
					Pitman, Kalkhoff, Sicula &amp; Dentice - <a href="http://www.pmpmg.com" rel="nofollow" target="pmpmg">PMP Marketing Group</a></p>
			</div>
		</div>
	</div>
</div> -->

<div id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php the_field('footer_copyright', 'option'); ?>
			</div>
			<div class="col-md-4">
				<p class="text-right">
					<?php
                    wp_nav_menu(
                        array(
                        'theme_location' => 'menu-2',
                    )
                    );
            ?>
            </p>
			</div>
		</div>
	</div>
</div>
<div id="CaseEvaluationModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="CaseEvaluationModal" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body masstorts">
        <div id="contact-form" class="">
          <!-- <div class="form-title">
              <h3>FREE Case Evaluation</h3>
              <p>Fill out this form for a FREE Case Evaluation</p>
          </div> -->
          <div class="sidebar-free-consultation">
            <?php the_field('modal_form_shortcode','option');?>
          </div>
        </div>
      </div>
      <!-- end: Contact Form -->
    </div>
  </div>
</div>


<?php wp_footer(); ?>
<!-- <script src="<?php echo get_template_directory_uri()?>/includes/js/jquery.js"></script> -->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<!-- <script src="<?php echo get_template_directory_uri()?>/includes/js/bootstrap.js"></script>
<script src="<?php echo get_template_directory_uri()?>/includes/js/jquery.dataTables.js"></script>
<script src="<?php echo get_template_directory_uri()?>/includes/js/jquery.sortable.js"></script>
<script src="<?php echo get_template_directory_uri()?>/includes/src/js/jquery.mousewheel.js"> </script>
<script src="<?php echo get_template_directory_uri()?>/includes/src/js/ilightbox.packed.js"></script> -->
<!--<script src="js/socialite.min.js"></script>-->
<!-- <script src="<?php echo get_template_directory_uri()?>/includes/js/slickquiz/slickQuiz-config.js"></script>
<script src="<?php echo get_template_directory_uri()?>/includes/js/slickquiz/slickQuiz.js"></script>
<script src="<?php echo get_template_directory_uri()?>/includes/js/custom.js"></script> -->

</body>
</html>
