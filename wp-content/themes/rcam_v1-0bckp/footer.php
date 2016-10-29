	<?php if (!is_home()): ?>
		<section class="block_wpr adv content">
			<div class="block_cntt">
				<figure class="adv_wpr">
					<?php get_template_part('advertising', 'area12'); ?>
				</figure>
			</div>
		</section> <!-- .adv.content -->
	<?php endif; ?>

		<section class="block_wpr revista block_carousel">
			<div class="block_cntt">
				<span class="block_border"></span>
				<?php get_template_part('index', 'revista'); ?>
			</div>			
		</section> <!-- .revista -->
		
	<?php if (is_home() || is_single() || is_category()): ?>
		<section class="block_wpr adv content">
			<div class="block_cntt">
				<figure class="adv_wpr">
					<?php get_template_part('advertising', 'area9'); ?>
				</figure>
			</div>
		</section> <!-- .adv.content -->
	<?php endif; ?>

		<?php get_template_part('footer', 'contato'); ?>

		<?php get_template_part('footer', 'sitemap'); ?>

			<footer class="block_wpr footer">
				<div class="block_cntt">
					<div class="col1-4">
						<h1 class="footer-logo">
							<a href="<?php echo home_url(); ?>" title="Revista Caminhoneiro" alt="Revista Caminhoneiro">
						  		<?php get_template_part('svg', 'logo'); ?>
							</a>
						</h1>
					</div>
					<div class="col2-4">
						<figure class="adv_wpr adv footer">
							<?php get_template_part('advertising', 'area10'); ?>
						</figure>
					</div>
					<div class="col1-4">
						<?php 
							wp_nav_menu( $args = array('menu' => 'social') );
						?>
					</div>
					<span class="clear"></span>
				</div><!-- .block_cntt -->
			</footer><!-- .footer -->			

			<section class="block_wpr copyright">
				<div class="block_cntt">
						<div class="copyright_txt">&copy; 2001 - <?php echo date('Y'); ?> - <?php bloginfo('name'); ?> <span>- A mais respeitada publicação para caminhneiros. Todos os direitos reservados</span></div>
						<p class="layerup-logo">
							<a href="http://www.layerup.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/layerup-logo.png" alt="Layer Up" title="Layer Up" />&nbsp;</a>
						</p>
				</div><!-- .block_cntt -->
			</section><!-- .copyright -->

		</section>

		<?php wp_footer(); ?>
		<?php include_once("trackingevent.php"); ?>
		
	</body>
</html>
