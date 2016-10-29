<?php 
/*
BOX ATHOR
*/
?>
    <div class="box-author">
        <?php echo get_avatar(get_the_author_id() , 80 );?>
            <p>
                <?php echo get_the_author();?>
            </p>
    </div>