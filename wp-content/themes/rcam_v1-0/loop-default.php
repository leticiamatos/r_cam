<?php if (have_posts()): ?>
	<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
			<figure>
				<a href="<?php the_permalink();?>">
				<?php $image = get_field('destaque_slider'); ?>
				<?php if (!empty($image) ) :?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				<?php elseif ( has_post_thumbnail()) : ?>
					<?php the_post_thumbnail();  ?>
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/no-thumb.png"/>
				<?php endif; ?>
				</a>
			</figure>
			<div class="text">
				<?php echo the_category_list(); ?>
				<h3 class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
			</div>
			<div class="excerpt">
				<?php html5wp_excerpt('html5wp_index_postlist') ;?>
				<span class="line"></span>
			</div>
			<span class="clear"></span>
		</article>
		<!-- espaço entre as imagens de destaque do post  e o resumo do post anterior -->
		<div class="space" style="margin-bottom: 20px;"></div> <!-- Solução temporária -->

	<?php endwhile; ?>
<?php else: ?>

	<!-- article -->
	<article class="noresult">
	<h2 class="title">
		<center>
			<strong><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?> @ :(</strong>
		</center>
	</h2>
	</article>

<?php endif; ?>
