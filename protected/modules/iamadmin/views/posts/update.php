<?php
/* @var $this PostsController */
/* @var $model Posts */
/* @var $tag Posts */
?>

<h1>Update Posts <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'tag'=>$tag)); ?>