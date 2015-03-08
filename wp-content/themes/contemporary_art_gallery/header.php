<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic|Open+Sans:300italic,600italic,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header class="clearfix">
  <div class="container header-container clearfix">
    <h1 class="mainTitle">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home" >
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
    <div class="subNav">
        <a href="http://localhost/Week7_wordpress/WklyPrjct/ContemporaryArtGallery/?page_id=40"><h2 class="lilNav">About</h2></a>
      <a href="http://localhost/Week7_wordpress/WklyPrjct/ContemporaryArtGallery/?page_id=5"><h2 class="lilNav">News</h2></a>
    </div>
    <a href="http://localhost/Week7_wordpress/WklyPrjct/ContemporaryArtGallery/?page_id=10"><h3 class="left--header">Exhibitions</h3></a>

    <a href="http://localhost/Week7_wordpress/WklyPrjct/ContemporaryArtGallery/?page_id=8"><h3 class="right--header">Artists</h3></a>

    <?php //wp_nav_menu( array(
      //'container' => false,
      //'theme_locations' => 'primary'
    //)); ?>
  </div> <!-- /.container -->
</header><!--/.header-->

