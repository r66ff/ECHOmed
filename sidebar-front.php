				<div id="sidebar0" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
							$argsNews = array('category_name' => 'News',
			                            'order' => 'ASC',
			                            'posts_per_page' => 4);

			                $news = new WP_Query($argsNews);
							if ($news->have_posts()) : while ($news->have_posts()) : $news->the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<?php if (has_post_thumbnail()) : ?>
									<figure>
										<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('thumb-300'); ?>
										</a>
									</figure>
								<?php endif; ?>

								<div class="hover-state">
										
									<a class="dark-link" href="<?php the_permalink(); ?>">
										
										<h4><?php the_title(); ?></h4>
									</a>
										<p><?php the_excerpt(); ?></p>
									<a class="dark-link" href="<?php the_permalink(); ?>">
										<em>Read more &nbsp;</em>
									</a>
								
					
								</div><!-- end hover-state -->
								

							</article>

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
