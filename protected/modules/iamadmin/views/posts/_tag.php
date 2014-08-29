<?php
/* @var $tag TagsController */
/* @var $model Posts */
/* @var $form CActiveForm */
?>

<?php echo $model->textField($tag,'name',array('size'=>50,'maxlength'=>50,'class'=>'tagsinput', 'value'=>Tags::model()->getTags($id))); ?>
<?php echo $model->error($tag,'name'); ?>