<?php 
	
	$cat_obj = get_category_by_slug( 'videos' );
	$cat_id = $cat_obj->term_id;
	$cat_link = get_category_link( $cat_id );

	$args = array( 
		'posts_per_page' => 15,
		'cat'		 => $cat_id
	);
?>

<ul class="highlight_post_list">
<?php
	$cat_posts = get_posts( $args );
	if ($cat_posts):
		$n = 0;
		foreach ( $cat_posts as $post ) : setup_postdata( $post );

		$n++;
		if($n == 1){
			$videodestaque = $video_youtube_id = htmlspecialchars(get_post_meta(get_the_ID(), 'video_youtube_id', true));
			if($videodestaque){
				$videodestaque_id= $videodestaque;
?>		
				<input class="videodestaque" type="hidden" data-catlink="<?php echo $cat_link; ?>" data-posttitle="<?php the_title(); ?>" data-videocntt="video_loader02" data-videoid="<?php echo $video_youtube_id; ?>" data-post-href="<?php the_permalink(); ?>" /> 
<?php
			}
		}
?>		
	<li class="postlist_item">		


		<article id="post-<?php echo get_the_ID(); ?>" <?php post_class(); ?>>
			<figure>
				<div class="thumb_wpr">
				<?php if ( has_post_thumbnail()) : ?>
					<?php the_post_thumbnail();  ?>
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/no-thumb.png"/>
				<?php endif; ?>
					<span class="video-imageplay"></span>
				</div>
			</figure>
			<?php echo the_category_list(); ?>
			<h3 class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
			<!-- <div class="text">
				<?php //html5wp_excerpt('html5wp_index'); ?>
			</div> -->
			<span class="clear"></span>
			<?php
				$video_youtube_id = htmlspecialchars(get_post_meta(get_the_ID(), 'video_youtube_id', true)); 
				if($video_youtube_id):
				// $video_embed_code = htmlspecialchars(get_post_meta(get_the_ID(), 'video_embed_code', true)); 
				// if($video_embed_code):
			?>
				<a class="link video_link" data-catlink="<?php echo $cat_link; ?>" data-posttitle="<?php the_title(); ?>" data-videocntt="video_loader02" data-videoid="<?php echo $video_youtube_id; ?>" data-post-href="<?php the_permalink(); ?>"></a> 
			<?php endif; ?>
		</article>
	</li>

	<?php 
		endforeach; 
	else:
?>
	<li class="slide">
		<article class="noresult">
			<h2 class="title"><strong><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?> @ :(</strong></h2>
		</article>
	</li>

<?php 
	wp_reset_postdata();
	endif;
?>
	<li class="allposts"><a href="<?php echo $cat_link; ?>"><span class="name">ver todos</span> <span class="arrow">></span></a></li>
</ul>