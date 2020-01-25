<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="wrapper">
					<div class="wrapperItem">

						<h3>CONTACT INFO </h3>
						<p>
							<i class="fa fa-envelope"></i> 
							<pseudo:before><pseudo:before>
							<a href="">info@inhabitent.com</a>
						</p>


						<p>
							<i class="fa fa-phone"></i> 
							<pseudo:before><pseudo:before>
							<a href="">778-456-7891</a>
						</p>


						<p> 
	
								
							<i class="fa fa-facebook-square"></i>
							<i class="fa fa-twitter-square"></i>
							<i class="fa fa-google-plus-square"></i>
						</p>
								
					</div>

					<div class="wrapperItem"> 
					
						<h3> BUSINESS HOURS </h3> 
						<p><strong> Monday-Friday: </strong> 9am to 5pm </p>
						<p><strong> Saturday: </strong> 10am to 2pm </p>
						<p><strong> Sunday: </strong> Closed </p>

					</div>

					<div class="wrapperItem logo">
						<h3>
							<a href="">			
							<img src= "<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-text.svg" alt="Inhabitent logo text">				
	
						</h3>
					</div>

				</div>


				<div class= "site-info">COPYRIGHT &#169 2019 INHABITENT</div>
				
			</footer><!-- #colophon -->
		</div><!-- #page -->
		
		<?php wp_footer(); ?>
	</body>
</html>
