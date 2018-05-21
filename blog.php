<?php /* Template Name: Blog */ ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <div id="fh5co-blog-section" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section">
                    <h2>Recent Blog</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-bottom-padded-md">

                <?php
                if ( have_posts() ) :

                    /* Start the Loop */
                    while ( have_posts() ) : the_post(); ?>

                        <ul>
                            <?php $the_query = $query = new WP_Query( array( 'category_name' => 'Blog' ) ); ?>

                            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="fh5co-blog animate-box">
                                        <?php  if ( has_post_thumbnail() ) { ?>
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?></a>
                                        <?php } ?>

                                        <div class="blog-text">
                                            <div class="prod-title">
                                                <h3><a href="#"><?php the_title(); ?></a></h3>
                                                <span class="by"><?php the_author(); ?></span>
                                                <span class="posted_date"><?php the_date(); ?></span>
                                                <span class="comment"><a href=""><?php the_comment(); ?><i class="icon-bubble2"></i></a></span>
                                                <p><?php the_excerpt(__('(More…)')); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>

                    <?php endwhile;

                else :

                    get_template_part( 'template-parts/post/content', 'none' );

                endif;
                ?>

            </div><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->
<?php get_footer();
