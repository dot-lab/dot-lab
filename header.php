<!DOCTYPE html>
<html lang="ja">
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lib/swipebox.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lib/slick.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/jquery.swipebox.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/slick.min.js"></script>
	<script type="text/javascript">
		;( function( $ ) {
			$( '.swipebox' ).swipebox();
		} )( jQuery );
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.slide-show').slick({
				autoplay: true,
				autoplaySpeed: 4500,
				dots: true,
				fade: true,
				arrows: false,
			});
		});
	</script>
	<?php wp_head(); ?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="gnavi">
				<div id="logo">
					<a href="<?php echo home_url('/'); ?>" class="bdr-none">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
					</a>
				</div>
				<ul>
					<li><a href="<?php echo home_url('/'); ?>products">Products</a></li>
					<li><a href="<?php echo home_url('/'); ?>works">Works</a></li>
					<li><a href="<?php echo home_url('/'); ?>blog">Blog</a></li>
					<li><a href="<?php echo home_url('/'); ?>contact">Contact</a></li>
				</ul>
			</div>
		</div>
		<?php # フロントページ（hello,world）なら,スライドショーを表示 ?>
		<?php if ( is_page('9') ) : ?>
		<div id="main-image">
			<div class="slide-show">
				<img src="<?php echo get_template_directory_uri(); ?>/images/01.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/02.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/03.jpg">
			</div>
		</div>
		<?php endif;?>