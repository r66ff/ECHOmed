

<?php get_header(); ?>

			<div id="content">
			

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-1of3 d-1of4 cf faq-list" role="main">

							<?php 
			                $args = array('category_name' => 'FAQ',
			                            'order' => 'ASC'
			                            );

			                $faq = new WP_Query($args);

							if ($faq->have_posts()) : 
							while ($faq->have_posts()) : $faq->the_post();?>
							
							<!-- MAKE A LIMIT ON QUANTITY OF POSTS IN A ROW -->
							<div id="post-<?php the_ID(); ?>" class="cf post-front">
								
									
										<a href="<?php the_permalink(); ?>">
										<h4><?php the_title(); ?></h4>
										</a>
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


						</div>
						<div class="m-all t-2of3 d-3of4 cf">
							
							<!-- THIS H2 SHOULD HAVE LIMITED WIDTH -->
							<h2>Get Involved!</h2>
							<div>
							<div class="get-involved m-all t-1of2 d-1of2 cf" role="main">

								
								<?php 
					                $args = array('category_name' => 'Participate',
					                            'order' => 'ASC'
					                            );

					                $participate = new WP_Query($args);

									if ($participate->have_posts()) : 
									while ($participate->have_posts()) : $participate->the_post();?>
									
									
										<div id="post-<?php the_ID(); ?>" class="m-all cf post-front">
											<section class="promise-post">
												<?php if (has_post_thumbnail()) : ?>
													<figure>
														<a href="<?php the_permalink(); ?>">
														<?php the_post_thumbnail('thumb-100'); ?>
														</a>
													</figure>
												<?php endif; ?>

												<div class="featured-text">
														<h3><?php the_title(); ?></h3>
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
							<div class="get-involved m-all t-1of2 d-1of2 cf" role="main">
								<?php 
					                $args = array('category_name' => 'Volunteer',
					                            'order' => 'ASC'
					                            );

					                $volunteer = new WP_Query($args);

									if ($volunteer->have_posts()) : 
									while ($volunteer->have_posts()) : $volunteer->the_post();?>
									
									
										<div id="post-<?php the_ID(); ?>" class="m-all cf post-front">
											<section class="promise-post">
												<?php if (has_post_thumbnail()) : ?>
													<figure>
														<a href="<?php the_permalink(); ?>">
														<?php the_post_thumbnail('thumb-100'); ?>
														</a>
													</figure>
												<?php endif; ?>

												<div class="featured-text">
														<h3><?php the_title(); ?></h3>
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
							<?php get_sidebar('faq'); ?>
							<div class="get-involved m-all t-1of2 d-1of2 cf" role="main">
								
								
								<?php 
					                $args = array('category_name' => 'Donate',
					                            'order' => 'ASC'
					                            );

					                $donate = new WP_Query($args);

									if ($donate->have_posts()) : 
									while ($donate->have_posts()) : $donate->the_post();?>
									
									
										<div id="post-<?php the_ID(); ?>" class="m-all cf post-front">
											<section class="promise-post">
												<?php if (has_post_thumbnail()) : ?>
													<figure>
														<a href="<?php the_permalink(); ?>">
														<?php the_post_thumbnail('thumb-100'); ?>
														</a>
													</figure>
												<?php endif; ?>

												<div class="featured-text">
														<h3><?php the_title(); ?></h3>
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


								<?php 
					                $args = array('category_name' => 'Promise',
					                            'order' => 'ASC'
					                            );

					                $promise = new WP_Query($args);

									if ($promise->have_posts()) : 
									while ($promise->have_posts()) : $promise->the_post();?>
									
									
										<div id="post-<?php the_ID(); ?>" class="m-all cf post-front">
											<section class="promise-post">
												<?php if (has_post_thumbnail()) : ?>
													<figure>
														<a href="<?php the_permalink(); ?>">
														<?php the_post_thumbnail('thumb-100'); ?>
														</a>
													</figure>
												<?php endif; ?>

												<div class="featured-text">
														<h3><?php the_title(); ?></h3>
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
							</div>
						</div> <!-- end get involved-->
						

					

				</div>

			</div>


<?php get_footer(); ?>
