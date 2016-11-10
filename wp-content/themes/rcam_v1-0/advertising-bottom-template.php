
<?php 
	// Link externo 
	$link_redirecionamento = 'htt://maps.google.com';
	
	// Imagem do banner recolhido
	$imagem_banner = 'http://localhost/grupott/revistacaminhoneiro/wp/wp-content/themes/rcam_v1-0/img/z_lixo/banner_inf.jpg';
	
	// Imagem do banner expandido
	$imagem_expandido = 'http://localhost/grupott/revistacaminhoneiro/wp/wp-content/themes/rcam_v1-0/img/z_lixo/banner_inf2.jpg';
	
	// Id do vídeo do Youtube (entre aspas, eg.: '64wIZ409YDk') ou apenas false, se náo houver video  (obs: sem aspas)
	$video_youtube_id = '64wIZ409YDk';

?>
	
<section class="adv adv_footerwpr">
	<div class="adv_wpr">
		<div class="adv_expansive adv_footer">
			<figure class="adv_banner">
				<img src="<?php echo $imagem_banner; ?>" />
				<a class="adv_link" target="_blank"></a>
			</figure>
			<figure class="adv_expanded">
				<img src="<?php echo $imagem_expandido; ?>" />
				<a href="<?php echo $link_redirecionamento; ?>" class="adv_link" target="_blank"></a>

				<?php if ($video_youtube_id): ?>
					<iframe src="https://www.youtube.com/embed/<?php echo $video_youtube_id; ?>?rel=0&modestbranding=1&showinfo=0&controls=1&theme=light"  frameborder="0" allowfullscreen ></iframe>
				<?php endif; ?>
					
				<a class="less"></a>
			</figure>
			<figure class="adv_expansive_mobile"></figure>
		</div>
	</div>
</section>

