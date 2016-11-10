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
		
	<?php if (is_home()): ?>
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
			
			

			<?php get_template_part('advertising', 'bottom'); ?>
			<?php get_template_part('advertising', 'right'); ?>
			<?php get_template_part('advertising', 'popup'); ?>

		</section>

		<?php wp_footer(); ?>

			<!-- analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-80097311-1', 'auto');
		ga('send', 'pageview');

		</script>
		
		 <!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WNFM3C"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WNFM3C');</script>
		<!-- End Google Tag Manager -->



		<?php //include_once("analyticstracking.php") ?>
		<script async defer>
                jQuery(document).ready(function(){
                jQuery('#banner-scania a').click(function() {
                    
                    ga('send', 'event', 'Banner','click', 'banner-Scania');
                });
                jQuery('#banner-texaco a').click(function() {
                    ga('send', 'event', 'Banner','click', 'banner-Texaco');
                });
                jQuery('#banner-iveco a').click(function() {
                    ga('send', 'event', 'Banner','click', 'banner-IVECO');
                });
                jQuery('#banner-alliance a').click(function() {
                    ga('send', 'event', 'Banner','click', 'banner-Alliance');
                });
                    console.log('teste');
                });
        </script>	
        
	</body>
	
</html>
