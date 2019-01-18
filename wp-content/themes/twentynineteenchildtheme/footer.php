<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	
	<footer class="main_footer">
		<!--top footer start here-->
		<div class="top_footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div>
					<div class="col-md-4 col-sm-4">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
					<div class="col-md-4 col-sm-4">
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
					</div>
				</div>
			</div>
		</div>
		<!--top footer close here-->

		<!--bottom footer start here-->
		<div class="bottom_footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="newletter_section">
							<h3>Newsletter<span>Enter your email always to be updated.</span></h3>
							<?php echo do_shortcode( '[contact-form-7 id="107" title="newsletter form"]' ); ?>						
						</div>
						<div class="copyright_sec">&copy; Copyright 2019 All rights reserved</div>
					</div>
				</div>
			</div>
		</div>
		<!--bottom footer close here-->
	</footer>


	

</div><!-- #page -->

<script src="<?php echo get_stylesheet_directory_uri(). '/js/jquery.min.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri(). '/js/bootstrap.min.js' ?>"></script>
<script type="text/javascript">
	$('.count_number').each(function () {
	    $(this).prop('Counter',0).animate({
	        Counter: $(this).text()
	    }, {
	        duration: 4000,
	        easing: 'swing',
	        step: function (now) {
	            $(this).text(Math.ceil(now));
	        }
	    });
	});
	$('.attachment-medium').after('<span class="comma_quote"><i class="fa fa-quote-left" aria-hidden="true"></i></span>');
	$(".nav a").on('click', function(e){
	  e.preventDefault();
	  $id = $(this).attr('href');
	  $('html, body').animate({
	      scrollTop: $($id).offset().top
	    }, 1000);
	});



	

	jQuery("#slider_about").on('click', function(e){
		jQuery('html, body').animate({
			scrollTop: jQuery('#about').offset().top
		}, 1000);	
	});

	jQuery("#slider_contact").on('click', function(e){
		jQuery('html, body').animate({
			scrollTop: jQuery('#contact').offset().top
		}, 1000);	
	});

</script>

<?php wp_footer(); ?>


</body>
</html>
