<?php

get_header(); ?>
    <div id="fh5co-blog-section" class="fh5co-section-gray">
        <div class="container">

                <?php
                /* Start the Loop */
                while ( have_posts() ) : the_post();

                    $category = get_the_category();
                    echo $category[0]->cat_name;?>
                    <?php if ( $category[0] == 'Blog' ) :
                        get_template_part( 'template-parts/post/content-blog', get_post_format() );
                        else:
                        get_template_part( 'template-parts/post/content-gallery', get_post_format() );
                    endif; ?>


                <?php endwhile; // End of the loop.
                ?>
            <h1><?php $category[0]?></h1>

        </div><!-- #primary -->

    </div><!-- .wrap -->

<?php get_footer();

