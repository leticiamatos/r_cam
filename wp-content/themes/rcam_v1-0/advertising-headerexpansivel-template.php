<?php 
	$link_redirecionamento = 'htt://maps.google.com';
	$imagem_banner = 'http://localhost/grupott/revistacaminhoneiro/wp/wp-content/themes/rcam_v1-0/img/z_lixo/modal.jpg';
	$imagem_expandido = 'http://localhost/grupott/revistacaminhoneiro/wp/wp-content/themes/rcam_v1-0/img/z_lixo/modal.jpg';
	$video_youtube_id = false;
?>
	
<div class="adv_expansive adv_header">
	<figure class="adv_banner">

		<img src="<?php echo $imagem_banner; ?>" />

	</figure>
	<figure class="adv_expanded">

		<img src="<?php echo $imagem_expandido; ?>" />
		
		<?php if ($video_youtube_id): ?>
			<iframe src="https://www.youtube.com/embed/<?php echo $video_youtube_id; ?>?rel=0&autoplay=1&modestbranding=1&showinfo=0&controls=1&theme=light"  frameborder="0" allowfullscreen ></iframe>
		<?php endif; ?>

		<a href="<?php echo $link_redirecionamento; ?>" class="adv_link" target="_blank"></a>
		<a class="less"></a>
	</figure>
	<figure class="adv_expansive_mobile"></figure>
</div>