<?php
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
show_admin_bar( false );
wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/dist/scripts.js', array( 'jquery' ), '', true );

add_theme_support( 'post-thumbnails' );

function theme_settings_page(){
    ?>
        <div class="wrap">
            <h1>Theme Panel</h1>
            <form method="post" action="options.php" enctype="multipart/form-data">
                <?php
                settings_fields("section");
                do_settings_sections("theme-options");
                submit_button();
                ?>
            </form>
        </div>
    <?php
}

function add_theme_menu_item()
{
    add_menu_page("Theme Options", "Theme Option", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function groom_name_input()
{
    ?>
    <input type="text" name="groom_name" id="groom_name" value="<?php echo get_option('groom_name'); ?>" />
    <?php
}

function about_groom_input()
{
    ?>
    <textarea name="aboutGroom" id="aboutGroom"  rows="4" cols="50" >
        <?php echo get_option('aboutGroom'); ?>
</textarea>
    <?php
}

function about_bride_input()
{
    ?>
    <textarea name="aboutBride" id="aboutBride"  rows="4" cols="50" >
        <?php echo get_option('aboutBride'); ?>
    </textarea>
    <?php
}

function bride_name_input()
{
    ?>
    <input type="text" name="bride_name" id="bride_name" value="<?php echo get_option('bride_name'); ?>" />
    <?php
}

function location_input()
{
    ?>
    <input type="text" name="location" id="location" value="<?php echo get_option('location'); ?>" />
    <?php
}

function wedding_date_input()
{
    ?>
    <input type="date" name="wedding_date" id="wedding_date" value="<?php echo get_option('wedding_date'); ?>" />
    <?php
}

function party_date_input()
{
    ?>
    <input type="date" name="partyDate" id="partyDate" value="<?php echo get_option('partyDate'); ?>" />
    <?php
}

function party_location_input()
{
    ?>
    <input type="text" name="partyLocation" id="partyLocation" value="<?php echo get_option('partyLocation'); ?>" />
    <?php
}
function color_input()
{
    ?>
    <select name="color" id="color" >
        <option value="<?php echo get_option('color'); ?>">Choose Color</option>
        <option value="#F69D9D" style="background-color: #F69D9D;">Pink</option>
        <option value="#006400" style="background-color: DarkGreen;color: #ffffff;">DarkGreen</option>
        <option value="#008000" style="background-color: Green;color: #ffffff;">Green</option>
        <option value="#9ACD32" style="background-color: YellowGreen;">YellowGreen</option>
        <option value="#FF0000" style="background-color: Red;">Red</option>
        <option value="#A52A2A" style="background-color: Brown;">Brown</option>
        <option value="#DEB887" style="background-color: BurlyWood;">BurlyWood</option>
    </select>
    <p style="background-color: <?php if(get_option('color')=== ''){
        echo '#F69D9D';
    } else {
        echo get_option('color');
    } ?>; height: 20px; width: 20px; float: left " > </p>
    <?php
}
function groom_image_upload()
{
    wp_enqueue_script('jquery');
    wp_enqueue_media();
    ?>
    <input type="text" name="groomImage" id="groomImage" class="regular-text" value="<?php echo get_option('groomImage'); ?>" hidden>
    <input type="button" name="upload-groomImage-btn" id="upload-groomImage-btn" class="button-secondary" value="Upload Image">
    <img id="imgSrcGroom" src="<?php echo get_option('groomImage'); ?>" width="150px">
    <script  type="text/javascript">
        jQuery(document).ready(function($){
            $('#upload-groomImage-btn').click(function(e) {
                e.preventDefault();
                var image = wp.media({
                    title: 'Upload Image',
                    multiple: false
                }).open()
                    .on('select', function(e){
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        $('#groomImage').val(image_url);
                        $("#imgSrcGroom").attr("src",image_url);
                    });
            });
        });
    </script>

    <?php
}
function wedding_venue_upload()
{
    wp_enqueue_script('jquery');
    wp_enqueue_media();
    ?>
    <input type="text" name="weddingVenue" id="weddingVenue" class="regular-text" value="<?php echo get_option('weddingVenue'); ?>" hidden>
    <input type="button" name="upload-weddingVenue-btn" id="upload-weddingVenue-btn" class="button-secondary" value="Upload Image">
    <img id="imgSrcWeddingVenue" src="<?php echo get_option('weddingVenue'); ?>" width="150px">
    <script  type="text/javascript">
        jQuery(document).ready(function($){
            $('#upload-weddingVenue-btn').click(function(e) {
                e.preventDefault();
                var image = wp.media({
                    title: 'Upload Image',
                    multiple: false
                }).open()
                    .on('select', function(e){
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        $('#weddingVenue').val(image_url);
                        $("#imgSrcWeddingVenue").attr("src",image_url);
                    });
            });
        });
    </script>

    <?php
}
function party_venue_upload()
{
    wp_enqueue_script('jquery');
    wp_enqueue_media();
    ?>
    <input type="text" name="partyVenue" id="partyVenue" class="regular-text" value="<?php echo get_option('partyVenue'); ?>" hidden>
    <input type="button" name="upload-partyVenue-btn" id="upload-partyVenue-btn" class="button-secondary" value="Upload Image">
    <img id="imgSrcPartyVenue" src="<?php echo get_option('partyVenue'); ?>" width="150px">
    <script  type="text/javascript">
        jQuery(document).ready(function($){
            $('#upload-partyVenue-btn').click(function(e) {
                e.preventDefault();
                var image = wp.media({
                    title: 'Upload Image',
                    multiple: false
                }).open()
                    .on('select', function(e){
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        $('#partyVenue').val(image_url);
                        $("#imgSrcPartyVenue").attr("src",image_url);
                    });
            });
        });
    </script>

    <?php
}
function bride_image_upload()
{
    wp_enqueue_script('jquery');
    wp_enqueue_media();
    ?>
    <input type="text" name="brideImage" id="brideImage" class="regular-text" value="<?php echo get_option('brideImage'); ?>" hidden>
    <input type="button" name="upload-brideImage-btn" id="upload-brideImage-btn" class="button-secondary" value="Upload Image">
    <img id="imgSrcBride" src="<?php echo get_option('brideImage'); ?>" width="150px">
    <script type="text/javascript">
        jQuery(document).ready(function($){
            $('#upload-brideImage-btn').click(function(e) {
                e.preventDefault();
                var image = wp.media({
                    title: 'Upload Image',
                    multiple: false
                }).open()
                    .on('select', function(e){
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        $('#brideImage').val(image_url);
                        $("#imgSrcBride").attr("src",image_url);
                    });
            });
        });
    </script>

    <?php
}

function cover_image_upload()
{
    wp_enqueue_script('jquery');
    wp_enqueue_media();
    ?>
    <input type="text" name="coverImage" id="coverImage" class="regular-text" value="<?php echo get_option('coverImage'); ?>" hidden>
    <input type="button" name="upload-coverImage-btn" id="upload-coverImage-btn" class="button-secondary" value="Upload Image">
    <img id="imgSrcCover" src="<?php echo get_option('coverImage'); ?>" width="150px">
    <script type="text/javascript">
        jQuery(document).ready(function($){
            $('#upload-coverImage-btn').click(function(e) {
                e.preventDefault();
                var image = wp.media({
                    title: 'Upload Image',
                    multiple: false
                }).open()
                    .on('select', function(e){
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        $('#coverImage').val(image_url);
                        $("#imgSrcCover").attr("src",image_url);
                    });
            });
        });
    </script>

    <?php
}

function groom_men1_name()
{
    ?>
    <input type="text" name="groomMen1Name" id="groomMen1Name" value="<?php echo get_option('groomMen1Name'); ?>" />
    <?php
}
function groom_men2_name()
{
    ?>
    <input type="text" name="groomMen2Name" id="groomMen2Name" value="<?php echo get_option('groomMen2Name'); ?>" />
    <?php
}
function groom_men3_name()
{
    ?>
    <input type="text" name="groomMen3Name" id="groomMen3Name" value="<?php echo get_option('groomMen3Name'); ?>" />
    <?php
}
function groom_men4_name()
{
    ?>
    <input type="text" name="groomMen4Name" id="groomMen4Name" value="<?php echo get_option('groomMen4Name'); ?>" />
    <?php
}
function bride_men1_name()
{
    ?>
    <input type="text" name="brideMen1Name" id="brideMen1Name" value="<?php echo get_option('brideMen1Name'); ?>" />
    <?php
}
function bride_men2_name()
{
    ?>
    <input type="text" name="brideMen2Name" id="brideMen2Name" value="<?php echo get_option('brideMen2Name'); ?>" />
    <?php
}
function bride_men3_name()
{
    ?>
    <input type="text" name="brideMen3Name" id="brideMen3Name" value="<?php echo get_option('brideMen3Name'); ?>" />
    <?php
}
function bride_men4_name()
{
    ?>
    <input type="text" name="brideMen4Name" id="brideMen4Name" value="<?php echo get_option('brideMen4Name'); ?>" />
    <?php
}

function map_latitude()
{
    ?>
    <input type="number" name="mapLatitude" id="mapLatitude" value="<?php echo get_option('mapLatitude'); ?>" step="any"/>
    <?php
}

function map_longitude()
{
    ?>
    <input type="number" name="mapLongitude" id="mapLongitude" value="<?php echo get_option('mapLongitude'); ?>" step="any"/>
    <?php
}

function groom_men1_upload()
{
    wp_enqueue_script('jquery');
    wp_enqueue_media();
    ?>
    <input type="text" name="groomMen1" id="groomMen1" class="regular-text" value="<?php echo get_option('groomMen1'); ?>" hidden>
    <input type="button" name="upload-groomMen1-btn" id="upload-groomMen1-btn" class="button-secondary" value="Upload Image">
    <img id="imgSrcGroomMen1" src="<?php echo get_option('groomMen1'); ?>" width="150px">
    <script  type="text/javascript">
        jQuery(document).ready(function($){
            $('#upload-groomMen1-btn').click(function(e) {
                e.preventDefault();
                var image = wp.media({
                    title: 'Upload Image',
                    multiple: false
                }).open()
                    .on('select', function(e){
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        $('#groomMen1').val(image_url);
                        $("#imgSrcGroomMen1").attr("src",image_url);
                    });
            });
        });
    </script>

    <?php
}

function groom_men2_upload()
{
    wp_enqueue_script('jquery');
    wp_enqueue_media();
    ?>
    <input type="text" name="groomMen2" id="groomMen2" class="regular-text" value="<?php echo get_option('groomMen2'); ?>" hidden>
    <input type="button" name="upload-groomMen2-btn" id="upload-groomMen2-btn" class="button-secondary" value="Upload Image">
    <img id="imgSrcGroomMen2" src="<?php echo get_option('groomMen2'); ?>" width="150px">
    <script  type="text/javascript">
        jQuery(document).ready(function($){
            $('#upload-groomMen2-btn').click(function(e) {
                e.preventDefault();
                var image = wp.media({
                    title: 'Upload Image',
                    multiple: false
                }).open()
                    .on('select', function(e){
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        $('#groomMen2').val(image_url);
                        $("#imgSrcGroomMen2").attr("src",image_url);
                    });
            });
        });
    </script>

    <?php
}

function groom_men3_upload()
{
    wp_enqueue_script('jquery');
    wp_enqueue_media();
    ?>
    <input type="text" name="groomMen3" id="groomMen3" class="regular-text" value="<?php echo get_option('groomMen3'); ?>" hidden>
    <input type="button" name="upload-groomMen3-btn" id="upload-groomMen3-btn" class="button-secondary" value="Upload Image">
    <img id="imgSrcGroomMen3" src="<?php echo get_option('groomMen3'); ?>" width="150px">
    <script  type="text/javascript">
        jQuery(document).ready(function($){
            $('#upload-groomMen3-btn').click(function(e) {
                e.preventDefault();
                var image = wp.media({
                    title: 'Upload Image',
                    multiple: false
                }).open()
                    .on('select', function(e){
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        $('#groomMen3').val(image_url);
                        $("#imgSrcGroomMen3").attr("src",image_url);
                    });
            });
        });
    </script>

    <?php
}

function groom_men4_upload()
{
    wp_enqueue_script('jquery');
    wp_enqueue_media();
    ?>
    <input type="text" name="groomMen4" id="groomMen4" class="regular-text" value="<?php echo get_option('groomMen4'); ?>" hidden>
    <input type="button" name="upload-groomMen4-btn" id="upload-groomMen4-btn" class="button-secondary" value="Upload Image">
    <img id="imgSrcGroomMen4" src="<?php echo get_option('groomMen4'); ?>" width="150px">
    <script  type="text/javascript">
        jQuery(document).ready(function($){
            $('#upload-groomMen4-btn').click(function(e) {
                e.preventDefault();
                var image = wp.media({
                    title: 'Upload Image',
                    multiple: false
                }).open()
                    .on('select', function(e){
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        $('#groomMen4').val(image_url);
                        $("#imgSrcGroomMen4").attr("src",image_url);
                    });
            });
        });
    </script>
    <?php
}

function bride_men1_upload()
{
    wp_enqueue_script('jquery');
    wp_enqueue_media();
    ?>
    <input type="text" name="brideMen1" id="brideMen1" class="regular-text" value="<?php echo get_option('brideMen1'); ?>" hidden>
    <input type="button" name="upload-brideMen1-btn" id="upload-brideMen1-btn" class="button-secondary" value="Upload Image">
    <img id="imgSrcBrideMen1" src="<?php echo get_option('brideMen1'); ?>" width="150px">
    <script  type="text/javascript">
        jQuery(document).ready(function($){
            $('#upload-brideMen1-btn').click(function(e) {
                e.preventDefault();
                var image = wp.media({
                    title: 'Upload Image',
                    multiple: false
                }).open()
                    .on('select', function(e){
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        $('#brideMen1').val(image_url);
                        $("#imgSrcBrideMen1").attr("src",image_url);
                    });
            });
        });
    </script>

    <?php
}

function bride_men2_upload()
{
    wp_enqueue_script('jquery');
    wp_enqueue_media();
    ?>
    <input type="text" name="brideMen2" id="brideMen2" class="regular-text" value="<?php echo get_option('brideMen2'); ?>" hidden>
    <input type="button" name="upload-brideMen2-btn" id="upload-brideMen2-btn" class="button-secondary" value="Upload Image">
    <img id="imgSrcBrideMen2" src="<?php echo get_option('brideMen2'); ?>" width="150px">
    <script  type="text/javascript">
        jQuery(document).ready(function($){
            $('#upload-brideMen2-btn').click(function(e) {
                e.preventDefault();
                var image = wp.media({
                    title: 'Upload Image',
                    multiple: false
                }).open()
                    .on('select', function(e){
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        $('#brideMen2').val(image_url);
                        $("#imgSrcBrideMen2").attr("src",image_url);
                    });
            });
        });
    </script>

    <?php
}

function bride_men3_upload()
{
    wp_enqueue_script('jquery');
    wp_enqueue_media();
    ?>
    <input type="text" name="brideMen3" id="brideMen3" class="regular-text" value="<?php echo get_option('brideMen3'); ?>" hidden>
    <input type="button" name="upload-brideMen3-btn" id="upload-brideMen3-btn" class="button-secondary" value="Upload Image">
    <img id="imgSrcBrideMen3" src="<?php echo get_option('brideMen3'); ?>" width="150px">
    <script  type="text/javascript">
        jQuery(document).ready(function($){
            $('#upload-brideMen3-btn').click(function(e) {
                e.preventDefault();
                var image = wp.media({
                    title: 'Upload Image',
                    multiple: false
                }).open()
                    .on('select', function(e){
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        $('#brideMen3').val(image_url);
                        $("#imgSrcBrideMen3").attr("src",image_url);
                    });
            });
        });
    </script>

    <?php
}

function bride_men4_upload()
{
    wp_enqueue_script('jquery');
    wp_enqueue_media();
    ?>
    <input type="text" name="brideMen4" id="brideMen4" class="regular-text" value="<?php echo get_option('brideMen4'); ?>" hidden>
    <input type="button" name="upload-brideMen4-btn" id="upload-brideMen4-btn" class="button-secondary" value="Upload Image">
    <img id="imgSrcBrideMen4" src="<?php echo get_option('brideMen4'); ?>" width="150px">
    <script  type="text/javascript">
        jQuery(document).ready(function($){
            $('#upload-brideMen4-btn').click(function(e) {
                e.preventDefault();
                var image = wp.media({
                    title: 'Upload Image',
                    multiple: false
                }).open()
                    .on('select', function(e){
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        $('#brideMen4').val(image_url);
                        $("#imgSrcBrideMen4").attr("src",image_url);
                    });
            });
        });
    </script>

    <?php
}


function display_theme_panel_fields()
{
    add_settings_section("section", "All Settings", null, "theme-options");

    add_settings_field("groom_name", "Groom First Name", "groom_name_input", "theme-options", "section");
    add_settings_field("bride_name", "Bride First Name", "bride_name_input", "theme-options", "section");
    add_settings_field("aboutGroom", "About Groom", "about_groom_input", "theme-options", "section");
    add_settings_field("aboutBride", "About Bride", "about_bride_input", "theme-options", "section");
    add_settings_field("wedding_date", "Wedding Date", "wedding_date_input", "theme-options", "section");
    add_settings_field("location", "Location", "location_input", "theme-options", "section");
    add_settings_field("coverImage", "Cover Image", "cover_image_upload", "theme-options", "section");
    add_settings_field("color", "Theme Color", "color_input", "theme-options", "section");
    add_settings_field("groomImage", "Groom Image", "groom_image_upload", "theme-options", "section");
    add_settings_field("brideImage", "Bride Image", "bride_image_upload", "theme-options", "section");
    add_settings_field("groomMen1Name", "Groom Men 1 Name", "groom_men1_name", "theme-options", "section");
    add_settings_field("groomMen1", "Groom Men 1", "groom_men1_upload", "theme-options", "section");
    add_settings_field("groomMen2Name", "Groom Men 2 Name", "groom_men2_name", "theme-options", "section");
    add_settings_field("groomMen2", "Groom Men 2", "groom_men2_upload", "theme-options", "section");
    add_settings_field("groomMen3Name", "Groom Men 3 Name", "groom_men3_name", "theme-options", "section");
    add_settings_field("groomMen3", "Groom Men 3", "groom_men3_upload", "theme-options", "section");
    add_settings_field("groomMen4Name", "Groom Men 4 Name", "groom_men4_name", "theme-options", "section");
    add_settings_field("groomMen4", "Groom Men 4", "groom_men4_upload", "theme-options", "section");
    add_settings_field("bideMen1Name", "Bride Men 1 Name", "bride_men1_name", "theme-options", "section");
    add_settings_field("brideMen1", "Bride Men 1", "bride_men1_upload", "theme-options", "section");
    add_settings_field("bideMen2Name", "Bride Men 2 Name", "bride_men2_name", "theme-options", "section");
    add_settings_field("brideMen2", "Bride Men 2", "bride_men2_upload", "theme-options", "section");
    add_settings_field("bideMen3Name", "Bride Men 3 Name", "bride_men3_name", "theme-options", "section");
    add_settings_field("brideMen3", "Bride Men 3", "bride_men3_upload", "theme-options", "section");
    add_settings_field("bideMen4Name", "Bride Men 4 Name", "bride_men4_name", "theme-options", "section");
    add_settings_field("brideMen4", "Bride Men 4", "bride_men4_upload", "theme-options", "section");
    add_settings_field("mapLatitude", "Map Latitude", "map_latitude", "theme-options", "section");
    add_settings_field("mapLongitude", "Map Longitude", "map_longitude", "theme-options", "section");
    add_settings_field("weddingVenue", "Wedding Venue Image", "wedding_venue_upload", "theme-options", "section");
    add_settings_field("partyVenue", "Party Venue Image", "party_venue_upload", "theme-options", "section");
    add_settings_field("partyDate", "Party Date", "party_date_input", "theme-options", "section");
    add_settings_field("partyLocation", "Party Location", "party_location_input", "theme-options", "section");

    register_setting("section", "weddingVenue");
    register_setting("section", "partyVenue");
    register_setting("section", "groomImage");
    register_setting("section", "brideImage");
    register_setting("section", "coverImage");
    register_setting("section", "aboutGroom");
    register_setting("section", "aboutBride");
    register_setting("section", "groom_name");
    register_setting("section", "bride_name");
    register_setting("section", "wedding_date");
    register_setting("section", "color");
    register_setting("section", "location");
    register_setting("section", "groomMen1");
    register_setting("section", "groomMen2");
    register_setting("section", "groomMen3");
    register_setting("section", "groomMen4");
    register_setting("section", "brideMen1");
    register_setting("section", "brideMen2");
    register_setting("section", "brideMen3");
    register_setting("section", "brideMen4");
    register_setting("section", "groomMen1Name");
    register_setting("section", "groomMen2Name");
    register_setting("section", "groomMen3Name");
    register_setting("section", "groomMen4Name");
    register_setting("section", "brideMen1Name");
    register_setting("section", "brideMen2Name");
    register_setting("section", "brideMen3Name");
    register_setting("section", "brideMen4Name");
    register_setting("section", "mapLatitude");
    register_setting("section", "mapLongitude");
    register_setting("section", "partyDate");
    register_setting("section", "partyLocation");
}

add_action("admin_init", "display_theme_panel_fields");

