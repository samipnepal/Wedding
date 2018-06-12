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
                        <img src="<?php echo get_option('groomImage'); ?>" class="img-responsive">
                        <h3><?php echo get_option('groom_name'); ?></h3>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><h2 class="amp-center"><i class="icon-heart"></i></h2></div>
                    <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                        <img src="<?php echo get_option('groomImage'); ?>" class="img-responsive">
                        <h3><?php echo get_option('bride_name'); ?></h3>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center heading-section">
                        <h2>Are Getting Married</h2>
                        <p><strong>on <?php echo get_option('wedding_date'); ?> &mdash; <?php echo get_option('location'); ?></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-countdown">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center animate-box">
                <input type="date" name="weddingDate" id="weddingDate" value="<?php echo get_option('wedding_date'); ?>" hidden />
                <p class="countdown" id="countdown">
                    <span id="days"></span>
                    <span id="hours"></span>
                    <span id="minutes"></span>
                    <span id="seconds"></span>
                </p>
            </div>
        </div>
    </div>

    <div id="fh5co-started" style="background-image:url(<?php echo get_option('coverImage'); ?>);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center heading-section">
                    <h2>Are You Attending? </h2>
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

<?php /*echo get_template_directory_uri() . '/attendance.php' */?>

    <script>

        var weddingDate = document.getElementById("weddingDate").value;

        // Set the date we're counting down to
        var countDownDate = new Date(weddingDate + " 00:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {


            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in an element with id="demo"
            // document.getElementById("demo").innerHTML = days + "Days " + hours + "Hours "
            // + minutes + "Minutes " + seconds + "Seconds ";

            // Display the result in an element with id="demo"

            document.getElementById("days").innerHTML = days +" <small>days</small>";
            document.getElementById("hours").innerHTML = hours + " <small>hours</small> ";
            document.getElementById("minutes").innerHTML = minutes + " <small>minutes</small> ";
            document.getElementById("seconds").innerHTML = seconds + " <small>seconds</small> ";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "The Wedding Ceremony is Over";
            }
        }, 1000);

    </script>
<?php get_footer();

