<aside id="sidebar" class="xoxo grid_5">

	<section>
		<div id="next-match">
			<div></div>
		</div>
	</section>

	<?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

		<section>
			<?php get_search_form(); ?>
		</section>

		<section>
			<h3><?php _e( 'Archives' ); ?></h3>
		</section>

		<section>
			<h3><?php _e( 'Meta' ); ?></h3>
			<ul>
				<?php wp_register(); ?>
				<li>
					<?php wp_loginout(); ?>
				</li>
				<?php wp_meta(); ?>
			</ul>
		</section>
		
	<?php endif; ?>

</aside>