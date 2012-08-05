<div id="slider">
	<div class="row slide">
		<?php
			// The Query
			$the_query = new WP_Query( array( 
				'posts_per_page'=>4
			) );
			// The Loop
			while ( $the_query->have_posts() ) : $the_query->the_post();
				echo '<article class="featured">'; ?>
					<div class="featured-image">
						<img src="http://placehold.it/277x170&text=277x170" alt="277x170">
					</div>
					<h3><?php the_title(); ?></h3>
				<?php echo '</article>';
			endwhile;
			// Reset Post Data
			wp_reset_postdata();
		?>
	</div>
</div>