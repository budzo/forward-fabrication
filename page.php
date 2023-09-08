<?php get_header(); ?>
    <main id="content" class="page-wrapper">
        <section class="logoRow">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mx-auto">
                        <a href="<?php echo get_home_url(); ?>"><?php get_template_part('images/forward-fabrication-logo'); ?></a>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <section class="page-content">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <h1 class="text-center"><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
                        <?php endwhile; else : ?>
                            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <?php get_template_part('/partials/quote-row'); ?>
<?php get_footer(); ?>
