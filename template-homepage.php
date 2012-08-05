<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<div id="page" class="clearfix">

	<div id="content" class="container">

		<div class="row">

			<div id="main" class="entries">
				<section>
					Un cacat si inca unu
					<?php get_template_part('slider'); ?>
				</section>
			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>