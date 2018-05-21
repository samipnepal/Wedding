<?php
/* Template Name: Gallery */

get_header(); ?>
    <div id="fh5co-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h2>Wedding Gallery</h2>
                </div>
            </div>
            <?php
            $query_images_args = array(
                'post_type'      => 'attachment',
                'post_mime_type' => 'image',
                'post_status'    => 'inherit',
                'posts_per_page' => - 1,
            );

            $query_images = new WP_Query( $query_images_args );

            $images = array();
            foreach ( $query_images->posts as $image ) { ?>
                <h1></h1>

                <div class="col-md-4">
                    <div class="gallery animate-box">
                        <div class="gallery animate-box">
                            <a class="gallery-img image-popup image-popup" href="<?php echo wp_get_attachment_url($image -> ID); ?>">
                                <img src="<?php echo wp_get_attachment_url($image -> ID); ?>" class="img-responsive" >
                            </a>
                        </div>

                    </div>
                </div>
                <?php }
                    ?>
        </div><!-- #primary -->
    </div><!-- .wrap -->
<?php get_footer();
