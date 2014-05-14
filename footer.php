            <div class="container">
                <div class="well well-sm">
                    <?php bloginfo('description'); ?> | 
                    <?php
                    if (is_user_logged_in()) {
                        echo "you're logged in";
                    } else {
                        echo "you're not logged in";
                    }
                    ?>
                </div>
            </div>
        </div> <!-- main container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>