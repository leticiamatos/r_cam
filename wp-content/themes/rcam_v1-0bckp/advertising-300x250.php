<?php 
	if(is_search() || is_tag() || is_archive()){
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2'));

	}
	elseif ( is_category('caminhoes') || in_category('caminhoes') ){
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-11-caminhoes'));
	}

	elseif ( is_category('caminhoneiro') || in_category('caminhoneiro') ){
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-11-caminhoneiro'));
	}

	elseif ( is_category('entretenimento') || in_category('entretenimento') ){
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-11-entretenimento'));
	}

	elseif ( is_category('blogs-e-colunas') || in_category('blogs-e-colunas') ){
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-11-blogs-e-colunas'));
	}

	elseif ( is_category('servicos') || in_category('servicos') ){
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-11-servicos'));
	}

	elseif ( is_category('noticias') || in_category('noticias') ){
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-11-noticias'));
	}

	else{
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2'));
	}

?>