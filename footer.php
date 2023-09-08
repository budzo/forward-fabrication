        <footer class="footerRow">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-xl-6 mb-3 mb-xl-0 text-center text-xl-start">
                        <div class="footerRow__left">
                            &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 text-center text-xl-end">
                        <div class="footerRow__right justify-content-center justify-content-xl-end">
                            <span class="footerRow__by-line d-block d-md-inline">
                                Website Development by
                            </span>
                            <span class="footerRow__feldspar-creative">
                                <a href="https://feldsparcreative.com" target="_blank" title="Website by Feldspar Creative">
                                    <?php get_template_part('images/feldspar-creative-logo'); ?>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
