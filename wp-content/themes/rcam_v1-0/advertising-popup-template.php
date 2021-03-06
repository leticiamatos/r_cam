<?php
	
	// Link externo 
	$link_redirecionamento - 'http://maps.google.com';
	
	// Imagem do popup
	$imagem_popup = 'http://localhost/grupott/revistacaminhoneiro/wp/wp-content/themes/rcam_v1-0/img/z_lixo/modal.jpg';
	
	// Id do vídeo do Youtube (entre aspas, eg.: '64wIZ409YDk') ou apenas false, se náo houver video
	$youtube_id = '64wIZ409YDk';

	// Se houver contagem regressiva, alterar para true. Se náo houver, manter false (obs: sem aspas)
	$contagem_regressiva = false;
?>
<section class="modal_bg">
	<div class="modal_box_relative">
		<div class="modal_box_absolute">
			<div class="modal_box">

				<?php if ($contagem_regressiva): ?>
	  			<p class="modal_header">
	  				<a class="close">
	  					aguarde <span class="time">5</span>s ou feche este anúncio
  					</a>
	  			</p>
				<?php endif; ?>

			  	<figure class="modal_banner">
		  			<img src="<?php echo $imagem_popup; ?>" />
			  	</figure>
	  			<a href="<?php echo $link_redirecionamento; ?>" target="_blank" class="adv_link"></a>

	  			<?php if ($youtube_id): ?>
		  			<div class="iframe_box">
		  				<iframe src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>?rel=0&autoplay=1&modestbranding=1&showinfo=0&controls=1&theme=light"  frameborder="0" allowfullscreen ></iframe>
	  				</div>
	  			<? endif; ?>
	  			
  				<a class="close_btn">
  				</a>
		  	</div>
	  	</div>
	</div>
</section>