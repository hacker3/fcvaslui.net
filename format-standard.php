<article class="entry" id="post-<?php the_ID(); ?>">
    <div class="entry-content">
    	<header class="entry-header">
        	<h3 class="entry-title">
        		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
        			<?php the_title(); ?>
        		</a>
        	</h3>
            <div class="entry-category">
                <?php the_category(', ') ?>
            </div>
        </header>
        <aside class="featured-image">
            <img src="http://placehold.it/400x300&text=Placehold.it" alt="Placehold.it">
        </aside>
        <?php the_excerpt(); ?>
        <aside class="entry-meta">
            <time datetime="<?php the_time('c'); ?>" pubdate><?php the_time('F jS, Y'); ?></time>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="read-more">
                <span class="markup-only">Read More</span>
            </a>
        </aside>
        <p>Published by <?php the_author();?></p>
    </div>
</article>