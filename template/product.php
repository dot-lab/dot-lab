<?php
/*
	Template Name: products template
*/
?>
<?php get_header();?>
		<div id="main-area">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div id="page-info">
					<h1><?php echo get_the_title(); ?></h1>
					<h2><?php echo get_post_meta( $post->ID,'desc',true ); ?></h2>
				</div>
				<div id="content">
					<?php
					$args = array (
						'posts_per_page' => -1,
						'post_type' => 'product',
					);
					$posts = get_posts( $args );
					?>
					<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
						<div class="product">
							<a href="<?php echo get_permalink(); ?>" class="bdr-none">
								<img src="<?php echo get_field('eyecatch'); ?>" class="eyecatch">
								<span class="product-title"><?php echo get_field('title');?></span>
							</a>
							<span class="product-cat"><?php echo get_field('category');?></span>
						</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
				<?php endwhile; ?>
				<?php else : ?>
					<div id="page-info">
						<h1>Not found</h1>
						<h2>お探しのページはみつかりませんでした</h2>
					</div>
				<?php endif; ?>
			</div>
<?php get_footer();?>