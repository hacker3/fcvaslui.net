<?php
/*
Template Name: Echipa
*/

get_header(); ?>

<div id="page" class="clearfix">

	<div id="content" class="container">

		<div class="row">

			<div id="main" class="echipa">
				<?php
					$args = array( 'post_type' => 'jucator', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );
					$posturi = array();
					$posturi[portari] = $posturi[fundasi] = $posturi[mijlocasi] = $posturi[atacanti] = array();
					while ( $loop->have_posts() ) : $loop->the_post();
						if (get_field('post') == 'portar')
							array_push($posturi[portari], get_the_title());
						if (get_field('post') == 'fundas')
							array_push($posturi[fundasi], get_the_title());
						if (get_field('post') == 'mijlocas')
							array_push($posturi[mijlocasi], get_the_title());
						if (get_field('post') == 'atacant')
							array_push($posturi[atacanti], get_the_title());
					endwhile;
					foreach ($posturi as $postul => $jucatori): ?>
					<section class="<?php echo $postul ?>">
						<h2><?php echo ucwords($postul) ?></h2>
						<?php foreach ($jucatori as $jucator): ?>
							<h3><?php echo ucwords($jucator); ?></h3>
						<?php endforeach ?>
					</section>
				<?php endforeach ?>
			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>