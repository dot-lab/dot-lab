<?php
/*
	Template Name: toppage template
*/
?>
<?php get_header(); ?>
		<div id="main-area">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div id="page-info">
					<h1><?php echo get_the_title(); ?></h1>
					<h2><?php echo get_post_meta( $post->ID,'desc',true ); ?></h2>
				</div>
				<div id="content">
					<?php
					# 更新情報を3件取得
					$args = array (
						'posts_per_page' => 3,
						'category_name' => 'info',
					);
					?>
					<?php $posts = get_posts( $args ); ?>
					<?php if ( $posts ) : ?>
					<h3>What's new</h3>
					<ul>
						<?php foreach ($posts as $post ) : setup_postdata( $post ); ?>
						<li>
							<?php echo the_time('Y/m/d'); ?> --- <?php echo the_title(); ?>
						</li>
						<?php endforeach; wp_reset_postdata(); ?>
					</ul>
					<p>...過去の履歴は<a href="<?php echo home_url('/'); ?>category/info">「更新情報」</a>にて</p>
					<?php endif; ?>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
			<?php else : ?>
				<div id="page-info">
					<h1>Not found</h1>
					<h2>お探しのページはみつかりませんでした</h2>
				</div>
			<?php endif; ?>
		</div>
<?php get_footer(); ?>