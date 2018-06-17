<?php get_header(); ?>
		<div id="main-area">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div id="page-info">
					<h1><?php echo get_the_title(); ?></h1>
					<h2><?php echo get_post_meta( $post->ID,'desc',true ); ?></h2>
				</div>
				<div id="content">
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