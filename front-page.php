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
    <section class="seoRow text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
