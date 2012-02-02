<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>

<!DOCTYPE html> 
<html>
<head>
<title>Class theme</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body >
  <div id="page">
    <header id="header">
      <h1 id="site-title">
        <a href="<?php bloginfo('url'); ?>">
          <?php bloginfo('name'); ?>
        </a>
      </h1>
      <h2 id="site-description">
          <?php bloginfo('description'); ?>        
      </h2>
      <nav id="main-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </nav>
    </header>

  
