<?php
/* Template Name: Groom & Bride */

get_header(); ?>

    <div id="fh5co-groom-bride">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h2>Groom &amp; Bride</h2>
                </div>
            </div>
            <div class="row padding">
                <div class="couple-wrap">
                    <div class="col-md-6 nopadding animate-box">
                        <img src="<?php echo get_option('groomImage'); ?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                    </div>
                    <div class="col-md-6 nopadding animate-box">
                        <div class="couple-desc">
                            <h3><?php echo get_option('groomName'); ?></h3>
                            <p><?php echo get_option('aboutGroom'); ?></p>
                            <p class="fh5co-social-icons">
                                <a href="<?php echo get_option('groomFacebookLink'); ?>"><i class="icon-facebook2"></i></a>
                                <a href="<?php echo get_option('groomInstaLink'); ?>"><i class="icon-instagram"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row padding">
                <div class="couple-wrap">
                    <div class="col-md-6 col-md-push-6 nopadding animate-box">
                        <img src="<?php echo get_option('brideImage'); ?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                    </div>
                    <div class="col-md-6 col-md-pull-6 nopadding animate-box">
                        <div class="couple-desc">
                            <h3><?php echo get_option('brideName'); ?></h3>
                            <p><?php echo get_option('aboutBride'); ?></p>
                            <p class="fh5co-social-icons">
                                <a href="<?php echo get_option('brideFacebookLink'); ?>"><i class="icon-facebook2"></i></a>
                                <a href="<?php echo get_option('brideInstaLink'); ?>"><i class="icon-instagram"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
