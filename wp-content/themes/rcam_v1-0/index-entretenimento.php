<?php
	$cat_obj = get_category_by_slug( 'entretenimento' );

	$cat_id = $cat_obj->term_id;

	$cat_obj_exclude_1 = get_category_by_slug( 'tirinhas' );
	$cat_id_exclude = $cat_obj_exclude_1->term_id;

?>
<?php 
    $args_cat = array(
    'hide_empty'		 => 0,
	'title_li'           => '',
	'parent'             => $cat_id,
	'exclude' 			 => $cat_id_exclude,
	'taxonomy'           => 'category'
    );
?>
<?php 
	$cats = get_categories( $args_cat); 
?> 

<div class="responsive_menu_subcat_wpr">
	<a href="javascript:void(0);" class="responsive_menu_subcat_link"></a>
	<ul class="subcat_list">
		<li class="cat_item main_cat"><a href="<?php echo  get_category_link( $cat_id ); ?>" class="link">entretenimento</a></li>
		<?php 
			foreach ($cats as $cat):
				$subcat_slug = $cat->slug;
				$subcat_id = $cat->cat_ID;
						echo '<li class="cat_item cat_item_'. $subcat_slug .'"><a href="'. get_category_link( $subcat_id ) .'" class="link">' .$subcat_slug . '</a></li>';			
			endforeach;	
		?>
	</ul>
</div>

<div id="tabs-ajax-entretenimento">
	<h3 class="block_title col1-2"><a href="<?php echo  get_category_link( $cat_id ); ?>" class="link">Entretenimento</a></h3>
	<ul class="primary menu block_cntt col1-2">
		<li><a href="<?php echo get_template_directory_uri(); ?>/ajax/index-tabs.php?catid=<?php echo $cat_id; ?>&section=entretenimento" class="link id_<?php echo $cat_id; ?>">Todos</a></li>
		<?php 
			foreach ($cats as $cat):
				$subcat_slug = $cat->slug;
				echo '<li class="li_wpr_'. $cat->slug . '"><a href="'. get_template_directory_uri(). '/ajax/index-tabs.php?catid='. $cat->cat_ID . '&section=entretenimento"" class="link '. $cat->slug . '">' .$cat->cat_name . '</a></li>';
			
			endforeach;	
		?>
	</ul>

</div>  <!-- #tabs-ajax -->

<?php wp_reset_postdata(); ?>
