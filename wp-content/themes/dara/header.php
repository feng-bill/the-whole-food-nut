<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dara
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dara' ); ?></a>
	<?php get_template_part( 'components/header/custom', 'header' ); ?>
	<header id="masthead" class="site-header" role="banner">
		
		<a href="/">
<img id="site-logo" src="http://35.165.78.97/wp-content/uploads/2017/02/cropped-cropped-cropped-cropped-whole-food-nut-logo.jpg"></img>
        </a>
		<?php get_template_part( 'components/header/site', 'branding' ); ?>
		<?php echo DISPLAY_ULTIMATE_PLUS(); ?>

		<?php get_template_part( 'components/navigation/navigation', 'top' ); ?>

	</header>
</div>
	<?php if ( is_front_page() ) {
		if ( dara_has_featured_posts() ) :
			get_template_part( 'components/post/content', 'featured' );
		elseif ( 'page' === get_post_type() && has_post_thumbnail() ) :
			get_template_part( 'components/page/content', 'ero' );
		endif;
	} ?>

	<div id="content" class="site-content">

