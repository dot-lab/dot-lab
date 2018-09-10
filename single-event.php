<?php get_header();?>
		<div id="main-area">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php $parent = get_post( 98 );
			$parent_title = $parent->post_title;
			?>
				<div id="page-info">
					<h1><?php echo $parent_title; ?></h1>
					<h2><?php echo get_post_meta( $parent->ID,'desc',true ); ?></h2>
				</div>
				<div id="content">
					<div id="product-single">
						<div class="product-info">
							<a href="<?php echo get_field('event_eyecatch'); ?>" class="swipebox" title="<?php echo get_field('event_title');?>">
								<img src="<?php echo get_field('event_eyecatch'); ?>" class="eyecatch">
							</a>
						</div>
							<div class="description">
								<h3 class="product-title"><?php echo get_field('event_title') ?></h3>
								<?php echo get_field('event_desc');?>
							</div>
						<div class="clear"></div>
					</div>
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