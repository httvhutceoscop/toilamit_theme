<div id="post-<?php the_ID(); ?>" <?php post_class("post-preview"); ?>>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
		<?php if ( is_singular() ) { 
			echo '<h1 class="post-title entry-title">'; 
		} else { 
			echo '<h2 class="post-title entry-title">'; 
		} ?>
	    <?php the_title(); ?>
	  	<?php if ( is_singular() ) { ?>
		</h1>
		<?php } else { ?>
		</h2>
		<h3 class="post-subtitle"></h3>
		<?php } ?>
		
	</a>	
	<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
	<?php //get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
	<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
	<?php edit_post_link(); ?>
</div>
<hr>