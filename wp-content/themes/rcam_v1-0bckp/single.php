<?php get_header(); ?>

	<section class="block_wpr block_01">
		<div class="block_cntt">
			<?php get_template_part('bar', 'category'); ?>

			<?php if ( has_post_format( 'video' )) : ?>
				<div class="col2-3 post-video">
			<?php else: ?>
				<div class="col2-3">	
			<?php endif; ?>

				<main role="main">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="post_wpr">
							<h2 class="post_title"><?php the_title(); ?></h2>


							<p class="date">
								<?php 
									$date = get_the_date('d/m/Y');
									$date .= ' às '. get_the_time('g:i');

									if(get_the_modified_date()){
										$date .= ' - Atualizado em '. get_the_modified_date('d/m/Y') .' às '. get_the_modified_date('g:i');
									}
									//echo get_the_modified_date();
									echo $date; 
								?>
							</p>

						<?php
							$video_youtube_id = htmlspecialchars(get_post_meta(get_the_ID(), 'video_youtube_id', true)); 
							if($video_youtube_id):
						?>
							<div class="video_wpr thumb">
								<iframe src="https://www.youtube.com/embed/<?php echo $video_youtube_id; ?>?rel=0&modestbranding=1&showinfo=0&controls=1&theme=light" frameborder="0" allowfullscreen ></iframe>
							</div>
						<?php elseif ( has_post_thumbnail()): ?>
							<figure class="thumb">
								<?php the_post_thumbnail();  ?>
							</figure>
						<?php else: ?>
							<figure class="thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/no-thumb.png"/>
							</figure>
						<?php endif; ?>

							<div class="text">
								<?php the_content(); ?>
							</div>	
							<div class="tags">
								<span>Tags: </span><?php the_tags( "", " ", "" ); ?>
							</div>
							<div class="nextprev_buttons">
								<div class="col1-4">
									<span class="post_prev"><?php previous_post_link('%link', 'Anterior', TRUE); ?></span>
								</div>
								<div class="col2-4">
									&nbsp;
								</div>
								<div class="col1-4">
									<span class="post_next"><?php next_post_link('%link', 'Próximo', TRUE); ?></span>
								</div>
								<span class="clear"></span>
							</div>
							<div class="facebook">
								<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-mobile="true" width="auto"></div>
							</div>
							<span class="clear"></span>		
						</div>				
					</article>

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>
				</main>
			</div>
			<div class="col1-3">					
				<?php get_template_part('sidebar'); ?>
			</div>
			
			<span class="clear"></span>
		</div><!-- .block_cntt -->
	</section><!-- .block_01 -->


<?php get_footer(); ?>
