

<?php get_header(); ?>

			<div id="content">
			<?php 
			    echo do_shortcode("[metaslider id=10]"); 
			?>

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

								
								<section class="section-about">
								<?php 
						                $args = array('category_name' => 'Promise',
						                            'order' => 'ASC'
						                            );

						                $news = new WP_Query($args);

										if ($news->have_posts()) : 
										while ($news->have_posts()) : $news->the_post();?>
										
										<!-- MAKE A LIMIT ON QUANTITY OF POSTS IN A ROW -->
										<div id="post-<?php the_ID(); ?>" class="cf post-front">
											<?php if (has_post_thumbnail()) : ?>
												<figure>
													
													<?php the_post_thumbnail('thumb-600'); ?>
													
												</figure>
											<?php endif; ?>

											<div class="hover-state">
							
												
													<h2><?php the_title(); ?></h2>
													<?php the_content(); ?>
													<?php echo do_shortcode('[paypal-donation purpose="Donation Purpose" reference="Sample Reference"]'); ?>
													
												
								
											</div><!-- end hover-state -->
										</div>
										

										<?php endwhile; ?>

												<?php bones_page_navi(); ?>

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
									
								</section>
								

							</div>

							
							
							<div class="m-all t-1of3 d-2of7">
								<section class="section-about">
									<?php 
					                $args = array('category_name' => 'Mission',
					                            'order' => 'ASC'
					                            );

					                $news = new WP_Query($args);

									if ($news->have_posts()) : 
									while ($news->have_posts()) : $news->the_post();?>
									
									<!-- MAKE A LIMIT ON QUANTITY OF POSTS IN A ROW -->
									<div id="post-<?php the_ID(); ?>" class="cf post-front">
										<?php if (has_post_thumbnail()) : ?>
											<figure>
												
												<?php the_post_thumbnail('thumb-600'); ?>
												
											</figure>
										<?php endif; ?>

										<div class="hover-state">
						
											
												<h2><?php the_title(); ?></h2>
												<?php the_content(); ?>
											
							
										</div><!-- end hover-state -->
									</div>
									

									<?php endwhile; ?>

											<?php bones_page_navi(); ?>

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
								</section>
							</div>
						</div><!-- end main -->

					

				</div><!-- end inner content -->

			</div><!-- end content -->


<?php get_footer(); ?>
