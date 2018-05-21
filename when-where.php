<?php
/* Template Name: When & Where */

get_header(); ?>

    <div id="fh5co-when-where" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h2>When &amp; Where</h2>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-6 text-center animate-box">
                    <div class="wedding-events">
                        <div class="ceremony-bg" style="background-image: url( <?php echo get_option('weddingVenue'); ?>);"></div>
                        <div class="desc">
                            <h3>Wedding Ceremony</h3>
                            <p><strong><?php echo get_option('wedding_date'); ?>, <?php echo get_option('location'); ?></strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center animate-box">
                    <div class="wedding-events">
                        <div class="ceremony-bg" style="background-image: url( <?php echo get_option('partyVenue'); ?>);"></div>
                        <div class="desc">
                            <h3>Wedding Party</h3>
                            <p><strong><?php echo get_option('partyDate'); ?>, <?php echo get_option('partyLocation'); ?></strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <input type="text" value="<?php echo get_option('mapLongitude'); ?>" id="mapLongitude" hidden>
                <input type="text" value="<?php echo get_option('mapLatitude'); ?>" id="mapLatitude" hidden>
                <div class="col-md-12">
                    <div id="map" class="fh5co-map"></div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();

