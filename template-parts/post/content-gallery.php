
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php
        the_title( '<h1 class="entry-title">', '</h1>' );
        the_date('','<span>','</span>');
        ?>
    </header>

    <body>

    <?php

    the_content( '', '')
    ?>
    </body>

    <?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'wedding-featured-image' ); ?>
            </a>
        </div><!-- .post-thumbnail -->
    <?php endif; ?>

</article><!-- #post-## -->
