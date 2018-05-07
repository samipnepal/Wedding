<?php
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
show_admin_bar( false );

function theme_settings_page(){
    ?>
        <div class="wrap">
            <h1>Theme Panel</h1>
            <form method="post" action="options.php">
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
function groom_image_upload()
{
    ?>
    <input type="file" name="groom_image" />
    <?php echo get_option('groom_image'); ?>
    <?php
}

function handle_logo_upload()
{
    if(!empty($_FILES["demo-file"]["tmp_name"]))
    {
        $urls = wp_handle_upload($_FILES["groom_image"], array('test_form' => FALSE));
        $temp = $urls["url"];
        return $temp;
    }

    return $option;
}

function display_theme_panel_fields()
{
    add_settings_section("section", "All Settings", null, "theme-options");

    add_settings_field("groom_name", "Groom Name", "groom_name_input", "theme-options", "section");
    add_settings_field("bride_name", "Bride Name", "bride_name_input", "theme-options", "section");
    add_settings_field("wedding_date", "Wedding Date", "wedding_date_input", "theme-options", "section");
    add_settings_field("location", "Location", "location_input", "theme-options", "section");
    add_settings_field("groom_image", "Groom Image", "groom_image_upload", "theme-options", "section");

    register_setting("section", "groom_name");
    register_setting("section", "bride_name");
    register_setting("section", "wedding_date");
    register_setting("section", "location");
    register_setting("section", "groom_image", "handle_logo_upload");
}

add_action("admin_init", "display_theme_panel_fields");

add_theme_support( 'post-thumbnails' ); //Adds thumbnails compatibility to the theme
