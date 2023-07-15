<?php
function kgf_css_and_js(){
    wp_enqueue_style('kgf-fonts','https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap');
    wp_enqueue_Style('kgf-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_enqueue_style('kgf-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
    wp_enqueue_style('kgf-flaticon',get_template_directory_uri().'/lib/flaticon/font/flaticon.css');
    wp_enqueue_style('kgf-animate',get_template_directory_uri().'/lib/animate/animate.min.css');
    wp_enqueue_style('kgf-carouselmain',get_template_directory_uri().'/lib/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style('kgf-carouseldefault',get_template_directory_uri().'/lib/owlcarousel/assets/owl.theme.default.min.css');
    wp_enqueue_style('kgf-style',get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('kgf-styledfggg',get_template_directory_uri().'/css/style.css');        
    wp_enqueue_style('kgf-maincss',get_stylesheet_uri());


  wp_enqueue_script('jquery');
  wp_enqueue_script('kgr-bootstrapcdn','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js',array('jquery'),'',true);
  wp_enqueue_script('kgf-easing',get_template_directory_uri().'/lib/easing/easing.min.js',array('jquery'),'',true);
  wp_enqueue_script('kgf-carouseljs',get_template_directory_uri().'/lib/owlcarousel/owl.carousel.min.js',array('jquery'),'',true);
  wp_enqueue_script('kgf-waypoints',get_template_directory_uri().'/lib/waypoints/waypoints.min.js',array('jquery'),'',true);
  wp_enqueue_script('kgf-counterup',get_template_directory_uri().'/lib/counterup/counterup.min.js',array('jquery'),'',true);
  wp_enqueue_script('kgf-jqBootstr',get_template_directory_uri().'/mail/jqBootstrapValidation.min.js',array('jquery'),'',true);
  wp_enqueue_script('kgf-contact',get_template_directory_uri().'/mail/contact.js',array('jquery'),'',true);
  wp_enqueue_script('kgf-main',get_template_directory_uri().'/js/main.js',array('jquery'),'',true);
}
add_action("wp_enqueue_scripts","kgf_css_and_js");

function admin_support_jquery(){
    wp_enqueue_script('cmb2-condition',get_theme_file_uri('/cmb2/cmb2-condition/cmb2-conditionals.js'));
}
add_action( 'admin_enqueue_scripts','admin_support_jquery' );

function kgftheme(){
    add_theme_support('title-tag');
    add_theme_support('custom-header');   
    add_theme_support('custom-background');    
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
        load_theme_textdomain('kgftheme',get_template_directory().'/language');

    register_nav_menus(array(
        'main-menu'         =>__('Primary manu','kgftheme'),
        'secdary-menu'      =>__('Footer manu','kgftheme'),
        'third-menu'        =>__('Footer Link','kgftheme'),
    ));
  
    function defolt_menu(){
        echo "<ul>";
        if(!is_user_logged_in()){
           echo '<li class="menu-item menu-item-type-post_type"><a href="'.home_url().'">Home</li>';
        }
        else{
            echo '</li class="menu-item menu-item-type-post_type"><a href="wp-admin/nav-menus.php">Create menu</li>';
        }
        echo "</ul>";
    }

}
add_action("after_setup_theme","kgftheme");

// require file for cmb2 custom post type 
    require_once("cmb2/init.php");
    require_once("cmb2/config.php");

//require file for cmb2 custom post type
    require_once("cmb2/cmb2-condition/cmb2-conditionals.php");
    require_once("cmb2/cmb2-condition/config.php");

//require file for tgm plagin add
    require_once("plugins/config.php");



