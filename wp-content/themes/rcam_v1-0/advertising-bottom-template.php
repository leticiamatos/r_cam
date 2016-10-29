
<?php 
	$link_redirecionamento = 'htt://maps.google.com';
	$imagem_banner = 'http://localhost/grupott/revistacaminhoneiro/wp/wp-content/themes/rcam_v1-0/img/z_lixo/modal.jpg';
	$imagem_expandido = 'http://localhost/grupott/revistacaminhoneiro/wp/wp-content/themes/rcam_v1-0/img/z_lixo/modal.jpg';
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
				<a class="less"></a>
			</figure>
			<figure class="adv_expansive_mobile"></figure>
		</div>
	</div>
</section>

