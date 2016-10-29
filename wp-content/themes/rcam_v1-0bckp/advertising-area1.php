<?
/*
Description: Mudança o=no arquivo para a campanha da Ford
*/
?>
<?php if(is_home()){
    ?>
    <div id="%1$s" class="%2$s banner_area-01 banner_area">
    <?php the_ad_group(493);?>
    </div>
    <?
    
}else{
    ?>
		
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
    <?
    
}?>
