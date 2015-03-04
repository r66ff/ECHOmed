			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap cf">

					<div class="address-footer d-1of4 t-1of2 m-1of2 cf">
						<?php 
					                $args = array('category_name' => 'Address',
					                            'order' => 'ASC'
					                            );

					                $address = new WP_Query($args);

									if ($address->have_posts()) : 
									while ($address->have_posts()) : $address->the_post();?>
									
									
										<div id="post-<?php the_ID(); ?>" class="m-all cf post-featured">
											<section class="promise-post">

												<div class="featured-text">
														<?php the_content(); ?>
												</div>
											</section>
										</div>
									
									

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

					


					<div class="address-footer d-1of4 t-1of4 m-1of2 cf">
						<?php get_search_form( ); ?>		
					</div>
					
<nav class="footer-nav d-1of4 t-1of2 m-1of2 cf" role="navigation">
						<?php wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
	        			'after' => '',                                  // after the menu
	        			'link_before' => '',                            // before each link
	        			'link_after' => '',                             // after each link
	        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<div class="social-footer d-1of4 t-1of2 m-1of2 cf">
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
					
					


					<!-- KATYA, THE COPYRIGHT SHOULD BE CLEAR: BOTH; -->
					<p class="source-org m-all copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
