<p class="entry-footer">
<span class="cat-links"><?php _e( '<i class="fa fa-folder-o"></i> ', 'toilamit' ); ?><?php the_category( ', ' ); ?></span>
<span class="meta-sep">&nbsp;</span>
<span class="tag-links"><?php the_tags('<i class="fa fa-tags"></i> '); ?></span>
<?php if ( comments_open() ) { 
echo '<span class="meta-sep">&nbsp;</span> <span class="comments-link"><a href="' . get_comments_link() . '">' . sprintf( __( '<i class="fa fa-comment-o"></i>', 'toilamit' ) ) . '</a></span>';
} ?>
</p> 