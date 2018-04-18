<?php 
	global $wp_query; 
	if ( $wp_query->max_num_pages > 1 ) {
?>
<div id="nav-below" class="navigation clearfix" role="navigation">
	<div class="nav-previous float-left"><?php next_posts_link(sprintf( __( '%s', 'toilamit' ), '<span class="meta-nav btn btn-primary">&larr; Older</span>' ) ) ?></div>
	<div class="nav-next float-right"><?php previous_posts_link(sprintf( __( '%s', 'toilamit' ), '<span class="meta-nav btn btn-primary">Newer &rarr;</span>' ) ) ?></div>
</div>
<?php } ?>