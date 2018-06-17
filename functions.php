<?php
	# 改行の自動挿入を無効化
	remove_filter ( 'the_content', 'wpautop' );
	remove_filter ( 'the_excerpt', 'wpautop' );
?>