<?php get_header(); ?>

<!-- Jumbotron -->
<div class="jumbotron text-center" style="margin-top: 60px;" id="simple-web-app-jumbotron">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('simple-web-app-jumbotron')) : else : ?>
        <h1>Simple WP Web App</h1>
        <p>Add a text widget to Simple Web App Jumbotron to fill in this area.  The widget title becomes the Jumbotron headline and the content appears here.
        </p>
        <a class="btn btn-default" href="<?php echo site_url(); ?>/wp-admin/widgets.php" role="button">Let's Get Started! &raquo;</a>
    </div>
<?php endif; ?>
</div>
<!-- End Jumbotron -->

<!-- Call to Action Panel -->
<div class="container text-center">
    <div class="panel panel-success">
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('simple-web-app-call-to-action')) : else : ?>
            <div class="panel-title panel-heading">
                <h2>Call to Action</h2>
                <p>Add a text widget to Simple Web App Call to Action to fill in this area.  The widget title becomes the call to action title and the content appears here.</p>
            </div>
        <?php endif; ?>
        <div class="panel-body">
            <a class="btn btn-success btn-lg" href="#" role="button">Register! &raquo;</a>
        </div>
    </div>
</div>
<!-- Call to Action Panel -->

<!-- Main Container -->
<div class="container">    
    <!-- Center Row -->
    <div class="row">
        <div class="col-lg-4">
            <div class="text-center">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/check1.png" style="width: 140px; height: 140px;">
            </div>
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('simple-web-app-homepage-left')) : else : ?>
                <h2 class="text-center">Home Page Left</h2>
                <p>Add a text widget to Simple Web App Homepage Left to fill in this area.  The widget title becomes the column title and the content appears here.</p>
            <?php endif; ?>
        </div>
        <div class="col-lg-4">
            <div class="text-center">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/person3.png" style="width: 140px; height: 140px;">
            </div>
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('simple-web-app-homepage-center')) : else : ?>
                <h2 class="text-center">Home Page Center</h2>
                <p>Add a text widget to Simple Web App Homepage Center to fill in this area.  The widget title becomes the column title and the content appears here.</p>
            <?php endif; ?>
        </div>
        <div class="col-lg-4">
            <div class="text-center">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/services1.png" style="width: 140px; height: 140px;">
            </div>
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('simple-web-app-homepage-right')) : else : ?>
                <h2 class="text-center">Home Page Right</h2>
                <p>Add a text widget to Simple Web App Homepage Right to fill in this area.  The widget title becomes the column title and the content appears here.</p>
            <?php endif; ?>
        </div>
    </div>
    <!-- End Center Row -->
</div>
<!-- End Main Container -->

<?php get_footer(); ?>
