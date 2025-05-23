<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <a class="visually-hidden-focusable" href="#content">Skip to main content</a>
        <header class="headerRow">
            <div class="headerRow__contact">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="headerRow__phone d-block d-md-inline">
                                <span class="headerRow__icon"><?php get_template_part('images/phone-icon'); ?></span> <a href="tel:(920) 450-3185">(920) 450-3185</a>
                            </div>
                            <div class="headerRow__email d-block d-md-inline">
                                <span class="headerRow__icon"><?php get_template_part('images/email-icon'); ?></span> <a href="mailto:forwardfabmechllc@outlook.com">forwardfabmechllc@outlook.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span> Menu
                    </button>
                    
                    <div class="collapse navbar-collapse" id="main-menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav mx-auto %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>
                    </div>
                </div>
            </nav>
        </header>