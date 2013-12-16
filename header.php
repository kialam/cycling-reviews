<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?><?php echo wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">

<?php wp_head(); ?>

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->
<!-- navigation -->

<div class="main heading container">
	<div class="band">
		<nav class="container primary">
		
			<?php wp_nav_menu (
				array(
					'menu'					=> 'Primary Navigation',
					'container'				=> 'div',
					'container_class' 		=> 'twelve columns'
				)
			); ?>
			
						<div class="four columns">
				<form class="nav searchbar">
					<input type="text" placeholder="Search" required>
				</form>
			</div>
		</nav><!-- end container primary -->

<!-- header -->
		<header class="sixteen columns">
			
				<h1 class="logo"><a href="<?php bloginfo(url); ?>"><span class="style1">Cycling</span> Reviews</a></h1>

		</header>
	</div><!-- end band -->
</div><!-- end main heading container -->