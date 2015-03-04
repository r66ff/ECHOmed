

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-2of3 d-3of7 cf" role="main">

								
								<section class="section-contact">
									<h2>Contact Us</h2>
									<p>
										Send us a message and we will get back to you shortly.
									</p>
									
									<?php 
						                

										if (have_posts()) : 
										while (have_posts()) : the_post();?>
										
										
										<div id="post-<?php the_ID(); ?>" class="d-1of2 t-1of2 m-all cf post-front">
											<?php the_content(); ?>
								
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

										<?php endif;?>

					
									<div class="cf"></div>
								</section>

							</div>

							
								
							

							
							
							<div class="m-all t-1of3 d-2of7">
								<section class="section-about">
									<?php 
				                $args = array('category_name' => 'Mission',
				                            'order' => 'ASC'
				                            );

				                $missionstory = new WP_Query($args);

								if ($missionstory->have_posts()) : 
								while ($missionstory->have_posts()) : $missionstory->the_post();?>
								
								
									<div id="post-<?php the_ID(); ?>" class="m-all cf post-featured">
										<section class="mission-post">
											<?php if (has_post_thumbnail()) : ?>
												<figure>
													<a href="<?php the_permalink(); ?>">
													<?php the_post_thumbnail('thumb-100'); ?>
													</a>
												</figure>
											<?php endif; ?>

											<div class="featured-text">
													<h2><?php the_title(); ?></h2>
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
								</section>
							</div>
							<?php get_sidebar('mailing-list'); ?>
						</div><!-- end main -->

					

				</div><!-- end inner content -->

			</div><!-- end content -->


<?php get_footer(); ?>
