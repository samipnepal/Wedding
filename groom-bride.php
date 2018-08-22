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
                        <img src="<?php echo get_option('groomImage'); ?>" class="img-responsive">
                    </div>
                    <div class="col-md-6 nopadding animate-box">
                        <div class="couple-desc">
                            <h3><?php echo get_option('groomName'); ?></h3>
                            <p align="justify"><?php echo get_option('aboutGroom'); ?></p>
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
                        <img src="<?php echo get_option('brideImage'); ?>" class="img-responsive">
                    </div>
                    <div class="col-md-6 col-md-pull-6 nopadding animate-box">
                        <div class="couple-desc">
                            <h3><?php echo get_option('brideName'); ?></h3>
                            <p align="justify"><?php echo get_option('aboutBride'); ?></p>
                            <p class="fh5co-social-icons">
                                <a href="<?php echo get_option('brideFacebookLink'); ?>"><i class="icon-facebook2"></i></a>
                                <a href="<?php echo get_option('brideInstaLink'); ?>"><i class="icon-instagram"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row padding">
                <div class="couple-wrap">
                    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                        <br>
                        <h2>Together Forever</h2>
                    <p alight="justify">Yadab has risen in love with Sita. He adored her the moment he met her; Her charm, her smile, her laughter, her smiplicity drew him closer to Sita. She too has been a passionate lover and now is ready to tie the knot and be his wife forever.</p>
                    </div>                    
                </div>
            </div>
            
            
        </div>
    </div>

<?php get_footer();
