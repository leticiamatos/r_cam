<?php get_header(); ?>

	<main role="main">

		<section class="block_wpr ticker_rss ticker_rss1">
			<div class="block_cntt">
				<span class="icon"></span>
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-rss')); ?>
				<span class="clear"></span>
			</div>
		</section> <!-- .ticker_rss -->

		<section class="block_wpr highlight">
			<div class="block_cntt">
				<div class="col2-3">
					<?php get_template_part('loop', 'highlight'); ?>
					<?php get_template_part('newsletter'); ?>
				</div>
				<div class="col1-3">
					<?php get_template_part('loop', 'lastposts'); ?>
					<div class="space"></div>
				</div>
				<span class="clear"></span>
				<div class="bg_red col1-3"></div>
				
			</div>
		</section>

		<section class="block_wpr caminhoes block_tab">
			<div class="block_cntt">
				<span class="block_border"></span>
				<span class="block_border_gap"></span>
				<?php get_template_part('index', 'caminhoes'); ?>
				
			</div>			
		</section> <!-- .caminhoes -->

		<section class="block_wpr adv content">
			<div class="block_cntt">
				<figure class="adv_wpr">
					<?php get_template_part('advertising', 'area3'); ?>
				</figure>
			</div>
		</section> <!-- .adv.content -->

		<section class="block_wpr ticker_rss ticker_rss2">
			<div class="block_cntt">
				<span class="icon"></span>
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-rss2')); ?>
				<span class="clear"></span>
			</div>
		</section> <!-- .ticker_rss -->

		<section class="block_wpr caminhoneiro block_tab">
			<div class="block_cntt">
				<span class="block_border"></span>
				<span class="block_border_gap"></span>
				<?php get_template_part('index', 'caminhoneiro'); ?>
				
			</div>			
		</section> <!-- .caminhoneiro -->

		<section class="block_wpr servicos block_carousel">
			<div class="block_cntt">
				<span class="block_border"></span>
				<?php get_template_part('index', 'servicos'); ?>
			</div>			
		</section> <!-- .servicos -->

		<section class="block_wpr adv content">
			<div class="block_cntt">
				<figure class="adv_wpr">
					<?php get_template_part('advertising', 'area5'); ?>
				</figure>
			</div>
		</section> <!-- .adv.content -->

		<section class="block_wpr blogsecolunas">
			<div class="block_cntt">

				<div class="col2-3">
					<div class="col_cntt">
						<span class="block_border"></span>
						<span class="block_border_gap"></span>
						<?php get_template_part('index', 'blogsecolunas'); ?>
						<div class="adv blog">
							<figure class="adv_wpr">
								<?php get_template_part('advertising', 'area6'); ?>
							</figure>
						</div>
						<span class="clear"></span>
					</div> <!-- .col_cntt -->
				</div> <!-- .col2-3 -->
				<div class="col1-3">	
					<div class="col_cntt most_popular">
						<span class="block_border"></span>
						<?php if( function_exists('wpp_get_mostpopular')){ wpp_get_mostpopular( 'header="mais lidas"&limit=5' );} ?>
					</div> <!-- .col_cntt -->
				</div> <!-- .col1-3 -->

				<span class="clear"></span>

			</div>			
		</section> <!-- .blogsecolunas -->

		<section class="block_wpr ticker_rss ticker_rss3">
			<div class="block_cntt">
				<span class="icon"></span>
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-rss3')); ?>
				<span class="clear"></span>
			</div>
		</section> <!-- .ticker_rss -->

		<section class="block_wpr entretenimento block_tab">
			<div class="block_cntt">
				<span class="block_border"></span>
				<span class="block_border_gap"></span>
				<?php get_template_part('index', 'entretenimento'); ?>
				
			</div>			
		</section> <!-- .entretenimento -->
		
		<section class="block_wpr videos">
			<div class="block_cntt">
				<span class="block_border"></span>
				<span class="block_border_gap"></span>
	
				<?php
					// Categories IDs
					$cat_obj = get_category_by_slug( 'videos' );
					$cat_id = $cat_obj->term_id;
					$cat_link = get_category_link( $cat_id );
				?>

				<h3 class="block_title"><a href="<?php echo $cat_link; ?>">Vídeos</a></h3>
				<div class="col2-3">
					<div class="video_msg_wpr">
						<p class="video_msg">
							<a href="#" id="video_more_link">Clique aqui e veja mais sobre este vídeo</a>
							<span class="arrow_down"></span>
						</p>
					</div>
					<div class="video_loader" id="video_loader02">

						<div class="video_cntt"></div>
					</div>

				</div>
				<div class="col1-3">
					<?php get_template_part('video', 'list'); ?>
				</div>
				<span class="clear"></span>
	
			</div>
		</section> <!-- .videos -->



		<section class="block_wpr adv content">
			<div class="block_cntt">
				<figure class="adv_wpr">
					<?php get_template_part('advertising', 'area8'); ?>
				</figure>
			</div>
		</section> <!-- .adv.content -->

		<section class="block_wpr galeria">
			<div class="block_cntt">
				<div class="col2-3">
					<span class="block_border"></span>
					<span class="block_border_gap"></span>
					<?php get_template_part('index', 'galeria'); ?>
				</div>
				<div class="col1-3">
					<?php get_template_part('newsletter', 'footer'); ?>
				</div>
				<span class="clear"></span>
				
			</div>			
		</section> <!-- .galeria -->


		
		
	</main>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
