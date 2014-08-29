<?php
/* @var $this PostsController */
/* @var $data Posts */
?>

<div class="view">

    <?php foreach($comments as $key=>$value){ ?>

            username:<?=CHtml::encode($value['create_user']);?>
            <br>
            content:<?=CHtml::encode($value['content']);?>
            <br>
        <?php }?>

</div>