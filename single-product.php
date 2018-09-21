<?php get_header();?>
		<div id="main-area">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php $parent = get_post( 66 );
			$parent_title = $parent->post_title;
			?>
				<div id="page-info">
					<h1><?php echo $parent_title; ?></h1>
					<h2><?php echo get_post_meta( $parent->ID,'desc',true ); ?></h2>
				</div>
				<div id="content">
					<div id="product-single">
						<div class="product-info">
							<a href="<?php echo get_field('eyecatch'); ?>" class="swipebox" title="<?php echo get_field('title');?>">
								<img src="<?php echo get_field('eyecatch'); ?>" class="eyecatch">
							</a>
							<?php
							$execute = get_field('execute'); 
							if ( $execute ) :
							?>
							<p class="execute-link">
								<a href="<?php echo $execute; ?>" target="_blank">実行可能ファイルなど（外部リンク）</a>
							</p>
							<?php endif;?>
							<?php
							$github = get_field('github');
							if ( $github ) :
							?>
							<p class="github-link">
								<a href="<?php echo $github; ?>" target="_blank">ソースコード（GitHub）</a>
							</p>
							<?php endif;?>
						</div>
						<div class="description">
							<h3 class="product-title"><?php echo get_field('title');?></h3>
							<?php echo get_field('description');?>
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