				<div id="sidebar0" class="post-front sidebar get-involved clear-left m-all t-1of2 d-1of2 last-col cf" role="complementary">

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
							$args = array('category_name' => 'Resources',
			                            'order' => 'ASC',
			                            'posts_per_page' => 4);

			                $resources = new WP_Query($args);
							if ($resources->have_posts()) : while ($resources->have_posts()) : $resources->the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								
										<a href="<?php the_permalink(); ?>">
											<h4><?php the_title(); ?></h4>
										</a>								

							</article>

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
