<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">


	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="
			<?php
					if(is_front_page() || is_page('about'))
					{
						echo 'home-site-header';
					}
					else
					{
						echo 'site-header';
					}
					
					?>

			" role="banner">
	

				<div class="container">

					<div class="site-branding">
						<div class= "logo">
							<a href="http://localhost:8888/inhabitent">
								<h1 class= "site-title">Inhabitent</h1>
							</a>
						</div>
					</div>
				
		
					<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
						<div class="menu-main-navigation-container">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</div>
					</nav><!-- #site-navigation -->
						
				</div>
			</header><!-- #masthead -->



			<div id="content" class="site-content">


