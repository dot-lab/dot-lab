<?php
/*
	Template Name: products template
*/
?>
<?php get_header();?>
			<div class="main">
				<?php if ( have_posts() ) : ?>
					<div class="center">
						<h1><?php echo get_the_title(); ?></h1>
						<p class="desc">
							<?php echo get_post_meta( $post->ID,'desc',true ); ?>
						</p>
					</div>
					<?php /* ?>
					<div class="side">
						<h3>Category List</h3>
						<?php $categories = get_categories('parent=0');
						foreach ( $categories as $val ) : 
							$cat_link = get_category_link($val->cat_ID);?>
							<ul>
								<li>
									<a href="<?php echo $cat_link?>"><?php echo $val->name ?></a>
								</li>
							</ul>
						<?php endforeach; ?>
					</div>
					<?php */ ?>
					<div class="posts">
					<?php
					$args = array(
						'posts_per_page' => -1,
						'post_type' => 'product',
					);
					$postslist = get_posts( $args ); ?>
					<?php foreach ( $postslist as $post ) :setup_postdata( $post );?>
							<div class="product">
								<a href="<?php echo get_permalink();?>">
									<div class="eyecatch">
										<img src="<?php echo get_field('eyecatch'); ?>">
									</div>
									<p class="product_title">
										<?php echo get_field('title');?>
									</p>
								</a>
							</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
				<?php else : ?>
					<h1>Not Found</h1>
					<p style="text-align: center;">お探しのページは見つかりませんでした。</p>
				<?php endif; ?>
				<div class="clear"></div>
			</div>
<?php get_footer();?>