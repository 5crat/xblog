<?php
/* @var $this PostsController */
/* @var $model Posts */
/* @var $form CActiveForm */
/* @var $tag Posts */
?>
<div class="demo-title">
    发布文章
</div>
<div class="form pal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'posts-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'navbar-form'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row pbl">
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100,'class'=>'form-control login-field','placeholder'=>'文章标题')); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="dropdown row pbl">
		<?php echo $form->dropDownList($model,'category_id',Posts::model()->getCategoryList(),array('class'=>'btn btn-primary dropdown-toggle divider','role'=>"presentation")); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
        <?php $form->widget('ext.ueditor.UeditorWidget',array(
            'id'=>'Posts_content',
            'name'=>'editor',
        ));?>
		<?php echo $form->error($model,'content'); ?>
	</div>

    <div class="row pal" style="padding-left: 0px">
        <?php
            $this->renderPartial('_tag',array(
               'model'=>$model,
                'form'=>$form,
                'tag'=>$tag,
            ));
        ?>
    </div>
	<div class="row buttons pal">
		<?php echo CHtml::submitButton($model->isNewRecord ? '发布文章' : '保存',array('class'=>'btn btn-embossed btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->