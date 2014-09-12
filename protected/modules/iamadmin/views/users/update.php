<?php
/* @var $this UsersController */
/* @var $model Users */
?>
    <div class="demo-title">
        Edit User <?php echo $model->username; ?>
    </div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>