<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<div id="logo" class="m-1of2 t-1of5 d-1of7 cf">
						<a href="<?php echo home_url(); ?>" rel="nofollow">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/logox60px.png">
						</a>
					</div>

					<!--  <div class="m-1of2 t-1of3 d-3of7 cf">
						<a href="<?php echo home_url(); ?>" rel="nofollow">
							<h1><?php bloginfo('name'); ?></h1>
						</a>
					</div> -->
					
					<div class="social m-1of2 t-1of5 d-1of7 cf">
					<?php 
					                $args = array('category_name' => 'Social',
					                            'order' => 'ASC'
					                            );

					                $social = new WP_Query($args);

									if ($social->have_posts()) : 
									while ($social->have_posts()) : $social->the_post();?>
									
									
										
											

														<?php the_content(); ?>
												
											
										
									
									

									<?php endwhile; ?>

											

									<?php else : ?>

											<article id="post-not-found" class="hentry cf">
													<header class="article-header">
														<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
												</header>
													<section class="entry-content">
														<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
												</section>
												<footer class="article-footer">
														<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
												</footer>
											</article>

									<?php endif; 
									/* Restore original Post Data */
									wp_reset_postdata();?>
						
					</div>
					<!-- Donation Plugin -->
					<div class="donate m-1of2 t-1of5 d-1of7 cf">
					<?php echo do_shortcode('[paypal-donation purpose="Donation Purpose" reference="Sample Reference"]'); ?> </div>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>

					<div class="m-1of2 t-2of5 d-4of7 cf">
					<!-- KATYA, THE NAV SHOULD BE CLEAR: BOTH; IF WE WANT IT BELOW EVERYTHING -->
						<input type="checkbox" id="navbar-checkbox" class="navbar-checkbox">
						<nav role="navigation">
							<?php wp_nav_menu(array(
	    					'container' => false,                           // remove nav container
	    					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
	    					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
	    					'menu_class' => 'nav top-nav cf',               // adding custom nav class
	    					'theme_location' => 'main-nav',                 // where it's located in the theme
	    					'before' => '',                                 // before the menu
		        			'after' => '',                                  // after the menu
		        			'link_before' => '',                            // before each link
		        			'link_after' => '',                             // after each link
		        			'depth' => 0,                                   // limit the depth of the nav
	    					'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>
							<label for="navbar-checkbox" class="navbar-handle"></label>
						</nav>
					</div>
				</div>

			</header>
