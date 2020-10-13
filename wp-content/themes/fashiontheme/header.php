<?php
/**
 * The header template file usually contains your site’s document type, meta information, links to stylesheets and scripts, and other data.
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 * @see  https://developer.wordpress.org/reference/functions/wp_head/
 * @see  https://developer.wordpress.org/reference/functions/body_class/
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- WP HEAD SCRIPTS -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap"
      rel="stylesheet"
    />
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./css/main.css" /> -->
    <title>Mario Mele</title>

	<?php
	/**
	 * the wp_head() function lets WordPress execute all the pre-body operations including the injection of important styles and scripts.
	 * This function call should always be inside your <head> tag
	 * 
	 * @see  https://developer.wordpress.org/reference/functions/wp_head/
	 */
	wp_head();
	?>
	<!-- END WP HEAD SCRIPTS -->

  </head>
  <body <?php body_class(); ?>>
    <!-- START WEBSITE BODY -->
    <div class="container">
      <div class="topbar">
        <div class="topbar__logo">
          <a href="./index.html"><img src="<?php echo WPE_INCLUDES ?>img/Logo.svg" alt="mariomele-logo" /></a>
        </div>
        <a href="index.html"><p class="topbar__full_logo hidden capitalize">mario mele</p></a>
        <div class="topbar__menu"><img src="<?php echo WPE_INCLUDES ?>img/menu.svg" alt="logo-menu" /></div>
        <ul class="desktop topbar__links">
          <li class="dropdown-portfolio">
            Portfolio
            <div class="dropdown-content">
              <a href="#lukania">Lukania</a>
              <a href="#time-is-now">Time is now</a>
              <a href="#trd-project">Progetto 3</a>
            </div>
          </li>
          <li><a href="#chi-sono">Chi sono</a></li>
          <li><a href="#contattami">Contattami</a></li>
        </ul>
      </div>
      <nav id="side-menu" class="sidemenu">
        <div class="sidemenu__header">
          <div class="sidemenu__close-logo"><img src="<?php echo WPE_INCLUDES ?>img/close-menu.svg" alt="" /></div>
          <p class="sidemenu__logo">mario mele</p>
        </div>
        <div class="sidemenu__body">
          <div class="sidemenu__body__ul">
            <ul>
              <li><a href="#chi-sono">Chi sono</a></li>
              <li><a href="#contattami">Contattami</a></li>
            </ul>
          </div>
          <div class="sidemenu__body__portfolio">
            <p class="capitalize">portfolio</p>
          </div>
          <div class="sidemenu__body__ul">
            <ul>
              <li><a href="#lukania">Lukania</a></li>
              <li><a href="#time-is-now">Time is now</a></li>
              <li><a href="#trd-project">Project 3</a></li>
            </ul>
          </div>
          <div class="sidemenu__body__social">
            <img class="sidemenu__body__social__bg" src="<?php echo WPE_INCLUDES ?>img/Rectangle-25.svg" />
            <div class="sidemenu__body__social__icons">
              <a href="https://www.facebook.com/marioemmemele/"><img src="<?php echo WPE_INCLUDES ?>img/fb_logo.svg" alt="logo facebook" /></a>
              <a href="https://www.instagram.com/mario_emme_mele/"><img src="<?php echo WPE_INCLUDES ?>img/instagram_logo.svg" alt="logo instagram" /></a>
            </div>
          </div>
        </div>
      </nav>