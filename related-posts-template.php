<?php if (!empty($related_posts)) { ?>

    <div class="mdin-single--related">
					<h4 class="mdin-single--related--title">Quem leu este artigo, também se interessou pelos conteúdos abaixo</h4>

                    <?php
            foreach ($related_posts as $post) {
                setup_postdata($post);
            ?>

                    <div class="mdin-single--related--item">
                        <?php if (has_post_thumbnail()) { ?>
                        <div class="thumb">
                            <?php //echo get_the_post_thumbnail(null, 'medium', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                        </div>
                        <?php } ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<h5 class="mdin-single--related--item-title"><?php the_title(); ?></h5>
						</a>
							<span class="mdin-single--related--item-label">
                            <?php
											// to display categories without a link
											foreach ( ( get_the_category() ) as $category ) {
												echo $category->cat_name . ' ';
											}
										?>
                            </span>
						
					</div>



        
               
                    
             
             
           
            <?php } ?>



					
					
            

				</div>


<?php
}

