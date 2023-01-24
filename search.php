<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>

		 <!-- Posts e categorias -->			
		 <div class="container col-xxl-8 px-4 py-5">
			<ul class="blog-categories-list">
					<li><a class="active" href="#">Resultado da busca</a></li>
					<?php wp_list_categories( array(
						'orderby' => 'name',
						'title_li' => '',
						'exclude'  => array( 4, 1, 3, 10 ),
					) ); ?> 
			</ul>


			<div class="row">
				<?php if ( have_posts() ) : 
				// Do we have any posts in the databse that match our query?
				// In the case of the home page, this will call for the most recent posts 
				?>

					<?php while ( have_posts() ) : the_post(); 
					// If we have some posts to show, start a loop that will display each one the same way
					?>

						<div class="col-md-4">
							<div class="mdin-post-card">
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
									<div class="mdin-post-img">
										<?php the_post_thumbnail(); //Get the thumbnail to this post. ?>
									</div>

									<div class="card-body">
										<small class="mdin-label">
											<?php
												// to display categories without a link
												foreach ( ( get_the_category() ) as $category ) {
													echo $category->cat_name . ' ';
												}
											?>
										</small> <span class="mdin-reading"><?php the_field('tempo_de_leitura'); ?> minuto(s) de leitura</span>
										<h4 class="mdin-blog-title">
											<?php the_title(); ?>
										</h4>

									
						
						
									</div>
								</a>
							</div>
						</div>

				
					<?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>
					<?php wpbeginner_numeric_posts_nav(); ?>

					
					<!-- pagintation -->
					<div id="pagination" class="clearfix" style="display:none">
						<div class="past-page"><?php previous_posts_link( 'newer' ); // Display a link to  newer posts, if there are any, with the text 'newer' ?></div>
						<div class="next-page"><?php next_posts_link( 'older' ); // Display a link to  older posts, if there are any, with the text 'older' ?></div>
					</div>
					<!-- pagination -->


				<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
					
					<article class="post error">
						<h1 class="404">Ops! Não encontramos nada com essa busca! 😕</h1>
					</article>

				<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>
			</div>

		</div>
	
	
	
		
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>