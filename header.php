<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/fav.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/icon.png" rel="apple-touch-icon-precomposed">

		<link href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"  rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>


		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<header class="header clear" role="banner">

					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 logo">
								<a href="<?php echo home_url(); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="img-responsive logo-img">
								</a>
							</div>
							<div class="col-xs-12 col-sm-6 social">
								<div class="header_social pull-right">
									<a class="social_link" href="" target="_blank">
										<i class="fa fa-facebook-official social_img" aria-hidden="true"></i>
									</a>
									<a class="social_link" href="" target="_blank">
										<i class="fa fa-pinterest-square social_img" aria-hidden="true"></i>
									</a>
									<a class="social_link" href="" target="_blank">
										<i class="fa fa-instagram social_img" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div><!-- /container -->

					<div class="container">
						<div class="inner">
							<div class="row">
								<div class="col-xs-12 col-sm-12" id="nav">
									<nav class="navbar navbar-default" role="navigation">
									  <div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-top-collapse">
											  <span class="sr-only">Toggle navigation</span>
											  <span class="icon-bar"></span>
											  <span class="icon-bar"></span>
											  <span class="icon-bar"></span>
											</button>
									  </div>
										<div class="collapse navbar-collapse navbar-top-collapse">
												<?php
													wp_nav_menu( array(
														'menu'      		 	=> 'header-menu',
														'theme_location' 	=> 'header-menu',
														'depth'      			=> 2,
														'container'  			=> false,
														'menu_class' 			=> 'nav navbar-nav',
														'walker'          => new wp_bootstrap_navwalker()
														)
													);
													?>
										  </div><!-- /.navbar-collapse -->
										</nav>
									</div>
								</div>
							</div>
						</div><!-- /container -->

			</header><!-- /header -->
