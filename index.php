<?php get_header(); ?>

<div id="page" class="clearfix">

	<div id="content" class="container">

		<div class="row">

			<div id="main" class="entries">
				<section>
					<h2 class="section-title">Articole despre FC Vaslui</h2>
					<?php get_template_part( 'loop', 'index' ); ?>
				</section>
			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>