<?php
/* @var $this CategorysController */
/* @var $model Categorys */
/* @var $form CActiveForm */
?>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'categorys-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'navbar-form'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50,'class'=>'form-control login-field','placeholder'=>'分类名称')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row buttons pal">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存',array('class'=>'btn btn-embossed btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->