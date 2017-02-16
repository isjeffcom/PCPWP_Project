<?php
/**
 * MyFirstTheme's functions and definitions
 *
 * @package LiveFACE_Portfolio
 * @since LiveFACE_Portfolio 0.1
 */

 /**
  *
  * Functions used to generate post excerpt
  *
  * @return HTML output
  *
  **/

//Load Main CSS
function liveface_load_styles() {
  // Add Common css.
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  // Add Index css.
  wp_enqueue_style('liveface-css-index', get_template_directory_uri() . '/asset/css/index.css', false, '1.5.2');

  // Add Animate css
  wp_enqueue_style('liveface-css-animate', get_template_directory_uri() . '/asset/css/animate.css', false, '1.5.2');

  // Add Video css
  wp_enqueue_style('liveface-css-video', get_template_directory_uri() . '/asset/css/video.css', false, '1.5.2');

  // Add Font-awesome css
  wp_enqueue_style('liveface-css-font-awesome', get_template_directory_uri() . '/asset/css/font-awesome.min.css', false, '1.1');

}

add_action( 'wp_enqueue_scripts', 'liveface_load_styles' );

function liveface_post_load_styles(){
  if(is_singular('post') || is_singular('page')){
    // Add Post css
    wp_enqueue_style('liveface-css-post', get_template_directory_uri() . '/asset/css/post.css', false, '2.2.3');

    // Add Common css.
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // Add Font-awesome css
    wp_enqueue_style('liveface-css-font-awesome', get_template_directory_uri() . '/asset/css/font-awesome.min.css', false, '1.0');
  }
}
add_action( 'wp_enqueue_scripts', 'liveface_post_load_styles' );

//Register Menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

//Remove Amin Topbar
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

//Add Featured Image support
add_theme_support('post-thumbnails');
the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('large');           // Large resolution (default 640px x 640px max)
the_post_thumbnail('full');            // Original image resolution (unmodified)
add_image_size('featuredImageCropped', 1920, 1080, true);
the_post_thumbnail('featuredImageCropped');

//Theme Custom Settings{




function liveface_customize_register( $wp_customize ) {

    $wp_customize->remove_section( 'custom_css' );
    $wp_customize->remove_section(  'static_front_page' );

    //Background Video Start
    $wp_customize->add_section('bg_image', array(
    'title' => 'Background Image',
    'description' => 'Add a background image to home page. Require a 3840x2160 image. Recommend to compress your image by using TinyPNG.com ',
    'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('bg_image', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'absint'
    ));

    //Background Video Upload
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'bg_image', array(
    'section' => 'bg_image',
    'label' => 'Background Image. 3840x2160',
    'mime_type' => 'audio'
    )));

    //Background Video Start
    $wp_customize->add_section('bg_video', array(
    'title' => 'Intro Video',
    'description' => 'Add a self Intro video to home page. For other source link, leave it blank if you do not want to display.',
    'capability' => 'edit_theme_options'
    ));

    //Background Video Setting
    $wp_customize->add_setting('bg_video', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'absint'
    ));

    //Background Video Upload
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'bg_video', array(
    'section' => 'bg_video',
    'label' => 'Background Video',
    'mime_type' => 'audio'
    )));

    //Background Video Youtube Link Setting
    $wp_customize->add_setting('youtube_link', array(
      'type' => 'theme_mod',
      'default' => '#',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
    ));

    //Background Video Youtube Link Input Box
    $wp_customize->add_control('youtube_link', array(
      'label' => __('Youtube URL', 'LiveFACE'),
      'section' => 'bg_video',
      'priority' => 15,
      'settings' => 'youtube_link'
    ));

    //Background Video Tentcent Video Link Setting
    $wp_customize->add_setting('tencent_video_link', array(
      'type' => 'theme_mod',
      'default' => '#',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
    ));

    //Background Video Tentcent Video Link Input Box
    $wp_customize->add_control('tencent_video_link', array(
      'label' => __('Tencent Video', 'LiveFACE'),
      'section' => 'bg_video',
      'priority' => 15,
      'settings' => 'tencent_video_link'
    ));

    //Profile Picture Start
    $wp_customize->add_section('bg_profilePic', array(
    'title' => 'Profile Picture',
    'description' => 'Your profile picture',
    'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('bg_profilePic', array(
      'type' => 'theme_mod',
      'default' => '#',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'bg_profilePic', array(
    'section' => 'bg_profilePic',
    'label' => 'Make sure Image Height = Width',
    'mime_type' => 'audio'
    )));

    //Big Index Text Start
    $wp_customize->add_section('bg_bigText', array(
    'title' => 'I AM Name',
    'description' => 'Add your name to the font page',
    'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('bg_bigText_firstName', array(
      'type' => 'theme_mod',
      'default' => 'LiveFACE',
      'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('bg_bigText_firstName', array(
      'label' => __('First name', 'LiveFACE'),
      'section' => 'bg_bigText',
      'priority' => 15,
      'settings' => 'bg_bigText_firstName'
    ));

    $wp_customize->add_setting('bg_bigText_surName', array(
      'type' => 'theme_mod',
      'default' => 'Theme',
      'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('bg_bigText_surName', array(
      'label' => __('Last name', 'LiveFACE'),
      'section' => 'bg_bigText',
      'priority' => 15,
      'settings' => 'bg_bigText_surName'
    ));

    //Other Portfolio Settinga
    $wp_customize->add_section('other_portfolio', array(
    'title' => 'Other portfolio settings',
    'description' => 'Add your name to the font page. Leave it blank if you do not want to display.',
    'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('op_instagram', array(
      'type' => 'theme_mod',
      'default' => '#',
      'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('op_instagram', array(
      'label' => __('Instagram', 'LiveFACE'),
      'section' => 'other_portfolio',
      'priority' => 15,
      'settings' => 'op_instagram'
    ));

    $wp_customize->add_setting('op_pinterest', array(
      'type' => 'theme_mod',
      'default' => '#',
      'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('op_pinterest', array(
      'label' => __('Pinterest', 'LiveFACE'),
      'section' => 'other_portfolio',
      'priority' => 15,
      'settings' => 'op_pinterest'
    ));

    $wp_customize->add_setting('op_behance', array(
      'type' => 'theme_mod',
      'default' => '#',
      'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('op_behance', array(
      'label' => __('Behance', 'LiveFACE'),
      'section' => 'other_portfolio',
      'priority' => 15,
      'settings' => 'op_behance'
    ));

    $wp_customize->add_setting('op_dribbble', array(
      'type' => 'theme_mod',
      'default' => '#',
      'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('op_dribbble', array(
      'label' => __('Dribbble', 'LiveFACE'),
      'section' => 'other_portfolio',
      'priority' => 15,
      'settings' => 'op_dribbble'
    ));

    $wp_customize->add_setting('op_github', array(
      'type' => 'theme_mod',
      'default' => '#',
      'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('op_github', array(
      'label' => __('Github', 'LiveFACE'),
      'section' => 'other_portfolio',
      'priority' => 15,
      'settings' => 'op_github'
    ));

    $wp_customize->add_setting('op_facebook', array(
      'type' => 'theme_mod',
      'default' => '#',
      'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('op_facebook', array(
      'label' => __('Facebook', 'LiveFACE'),
      'section' => 'other_portfolio',
      'priority' => 15,
      'settings' => 'op_facebook'
    ));

    $wp_customize->add_setting('op_twitter', array(
      'type' => 'theme_mod',
      'default' => '#',
      'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('op_twitter', array(
      'label' => __('Twitter', 'LiveFACE'),
      'section' => 'other_portfolio',
      'priority' => 15,
      'settings' => 'op_twitter'
    ));

  }

