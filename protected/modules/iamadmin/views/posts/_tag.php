<?php
/* @var $tag TagsController */
/* @var $model Posts */
/* @var $form CActiveForm */
?>

<?php echo $form->textField($tag,'name',array('size'=>50,'maxlength'=>50,'class'=>'tagsinput', 'value'=>empty($model->id)?'':Tags::model()->getTags($model->id),'style'=>'height:100%')); ?>
<?php echo $form->error($tag,'name'); ?>