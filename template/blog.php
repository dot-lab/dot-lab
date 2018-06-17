<?php
/*
	Template Name: blog template
*/
?>
<?php get_header(); ?>
		<div id="main-area">
			<?php if ( have_posts() ) : ?>
			<div id="page-info">
				<h1><?php echo get_the_title(); ?></h1>
				<h2><?php echo get_post_meta( $post->ID,'desc',true ); ?></h2>
			</div>
			<div id="content">
				<div id="side">
					<h3 class="side-title">Category list</h3>
					<ul>
						<?php $categories = get_categories('parent=0'); ?>
						<?php
						foreach ( $categories as $val ) :
						$cat_link = get_category_link($val->cat_ID);
						?>
						<li>
							<a href="<?php echo $cat_link ?>">
								<?php echo $val -> name ?>
							</a>	
						</li>
						<?php endforeach; ?>
					</ul>
					<?php /*  月別アーカイブ ?>
					<h3 class="side-title">Monthly archives</h3>
					<ul>
						<?php wp_get_archives(); ?>
					</ul>
					<?php */ ?>
				</div>
				<div id="blog-area">
					<?php 
					$args = array (
						'posts_per_page' => 10,
						'post_type' => 'post',
						'paged' => $paged,
					);
					$posts_list = get_posts( $args );
					?>
					<?php foreach ( $posts_list as $post ) : setup_postdata( $post ); ?>
					<div class="post">
						<h4><?php the_title(); ?></h4>
						<p class="post-meta">
							<span class="post-date"><?php the_time('Y/m/d'); ?></span>
							<span class="post-cat"><?php the_category(' '); ?></span>
						</p>
						<div class="post-content">
							<?php the_content(); ?>
						</div>
					</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
				<?php if ( function_exists('wp_pagenavi') ) : ?>
				<div id="pager">
					<?php wp_pagenavi(); ?>
				</div>
				<?php endif; ?>
			</div>
			<?php else : ?>
			<div id="page-info">
				<h1>Not found</h1>
				<h2>お探しのページはみつかりませんでした</h2>
			</div>
			<?php endif; ?>
		</div>
<?php get_footer(); ?>