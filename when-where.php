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

    <script>
        function initMap() {
            var latitude = document.getElementById("mapLatitude").value;
            var longitude = document.getElementById("mapLongitude").value;
            var uluru = {lat: parseFloat(latitude), lng: parseFloat(longitude)};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARXjqUvxb9M5JmbqpwvtV79Lkb9g2JmRk &callback=initMap">
    </script>

<?php get_footer();

