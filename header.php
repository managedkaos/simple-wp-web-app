<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

        <title><?php wp_title(' | ', true, 'right') ?></title>

        <!-- Bootstrap core CSS -->
        <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body>

        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom:10px">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
                </div>
                <div class="collapse navbar-collapse navHeaderCollapse" id="navbar-main">
                    <?php
                    if (has_nav_menu('simple-web-app-menu')) {
                        wp_nav_menu(array(
                            'theme_location' => 'simple-web-app-menu',
                            'menu_class' => 'nav navbar-nav',
                        ));
                    }
                    if (is_user_logged_in()) {
                        global $current_user;
                        get_currentuserinfo();
                        ?>
                        <div class="navbar-text navbar-right">
                            <!-- Split button -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-sm"><?php echo ucfirst($current_user->display_name); ?></button>
                                <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Update Profile</a></li>
                                    <li class="divider"></li>
                                    <li><?php wp_loginout(home_url(), 'true'); ?></li>
                                    
                                    <!-- check to see if the current user is an admin.  if they are, display a link to the admin panel -->
                                    <?php if ( current_user_can('administrator') ) { ?>
                                    <li><a href="<?php echo site_url('wp-admin', 'admin') ?>">Admin Console</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    <?php } else { ?>
                        <form name="login-form" role="form" class="navbar-form navbar-right" action="<?php echo site_url('wp-login.php', 'login') ?>" method="post">
                            <div class="form-group input-group-sm">
                                <input type="text" class="form-control" name="log" placeholder="Username">
                            </div>
                            <div class="form-group input-group-sm">
                                <input type="password" class="form-control" name="pwd" placeholder="Password">
                            </div>
                            <input type="hidden" name="redirect_to" value="<?php echo home_url(); ?>" />
                            <button type="submit" name ="wp-submit" id="wp-submit" class="btn btn-default btn-sm">Sign In</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="container">
