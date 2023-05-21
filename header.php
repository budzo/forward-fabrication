<!doctype html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php // WordPress custom title script

            // is the current page a tag archive page?
            if (function_exists('is_tag') && is_tag()) {

            	// if so, display this custom title
            	echo 'Tag Archive for &quot;'.$tag.'&quot; | ';

            // or, is the page an archive page?
            } elseif (is_archive()) {

            	// if so, display this custom title
            	wp_title(''); echo ' Archive | ';

            // or, is the page a search page?
            } elseif (is_search()) {

            	// if so, display this custom title
            	echo 'Search for &quot;'.wp_specialchars($s).'&quot; | ';

            // or, is the page a single post or a literal page?
            } elseif (!(is_404()) && (is_single()) || (is_page())) {

            	// if so, display this custom title
            	wp_title(''); echo ' | ';

            // or, is the page an error page?
            } elseif (is_404()) {

            	// yep, you guessed it
            	echo 'Not Found | ';

            }
            // finally, display the blog name for all page types
            bloginfo('name');

            ?>
        </title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><?php get_template_part('images/forward-fabrication-logo'); ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="main-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
                </div>
            </div>
        </nav>