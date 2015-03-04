

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap main-about cf">

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">
								<?php 
					                $args = array('category_name' => 'Team',
					                            'order' => 'ASC'
					                            );

					                $team = new WP_Query($args);

									if ($team->have_posts()) : 
									while ($team->have_posts()) : $team->the_post();?>
									
									
										<div id="post-<?php the_ID(); ?>" class="m-all t-1of2 d-1of2 cf post-front">
											<section class="team">
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

							


							</div>

							<?php get_sidebar('front'); ?>
							
							<div class="m-all t-2of3 d-5of7">
							<?php 
				                $args = array('category_name' => 'Mission, Story',
				                            'order' => 'ASC'
				                            );

				                $missionstory = new WP_Query($args);

								if ($missionstory->have_posts()) : 
								while ($missionstory->have_posts()) : $missionstory->the_post();?>
								
								
									<div id="post-<?php the_ID(); ?>" class="m-all cf post-front">
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

								
								
							</div>
						</div><!-- end main -->

					<?php 
				                $args = array('category_name' => 'Partners',
				                            'order' => 'ASC'
				                            );

				                $partners = new WP_Query($args);

								if ($partners->have_posts()) : 
								while ($partners->have_posts()) : $partners->the_post();?>
								
								
									<div id="post-<?php the_ID(); ?>" class="m-all cf post-front">
										<section class="partners">
											
											

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

				</div><!-- end inner content -->

			</div><!-- end content -->


<?php get_footer(); ?>
