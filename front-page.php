<?php get_header(); ?>

			<div id="content">
				<!-- SLIDER IS HERE -->
				<?php 
				    echo do_shortcode("[metaslider id=6]"); 
				?>

				<div id="content-front" class="wrap cf">
				<div class="row cf">
					<?php 
			                $args = array('category_name' => 'Featured',
			                            'order' => 'ASC',
			                            'posts_per_page' => 3);

			                $featured = new WP_Query($args);

							if ($featured->have_posts()) : 
							while ($featured->have_posts()) : $featured->the_post();?>
							
							
								<div id="post-<?php the_ID(); ?>" class="m-all t-1of3 d-1of3 cf post-featured">
									<section class="intro">
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
						</div><!-- end div row -->



						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">
						<section class="post-row cf">
						<?php 
			                $args = array('category_name' => 'Programs',
			                            'order' => 'ASC',
			                            'posts_per_page' => 4);

			                $programs = new WP_Query($args);

							if ($programs->have_posts()) : 
							while ($programs->have_posts()) : $programs->the_post();?>
							
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
									</a>
										<p><?php the_excerpt(); ?></p>
										
									<a class="dark-link" href="<?php the_permalink(); ?>">	
										<em>Read more &nbsp;</em>
									</a>
					
								</div><!-- end hover-state -->
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

					<?php get_sidebar('front'); ?>

				</div>

			</div>


<?php get_footer(); ?>
