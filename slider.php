<div id="slider">
	<div class="row slide">
		<div id="slider">
			<ul>
				<?php
					// The Query
					$the_query = new WP_Query( array( 
						'posts_per_page'=>4
					) );
					// The Loop
					while ( $the_query->have_posts() ) : $the_query->the_post();
						echo '<li><article class="featured">'; ?>
							<div class="featured-image">
								<img src="http://placehold.it/277x170&text=277x170" alt="277x170">
							</div>
							<h3><?php the_title(); ?></h3>
						<?php echo '</article></li>';
					endwhile;
					// Reset Post Data
					wp_reset_postdata();
				?>
			</ul>
		</div>
	</div>
</div>