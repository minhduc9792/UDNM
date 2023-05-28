<?php
/*
Plugin Name: Thay logo trang login
Description: Thay logo trang login
Author: tman
Version: 0.1
*/
function my_login_logo()
{
    $logo = get_theme_mod('login_logo');
    
?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url(<?php echo $logo ?>);
            height: 120px;
            width: 120px;
            background-size: cover;
            background-repeat: no-repeat;

        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');


function customize_login_page_register($wp_customize)
{
    $wp_customize->add_section('login_extras_section', array(
        'title' => 'Login page'
    ));
    $wp_customize->add_setting('login_logo', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'ic_sanitize_image',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'login_logo',
        array(
            'label' => __('Upload Login Logo', 'storefront'),
            'description' => __('Height: &gt; 60px', 'storefront'),
            'section' => 'login_extras_section',
            'settings' => 'login_logo',
            'priority' => 1,
        )
    ));
}
add_action('customize_register', 'customize_login_page_register');

?>