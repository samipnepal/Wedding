<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


    <div id="fh5co-countdown">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center animate-box">
                <p class="countdown" id="countdown">
                <h1 class="page-title">Thank you for your early information.</h1>
                <h2><?php echo my_theme_send_email(); ?></h2>
                <h3>Will see you on our wedding.</h3>
                <h3>Thank You!!</h3>
                </p>
            </div>
        </div>
    </div>

    <div id="fh5co-started" style="background-image:url(<?php echo get_option('coverImage'); ?>);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center heading-section">
                    <h2>Register Again? </h2>
                    <p>Please Fill-up the form to notify you that you're attending. Thanks.</p>

                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-10 col-md-offset-1">
                    <form class="form-inline" action="" method="post">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="name" class="sr-only">Name</label>
                                <input type="name" class="form-control" id="name" placeholder="Name" required name="name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" required name="email">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <input type="submit" class="btn btn-primary btn-block" value="I am Attending">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();
