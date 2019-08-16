<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vue
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <div class="site-header_fixed">
    <div class="container">
      <input class="menu-trigger-input" type="checkbox" id="menu-trigger">
      <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
      	<img class="brand_image" src="<?php echo get_template_directory_uri() ?>/images/brand.png" alt="Logo <?php bloginfo( 'name' ); ?>">
      </a>
      <label class="menu-trigger" for="menu-trigger">
        <div class="menu-trigger_burguer"><span class="menu-trigger_shape"></span><span class="menu-trigger_shape"></span><span class="menu-trigger_shape"></span></div>
      </label>
      <nav class="navigation">
        <div class="navigation_content">
          <ul class="navigation_list">
            <li class="navigation_item"><a class="navigation_link" href="<?php echo esc_url( home_url( '/' ) ); ?>productos">Productos</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<main class="site-main" id="app">
