<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="demo-title">
    添加用户
</div>
<div class="form pal">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'navbar-form'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username',array('class'=>'login-field-icon fui-user')); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20 ,'class'=>"form-control login-field", 'placeholder'=>"用户名")); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nickname',array('class'=>'login-field-icon fui-heart')); ?>
		<?php echo $form->textField($model,'nickname',array('size'=>20,'maxlength'=>20,'class'=>"form-control login-field", 'placeholder'=>"昵称")); ?>
		<?php echo $form->error($model,'nickname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password',array('class'=>'login-field-icon fui-eye')); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>32,'maxlength'=>32,'class'=>"form-control login-field", 'placeholder'=>"密码")); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email',array('class'=>'login-field-icon fui-mail')); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100,'class'=>"form-control login-field", 'placeholder'=>"电子邮件地址")); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'info',array('class'=>'login-field-icon fui-chat')); ?>
		<?php echo $form->textField($model,'info',array('size'=>60,'maxlength'=>200,'class'=>"form-control login-field", 'placeholder'=>"个性签名")); ?>
		<?php echo $form->error($model,'info'); ?>
	</div>

	<div class="row buttons col-sm-2 blogli">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary btn-lg btn-block')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->