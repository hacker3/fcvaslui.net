<?php get_header(); ?>

<div id="page" class="clearfix">

	<div id="content" class="container">

		<div class="row">

			<div id="main" class="entries">
				<section>
					<?php get_template_part( 'slider', 'home' ); ?>
				</section>
				<section class="category">
					<h2>Category title</h2>
					<div class="row">
						<div class="half">
							<?php
								// The Query
								$the_query = new WP_Query( array( 
									'cat' => 1,
									'posts_per_page'=>1
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
						<div class="half">
							<ul>
								<?php
									// The Query
									$the_query = new WP_Query( array( 
										'cat' => 1,
										'posts_per_page'=>3,
										'offset' => 1
									) );
									// The Loop
									while ( $the_query->have_posts() ) : $the_query->the_post();
										echo '<li><article>'; ?>
											<h4><?php the_title(); ?></h4>
										<?php echo '</article></li>';
									endwhile;
									// Reset Post Data
									wp_reset_postdata();
								?>
							</ul>
						</div>
					</div>
				</section>
			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>

	<script type="text/javascript">

	(function($){
				$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true,
				continuous: true,
				nextId: "slider1next",
				prevId: "slider1prev"
			});
			$("#slider2").easySlider({ 
				numeric: true
			});
		});	
	})(jQuery);

	</script>