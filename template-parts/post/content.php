<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<div class="col-lg-4 col-md-4 col-sm-6">
    <div class="fh5co-blog animate-box">

        <ul>

            <?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>


            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

            <?php  if ( has_post_thumbnail() ) { ?>
                    <a href="#"><img class="img-responsive" src="<?php the_post_thumbnail(); ?>" alt=""></a>
            <?php } ?>

                <div class="blog-text">
                    <div class="prod-title">
                        <h3><a href="#"><?php the_title(); ?></a></h3>
                        <span class="by">by Admin</span>
                        <span class="posted_date">Apr. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                        <p><?php the_content();  ?></p>
                        <p><?php the_excerpt(__('(More…)')); ?></p>
                    </div>
                </div>

            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </ul>

    </div>
</div>