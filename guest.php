<?php
/* Template Name: Guest */

get_header(); ?>

    <div id="fh5co-guest">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center heading-section">
                    <h2>The Groomsmen</h2>
                </div>
            </div>
            <div class="row row-bottom-padded-lg">
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="<?php echo get_option('groomMen1'); ?>" class="img-responsive" >
                        <h3><?php echo get_option('groomMen1Name'); ?></h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="<?php echo get_option('groomMen2'); ?>" class="img-responsive">
                        <h3><?php echo get_option('groomMen2Name'); ?></h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="<?php echo get_option('groomMen3'); ?>" class="img-responsive" >
                        <h3><?php echo get_option('groomMen3Name'); ?></h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="<?php echo get_option('groomMen4'); ?>" class="img-responsive" >
                        <h3><?php echo get_option('groomMen4Name'); ?></h3>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center heading-section">
                    <h2>The Bridesmaids</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="<?php echo get_option('brideMen1'); ?>" class="img-responsive">
                        <h3><?php echo get_option('brideMen1Name'); ?></h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="<?php echo get_option('brideMen2'); ?>" class="img-responsive">
                        <h3><?php echo get_option('brideMen2Name'); ?></h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="<?php echo get_option('brideMen3'); ?>" class="img-responsive">
                        <h3><?php echo get_option('brideMen3Name'); ?></h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="<?php echo get_option('brideMen4'); ?>" class="img-responsive" >
                        <h3><?php echo get_option('brideMen4Name'); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();

