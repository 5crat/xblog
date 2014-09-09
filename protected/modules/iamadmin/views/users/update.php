<?php
/* @var $this UsersController */
/* @var $model Users */
?>
    <div class="demo-title">
        更新用户 <?php echo $model->username; ?>
    </div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>