				<div id="sidebar0" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">

						<?php 
			                $args = array('category_name' => 'MailChimp',
			                            'order' => 'ASC',
			                            'posts_per_page' => 1);

			                $featured = new WP_Query($args);

							if ($featured->have_posts()) : 
							while ($featured->have_posts()) : $featured->the_post();?>
							
							
								<div id="post-<?php the_ID(); ?>">
									<section class="mail-list">
										

										<div class="mail-form">
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
