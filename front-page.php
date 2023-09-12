<?php get_header(); ?>
    <section class="logoRow">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <a href="<?php echo get_home_url(); ?>"><?php get_template_part('images/forward-fabrication-logo'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <main id="content">
        <section class="seoRow text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="col-12 col-lg-8 mx-auto">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="servicesRow">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-5 col-xl-4 mb-4 mb-lg-0 text-center text-lg-start">
                        <div class="servicesRow__image">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/fabrication-img.jpg" alt="Welder" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <h2 class="text-center">Services We Offer</h2>
                        <p>
                            We take pride in offering an array of specialized solutions to meet your needs. Our services include:
                        </p>
                        <ul class="servicesRow__list list-unstyled">
                            <li>Custom Fabrication</li>
                            <li>Production</li>
                            <li>Mechanical Work</li>
                            <li>Onsite Install and Repair</li>
                            <li>Welding</li>
                            <li>Forming</li>
                            <li>Shear</li>
                            <li>Cutting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('/partials/quote-row'); ?>
    </main>
<?php get_footer(); ?>
