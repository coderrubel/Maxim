<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="<?php the_author(); ?>">

<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri()); ?>./img/favicon.ico">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri()); ?>./style.css" >
<?php wp_head(); ?>
</head>
<body>
<!-- navbar -->
<div class="navbar-wrapper"<?php body_class(); ?>>
	<div class="navbar navbar-inverse navbar-fixed-top ">
		<div class="navbar-inner ">
			<div class="container" style="padding-top: 20px;">
				<!-- Responsive navbar -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
				<h1 class="brand"><a href="<?php echo esc_url(home_url()); ?>">Maxim</a></h1>
				<!-- navigation -->
				<nav class="pull-right nav-collapse collapse">
				<?php
                  wp_nav_menu(array(
                     'theme_location'=>'main_menu',
                      'fallback_cb'=>'default_main_menu',
                      'menu_class'=>'nav navbar-nav', 
                      'walker'=> new WP_Bootstrap_Navwalker()
                  ));
            ?>
				</nav>
			</div>
		</div>
	</div>
</div>