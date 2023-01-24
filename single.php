<?php
/**
 * The template for displaying any single post.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>

<div class="container">

	<div class="mdin-single-wrapper">


	<?php if ( have_posts() ) :?>

		<?php while ( have_posts() ) : the_post(); ?>

		<div class="row">
			<div class="mdin-single-header">
				<small class="mdin-label"><?php
											// to display categories without a link
											foreach ( ( get_the_category() ) as $category ) {
												echo $category->cat_name . ' ';
											}
										?></small> 
				<h1 class="mdin-single--title"><?php the_title(); // Display the title of the post ?></h1>
				<p class="mdin-single--overview">
					<?php the_excerpt(); ?>
				</p>
			</div>
		</div>	

	

		<div class="row">
			<div class="col">
				<div class="mdin-single--rv">
					<div class="mdin-single--rv-name">Conteúdo escrito e revisado</div>
					<div class="mdin-single--rv-ex">Medicina In Comitê Científico, <span>atualizado em <?php the_date(); // Display the time it was published ?></span></div>
				</div>
			</div>

			
		</div>

		<?php endwhile;?>


<?php else : ?>		
<?php endif;?>



		<div class="row">
			<div class="col-md-8">
			<article>	
				<?php if ( have_posts() ) :?>

					<?php while ( have_posts() ) : the_post(); ?>
								<div class="mdin-single--content">
									<div class="mdin-single--thumb">
										<?php the_post_thumbnail(); //Get the thumbnail to this post. ?>
									</div>

									<?php the_content(); 
										// This call the main content of the post, the stuff in the main text box while composing.
										// This will wrap everything in p tags
										?>
								
								</div>
					<?php endwhile;?>


				<?php else : ?>		
				<?php endif;?>
			</article>	

			<div class="mdin-single--content--rc">
			
						<h4 class="blog-section--title">Casos reais <span></span></h4>

						<div class="blog-casos--list row">
							<?php
							// The Query
							query_posts( array ( 'category_name' => 'Casos reais', 'posts_per_page' => 4 ) );

							// The Loop
							while ( have_posts() ) : the_post(); ?>
							<div class="col-md-6">
								<div class="blog-casos--list-item row">
									<div class="col-md-4">
										<div class="blog-casos--list-item-thumbnail">
											<?php the_post_thumbnail(); //Get the thumbnail to this post. ?>
										</div>
									</div>
									<div class="col-md-8 blog-casos--list-item-info">
										
										<h2 class="blog-casos-list-item-title">
											<a href="#"><?php the_title(); ?></a>
										</h2>	
											
											<span class="blog-casos-list-item-cat">
												<?php the_tags('') ?>							
											</span>
									</div>
								</div>
							</div>

							<?php endwhile;

							// Reset Query
							wp_reset_query();

							?>

						

							
						</div>

					</div>
			</div>

				
			

			<div class="col-md-4">

				<aside>
					<div class="mdin-banner" style="margin-bottom:20px">
						<a href="https://medicina.in/agendar/?utm_source=conteudo-banner" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/sidebar/inicie-seu-tratamento-com-cbd.jpg" alt="Inicie seu tratamento com CBD. Converse com um médico(a) hoje!">
						</a>
					</div>

					<?php wcr_related_posts(); ?>
				</aside>
				
			</div>
		</div>

	</div>

</div>




<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
