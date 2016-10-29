<?php
	$cat_obj = get_category_by_slug( 'galeria' );
	$cat_id = $cat_obj->term_id;

	$args = array( 
		'posts_per_page' => 4,
		'cat'		 => $cat_id
	);
	 // echo $cat_id;

	$posts = get_posts( $args );
?>
		
<h3 class="block_title"><span>Galeria</span></h3>

<ul class="galeria list">
	
	<?php if ($posts): ?>
	<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>	
		<li class="galeria item">
			<article id="post-<?php echo get_the_ID(); ?>" <?php post_class(); ?>>
				<figure>
					<a href="<?php the_permalink();?>">
					<?php if ( has_post_thumbnail()) : ?>
						<?php the_post_thumbnail();  ?>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/no-thumb.png"/>
					<?php endif; ?>
					</a>
				</figure>
				<?php echo the_category_list(); ?>
				<h3 class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
			</article>
		</li>

	<?php endforeach; ?>
	<?php else: ?>
		<li>
			<article class="noresult">
				<h2 class="title"><strong><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?> @ :(</strong></h2>
			</article>
		</li>

	<?php 
		endif;
		wp_reset_postdata();
	?>
	<span class="clear"></span>
</ul>

