<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">

  <!--[if IE 9]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
  <![endif]-->
  <!--[if lte IE 8]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
  <![endif]-->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- Mobile Nav -->
   <div id="mobileNav">
      <div class="mobileNav-header">
        <a href="<?php echo home_url(); ?>" class="mobile-logo">
          <h2>motive</h2>
          <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg"/>
        </a>
        <div>
          <a class="navToggle"><i class="fa fa-times" aria-hidden="true"></i></a>
          <div class="clear"></div>
        </div>
      </div>
      <?php wp_nav_menu( array('theme_location' => 'main-menu', 'container' => 'nav','container_class' => 'mobile-main-menu ')); ?>
  </div>
  <div class="mobileNav-overlay"></div>
  <!-- end Mobile Nav -->

  <div id="wrap">
    <header id='header'>
      <section class="container-fluid">
        <div class="row justify-content-between align-items-center">
          <div class="col-2 col-lg-1">
              <a href="<?php echo home_url(); ?>" class="header-logo">
                <h2>motive</h2>
                <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg"/>
              </a>
          </div>
          <div class="col-1 col-lg-4">
              <?php wp_nav_menu( array('theme_location' => 'main-menu', 'container' => 'nav','container_class' => 'main-menu d-none d-lg-block','walker' => new megaMenu())); ?>
              <a href="#" class="navToggle d-inline-block d-lg-none"><i class="fa fa-bars" aria-hidden="true"></i></a>
          </div>

          </div>
      </section>
    </header>