add_action( 'customize_register', 'liveface_customize_register' );



//Like Function:
add_action('wp_ajax_nopriv_bigfa_like', 'bigfa_like');
add_action('wp_ajax_bigfa_like', 'bigfa_like');
function bigfa_like(){
        global $wpdb,$post;
        $id = $_POST["um_id"];
        $action = $_POST["um_action"];
        if ( $action == 'ding'){
        $bigfa_raters = get_post_meta($id,'bigfa_ding',true);
        $expire = time() + 99999999;
        $domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false; // make cookies work with localhost
        setcookie('bigfa_ding_'.$id,$id,$expire,'/',$domain,false);
        if (!$bigfa_raters || !is_numeric($bigfa_raters)) {
                update_post_meta($id, 'bigfa_ding', 1);
        }
        else {
                        update_post_meta($id, 'bigfa_ding', ($bigfa_raters + 1));
                }

        echo get_post_meta($id,'bigfa_ding',true);

        }

        die;
}



//Custom Image Size
function liveface_image_sizes($sizes) {
  $addsizes = array(
    "liveface-image-size" => __( "Liveface image", "liveface")
  );
  $newsizes = array_merge($sizes, $addsizes);
  return $newsizes;
}

/**
 * Display navigation to next/previous set of posts when applicable.
 *
 *
 * @return void
 */

function liveface_paging_nav() {
	global $wp_query, $paged;

  //10 Article A page

	//display number of current page
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<div class='index_gallery_Contorller'>


					<!--div class="nav-previous"><?php //next_posts_link( __( 'Older posts', 'portfolio' ) ); ?></div-->
          <div class='gC gC_left'> <?php next_posts_link( __( '<i class="fa fa-angle-left" aria-hidden="true"></i> Older posts', 'liveface' ) ); ?></div>
					<!--div class="nav-next"><?php //previous_posts_link( __( 'Newer posts', 'portfolio' ) ); ?></div-->
          <div class='gC gC_right' ><?php previous_posts_link( __( 'Newer posts <i class="fa fa-angle-right" aria-hidden="true"></i>', 'liveface' ) ); ?> </div>

		</div>
	<?php
}

?>
