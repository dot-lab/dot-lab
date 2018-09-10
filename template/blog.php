<?php
/*
	Template Name: blog template
*/
?>
<?php get_header(); ?>
<?php 
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$my_query = new WP_Query(
		array (
		'posts_per_page' => 3,
		'post_type' => 'post',
		'paged' => $paged,
	)); 
?>
		<div id="main-area">
			<?php if ( $my_query -> have_posts() ) : ?>
				<div id="page-info">
				<h1><?php echo get_the_title(); ?></h1>
				<h2><?php echo get_post_meta( $post->ID,'desc',true ); ?></h2>
			</div>
			<div id="content">
				<div id="blog-area">
					<?php while ( $my_query -> have_posts() ) : $my_query -> the_post(); ?>
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
				<?php endwhile; ?>
					<?/* ?>
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
					<?php endforeach; ?>
						<div class="pager clear tac">
							<?php wp_pagenavi(array('query' => $the_query)); ?>
						</div>
				<?php wp_reset_postdata(); ?>
				<?php */ ?>
				<?php endif;?>
				</div>
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
						<?php endforeach;  ?>
					</ul>
				</div>
		</div>
		<div id="pager">
			<?php wp_pagenavi(array('query' => $my_query )); ?>
		</div>
		<?php wp_reset_postdata(); ?>
	</div>


<?php get_footer(); ?>