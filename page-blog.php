<?php get_header(); ?>

			<div id="content">
				
				

				<div id="inner-content" class="wrap cf">
				


						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">
						<section class="post-row cf">
						<h2>What's new</h2>
						<div>	<?php 
			                $args = array('category_name' => 'News',
			                            'order' => 'ASC'
			                            );

			                $news = new WP_Query($args);

							if ($news->have_posts()) : 
							while ($news->have_posts()) : $news->the_post();?>
							
							<!-- MAKE A LIMIT ON QUANTITY OF POSTS IN A ROW -->
							<div id="post-<?php the_ID(); ?>" class="d-1of2 t-1of2 m-all cf post-front">
								<?php if (has_post_thumbnail()) : ?>
									<figure>
										<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('thumb-600'); ?>
										</a>
									</figure>
								<?php endif; ?>

								<div class="hover-state">
				
									<a class="dark-link" href="<?php the_permalink(); ?>">
										<h4><?php the_title(); ?></h4>
										<p><?php the_excerpt(); ?></p>
										
										<em>Read more &nbsp;</em>
									</a>
					
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
							</div>
					</section>
					<section class="post-row cf">
					<h2>Recent Updates</h2>
					<div> <?php 
			                $args = array('category_name' => 'Updates',
			                            'order' => 'ASC'
			                            );

			                $updates = new WP_Query($args);

							if ($updates->have_posts()) : 
							while ($updates->have_posts()) : $updates->the_post();?>
							
							<!-- MAKE A LIMIT ON QUANTITY OF POSTS IN A ROW -->
							<div id="post-<?php the_ID(); ?>" class="d-1of2 t-1of2 m-all cf post-front">
								<?php if (has_post_thumbnail()) : ?>
									<figure>
										<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('thumb-600'); ?>
										</a>
									</figure>
								<?php endif; ?>

								<div class="hover-state">
				
									<a class="dark-link" href="<?php the_permalink(); ?>">
										<h4><?php the_title(); ?></h4>
										<p><?php the_excerpt(); ?></p>
										
										<em>Read more &nbsp;</em>
									</a>
					
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
							</div>
					</section>

						</div> <!-- end div main -->

					<?php get_sidebar('mailing-list'); ?>

				</div>

			</div>


<?php get_footer(); ?>
