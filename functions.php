<?php

function mamix() {

    add_theme_support('title-tag');
    add_theme_support('custom-header', array('default-image' => get_template_directory_uri() . '/img/bg/bg-1.jpg'));
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails');

    register_nav_menu('main_menu', 'Main Menu');
    
    function default_main_menu(){
        echo '<ul class="nav navbar-nav">';
        echo '<li><a href="'. home_url() .'/wp-admin/nav-menus.php">CREATE A MENU</a></li>';
        echo '</ul>';
    }


    register_post_type('services_post', array(
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => 'Add New Services'
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon'=>'dashicons-admin-settings',  
    ));

    register_post_type('blog', array(
        'labels' => array(
            'name' => 'Blog',
            'add_new_item' => 'Add New Blog'
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon'=>'dashicons-format-gallery',
        
    ));


    
    register_post_type('team', array(
        'labels' => array(
            'name' => 'Team Member',
            'add_new_item' => 'Add New Team Member',
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon'=>'dashicons-admin-users',
    ));
}

add_action('after_setup_theme', 'mamix');

//register siderbar
function sidebar(){
    register_sidebar(array(
        'name'=>'Single Page Right Sidebar',
        'id'=>'rightsidebr',
        'desc'=>'You May Add Right Sidebar Here',
        'before_widget'=>'',
        'after_widget'=>'</h5>',
        'before_title'=>'<h2>',
        'after_title'=>'</h2><h5>'
    ));
}
add_action('widgets_init','sidebar');

//customizer option

function customize_services($serviecs) {
    $serviecs->add_section('services', array(
        'title' => 'Services'
    ));

    $serviecs->add_setting('services_title', array(
        'default' => 'Services',
        'transport' => 'refresh',
    ));
    $serviecs->add_control('services_title', array(
        'label' => 'Title',
        'section'=>'services',
        'setting'=>'services_title',
        'type'=>'text',
    ));

     $serviecs->add_setting('title_color', array(
        'default' => 'white',
        'transport' => 'refresh'
    ));
    $serviecs->add_control('title_color', array(
        'label' => 'Title Color',
        'section' => 'services',
        'setting' => 'title_color',
        'type' => 'color'
    ));

    $serviecs->add_setting('custom_services', array(
        'default' => '#dd8233',
        'transport' => 'refresh'
    ));
    $serviecs->add_control('custom_services', array(
        'label' => 'Background Color',
        'section' => 'services',
        'setting' => 'custom_services',
        'type' => 'color'
    ));


    $serviecs->add_setting('box_color', array(
        'default' => '#dd8233',
        'transport' => 'refresh'
    ));
    $serviecs->add_control('box_color', array(
        'label' => 'Box Background Color',
        'section' => 'services',
        'setting' => 'box_color',
        'type' => 'color'
    ));
}

add_action('customize_register', 'customize_services');

function custom_team($cutomteam){
    $cutomteam -> add_section('cutomteam',array(
        'title'=>'Our Team'
    ));
    
    $cutomteam-> add_setting('teamtitle',array(
       'default'=>'Who We Are',
        'transport'=>'refresh',
    ));
    $cutomteam -> add_control('teamtitle',array(
        'label'=>'Title Text',
        'type'=>'text',
        'setting'=>'teamtitle',
        'section' =>'cutomteam',
    ));
    
     $cutomteam-> add_setting('teamimge',array(
       'default'=>'',
        'transport'=>'refresh',
    ));
    $cutomteam -> add_control(
         new WP_Customize_Image_Control( $cutomteam,'teamimge',array(
        'label'=>'Image',
        'setting'=>'teamimge',
        'section' =>'cutomteam',
    )));
}
add_action('customize_register','custom_team');

//custom meta box

function designation(){
    add_meta_box(
            'designation',
            'You May Add Designation',
            'meta_output',
            'team',
            'normal'
            );
}
add_action('add_meta_boxes','designation');

function meta_output($post){
   ?>
<label for="desig">Designation</label>
<p><input type="text" id="desig" value="<?php echo get_post_meta($post->ID,'designation',true) ?>" name="designation" class="widefat"></p>
<?php
}

function database_connect($post_id){
    update_post_meta($post_id,'designation',$_POST[designation]);
}
add_action('save_post','database_connect');
function add_css_js() {

    wp_register_style('responsive', get_template_directory_uri() . '/css/bootstrap-responsive.css');
    wp_register_style('style', get_template_directory_uri() . '/css/style.css');
    wp_register_style('color', get_template_directory_uri() . '/color/default.css');


    wp_register_script('scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo.js');
    wp_register_script('jquerynav', get_template_directory_uri() . '/js/jquery.nav.js');
    wp_register_script('localscroll', get_template_directory_uri() . '/js/jquery.localscroll-1.2.7-min.js');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js');
    wp_register_script('prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js');
    wp_register_script('isotope', get_template_directory_uri() . '/js/isotope.js');
    wp_register_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js');
    wp_register_script('inview', get_template_directory_uri() . '/js/inview.js');
    wp_register_script('animate', get_template_directory_uri() . '/js/animate.js');
    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js');
    wp_register_script('contactform', get_template_directory_uri() . '/contactform/contactform.js');

    wp_enqueue_style(array('responsive', 'style', 'color'));

    wp_enqueue_script('jquery');
    wp_enqueue_script(array('scrollTo', 'jquerynav', 'localscroll', 'bootstrap', 'isotope', 'prettyPhoto', 'flexslider', 'inview', 'animate', 'custom', 'contactform'));
}

add_action('wp_enqueue_scripts', 'add_css_js');


require ('navwalker.php');
require_once ('inc/redux/ReduxCore/framework.php');
require_once ('inc/redux/sample/sample.php');
require_once ('sortcode.php');

