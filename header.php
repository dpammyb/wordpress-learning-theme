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
        <!-- We load two stylesheets.  First up is a compressed bootstrap file.
             I'm using the sandstone theme, which you can switch out for another one
             at https://bootswatch.com/4-alpha/ -- just download the stylesheet you like
             and replace this one -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap.min.css">
        <!-- The second stylesheet is "style.css", which is in the same directory as this file. If you
             want to make some changes, make them here.  -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <!-- Note: The preferred way to load stylesheets is using Wordpress's wp_enqueue_styles() function, from
             within -->
    </head>
    <!-- In the body we use a series of bootstrap-compatible <div> elements.
       This lets us make use of all of bootstrap's complex and useful features.  -->
    <body >
        <div id="page">
            <header class="header">
                <div class="blog-masthead">
                    <h1 id="site-title">
                        <a href="<?php bloginfo('url'); ?>">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h1>
                    <h2 id="site-description">
                        <?php bloginfo('description'); ?>        
                    </h2>
		    <div class="container">
                        <nav id="main-menu">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                        </nav>

		    </div>
                </div>
            </header>

    <div id="main">
        
