<?php 

if ( have_posts() ):
    while ( have_posts() ): the_post();
        if ( !get_post_format() ) {

        get_template_part('format', 'standard');
        } else {
            get_template_part('format', get_post_format());
        }
        
    endwhile; else: ?>

<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php posts_nav_link(' &#183; ', __('« Newer Posts'), __('Older Posts »')); ?>