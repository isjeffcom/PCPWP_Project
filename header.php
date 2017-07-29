<?php
/**
 *
 * The Header template for our theme
 *
 **/
?>

<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <meta charset="<?php bloginfo( 'charset' ); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <nav>
    <div class='nav_container' id='nav'>

      <div class='nav nav_logo'>
        <a class='nav_text_logo' href='<?php echo esc_url( home_url( '/' ) ); ?>'><?php bloginfo( 'name' );?></a>
        <!--img src='./asset/img/nav_logo.png' alt='site logo'-->
      </div>

      <div class='nav nav_text'>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </div>

    </div>

    <div class='nav_container_mobile' id='navMobile'>

      <div class='nav_text_mobile' id='navMobileText'>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </div>

      <div class='nav nav_menu nav_logo' id='nav_menu'>

        <i class="fa fa-bars" aria-hidden="true" id='openNav' onclick="showNav()"></i>
        <i class="fa fa-times" aria-hidden="true" id='closeNav' onclick="unshowNav()"></i>


      </div>
    </div>

  </nav>
