<?php get_header(); ?>
	<div id="container">
		<div id="header">
			<div id="navigation">
				<div id="logo">
					<a href="<?php echo home_url('/')?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
					</a>
				</div>
				<div id="gnavi">
					<ul>
						<li><a href="<?php echo home_url('/')?>works">Works</a></li>
						<li><a href="<?php echo home_url('/')?>blog">Blog</a></li>
						<li><a href="<?php echo home_url('/')?>contact">Contact</a></li>
					</ul>
				</div>
			</div>
			<div id="main-image">
				<img src="<?php echo get_template_directory_uri(); ?>/images/main-image.png">
			</div>
		</div>
		<div id="main-col">
			<div id="sidebar">
				<ul>
					<li>テストリスト</li>
					<li>テストリスト</li>
					<li>テストリスト</li>
				</ul>
			</div>
			<div id="main">
				<?php if( have_posts() ) :?>
					<?php while( have_posts() ) : the_post(); ?>
						<div class="page-info">
							<h1><?php echo get_the_title(); ?></h1>
							<p class="desc">
								<?php echo get_post_meta( $post->ID,'desc',true ); ?>
							</p>
						</div>
						<div class="content">
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
				<?php else :?>
				<div class="page-info">
					<h1>Not Found</h1>
					<p class="desc">お探しのページはみつかりませんでした。</p>
				</div>
				<?php endif;?>
			</div>
		</div>
		<div class="clear"></div>
		<div id="footer">
			<p>.lab :: since 2016 :: by Yoshie Takeda</p>
		</div>
	</div>
<?php get_footer(); ?>