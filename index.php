<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>


<div id="blog-wrapper">
		<!-- Destaques e Casos Reais -->
		<div id="featured" class="container col-xxl-10 px-4 py-5">
			<div class="row">
				<div class="col-md-8">
					<h4 class="blog-section--title">Destaque <span></span></h4>

					<?php

						// The Query
						query_posts( array ( 'category_name' => 'Destaque', 'posts_per_page' => 1 ) );

						// The Loop
						while ( have_posts() ) : the_post(); ?>
						<div class="blog-destaque--item">
							<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
								<div class="blog-destaque--thumbnail">
									<?php the_post_thumbnail(); //Get the thumbnail to this post. ?>
								</div>

								<div class="blog-destaque--info">
									<small class="mdin-label"> 
										<?php
										// to display categories without a link
										foreach ( ( get_the_category() ) as $category ) {
											echo $category->cat_name . ' ';
										}
										?>
										</small> 
									
									<span class="mdin-reading"><?php the_field('tempo_de_leitura'); ?> minuto(s) de leitura</span>
									
									<h1 class="blog-destaque--title">
										<?php the_title(); ?>
									</h1>
								</div>
							</a>
						</div>

						<?php endwhile;

						// Reset Query
						wp_reset_query();

						?>
					
					
				</div>



				<script src="https://cdn.popupsmart.com/bundle.js" data-id="10377" async defer></script>
				
				
				<div class="col-md-4">
					<h4 class="blog-section--title">Casos reais <span></span></h4>

					<ul class="blog-casos--list">
						<?php
						// The Query
						query_posts( array ( 'category_name' => 'Casos reais', 'posts_per_page' => 4 ) );

						// The Loop
						while ( have_posts() ) : the_post(); ?>
							<li class="blog-casos--list-item row">
								<div class="col-md-4">
									<div class="blog-casos--list-item-thumbnail">
										<?php the_post_thumbnail(); //Get the thumbnail to this post. ?>
									</div>
								</div>
								<div class="col-md-8 blog-casos--list-item-info">
									
									<h2 class="blog-casos-list-item-title">
										<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
									</h2>	
										
										<span class="blog-casos-list-item-cat">
											<?php the_tags('') ?>							
										</span>
								</div>
							</li>

						<?php endwhile;

						// Reset Query
						wp_reset_query();

						?>

					

						
					</ul>

				</div>
			</div>
		</div>


		<!-- Tudo sobre CBD -->
		<div id="all-cbd" class="container col-xxl-10 px-4 py-5">
			<div class="row">
				<div class="col-md-11">
					<h4 class="blog-section--title">Tudo sobre CBD <span></span></h4>
				</div>

				<div class="col-md-1">
						<?php

						// Get the ID of a given category
						$category_id = get_cat_ID( 'Tudo sobre CBD' );
						// Get the URL of this category
						$category_link = get_category_link( $category_id );

						?>
											
					<a href="<?php echo esc_url( $category_link ); ?>" class="blog-section--more" title="Ver mais">Ver mais</a>
				</div>

			</div>

			
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			<?php

				// The Query
				query_posts( array ( 'category_name' => 'Tudo sobre CBD', 'posts_per_page' => 3 ) );

				// The Loop
				while ( have_posts() ) : the_post(); ?>
					<div class="col">
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
				
					<?php endwhile;

						// Reset Query
						wp_reset_query();

					?>

			</div>
		</div>


        <!-- Newsletter -->											
		<div id="newsletter" class="container col-xxl-10 px-4">
			 <div class="blog-newsletter">
				 <div class="row">
					 <div class="col-md-7">
						 <div class="blog-newsletter-quoteitem">
							<p class="blog-newsletter--quote">"Com menos de um mês de tratamento, já iniciei com meu psiquiatra o desmame dos antidepressivos, e já cortei o uso do Zolpidem, Alprazolam e Nortriptilina."</p>

							<div class="blog-newsletter--quote-info">
								<div class="blog-newsletter--quote--name">Karina Astorri</div>
								<div class="blog-newsletter--quote--wh">Iniciou seu tratamento com a Medicina In</div>
							</div>
						</div>
					 </div>

					 <div class="col-md-4">
						 <h4 class="blog-newsletter--name">Cannabis medicinal do <b>básico ao avançado</b></h4>

						 <form method="POST" action="https://medicina22874.activehosted.com/proc.php" id="_form_8_" class="row g-3">
							<input type="hidden" name="u" value="8" />
							<input type="hidden" name="f" value="8" />
							<input type="hidden" name="s" />
							<input type="hidden" name="c" value="0" />
							<input type="hidden" name="m" value="0" />
							<input type="hidden" name="act" value="sub" />
							<input type="hidden" name="v" value="2" />
							<input type="hidden" name="or" value="ef313078ce87828961a6371f0c2ac601" />

							<div class="col-auto">
								<input type="email"  class="form-control blog-newsletter-form-control _form-label" id="inputPassword2" placeholder="Digite seu melhor e-mail">
							</div>
							<div class="col-auto">
								<button type="submit" class="_submit btn btn-primary px-4 me-md-2 mdin-btn-primary">Inscrever-se</button>
							</div>
						</form>


					 </div>
				 </div>
			 </div>
		</div>

		 <!-- Posts e categorias -->			
		<div class="container col-xxl-10 px-4 py-5">
			<ul class="blog-categories-list">
					<li><a class="active" href="#">Todos</a></li>
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

		




</div>




	
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>