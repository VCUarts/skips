<?php get_header(); ?>

			<div id="content">

				<div id="inner-content">

					<main id="main" role="main">
						<section class="paddings">
					
						<h1 class="archive-title"><span><?php _e( 'Search Results for', 'bonestheme' ); ?></span> <em><?php echo esc_attr(get_search_query()); ?></em></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

								<header class="entry-header article-header">

									<h2 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                  						

								</header>

								<section class="entry-content">
										<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>

								</section>


							</article>

						<?php endwhile; ?>

								<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry">
										<header class="article-header">
											<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the search.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

							</section>
						</main>

					</div>

			</div>

<?php get_footer(); ?>
