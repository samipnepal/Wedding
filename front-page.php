<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <!-- end:header-top -->

    <div id="fh5co-couple" class="fh5co-section-gray">
        <div class="container">
            <div class="row row-bottom-padded-md animate-box">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                        <img src="<?php echo get_template_directory_uri() . '/images/groom.jpg' ?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                        <h3><?php echo get_option('groom_name'); ?></h3>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><h2 class="amp-center"><i class="icon-heart"></i></h2></div>
                    <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                        <img src="<?php echo get_template_directory_uri() . '/images/bride.jpg' ?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                        <h3><?php echo get_option('bride_name'); ?></h3>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center heading-section">
                        <h2>Are Getting Married</h2>
                        <p><strong>on <?php echo get_option('wedding_date'); ?> &mdash; Boracay, Philippines</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-countdown">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center animate-box">
                <p class="countdown">
                    <span id="days"></span>
                    <span id="hours"></span>
                    <span id="minutes"></span>
                    <span id="seconds"></span>
                </p>
            </div>
        </div>
    </div>

    <div id="fh5co-started" style="background-image:url(<?php echo get_template_directory_uri() . '/images/cover_bg_2.jp' ?>);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center heading-section">
                    <h2>Are You Attending?</h2>
                    <p>Please Fill-up the form to notify you that you're attending. Thanks.
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-10 col-md-offset-1">
                    <form class="form-inline">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="name" class="sr-only">Name</label>
                                <input type="name" class="form-control" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <button type="submit" class="btn btn-primary btn-block">I am Attending</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();

