<?php
/* @var $this CategorysController */
/* @var $model Categorys */
?>

    <div class="demo-title">
        编辑分类<?php echo $model->name; ?>
    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>