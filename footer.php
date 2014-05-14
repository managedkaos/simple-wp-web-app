            <div class="container">
                <hr>
                <div class="col-lg-4">
                    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('simple-web-app-footer-left')) : else : ?>
                        <h4 class="pull-left"><?php bloginfo('description'); ?></h4>
                    <?php endif; ?>
                </div>
                <div class="col-lg-4 text-center">
                    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('simple-web-app-footer-center')) : else : ?>
                    &nbsp;
                    <?php endif; ?>
                </div>
                <div class="col-lg-4">
                    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('simple-web-app-footer-right')) : else : ?>
                        <h4 class="pull-right">&copy; <?php echo date('Y'); ?></h4>
                    <?php endif; ?>
                </div>
            </div>
        </div> <!-- main container -->
        <!-- Bootstrap core JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>