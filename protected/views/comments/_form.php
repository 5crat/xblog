<div class="form">
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id'=>'comment-form',
        'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
    )); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'create_user'); ?>
        <?php echo $form->textField($model,'create_user'); ?>
        <?php echo $form->error($model,'create_user'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'user_email'); ?>
        <?php echo $form->textField($model,'user_email'); ?>
        <?php echo $form->error($model,'user_email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'content'); ?>
        <?php echo $form->textField($model,'content'); ?>
        <?php echo $form->error($model,'content'); ?>
    </div>
    <div class="row buttons pal">
        <?php echo CHtml::submitButton('提交',array('class'=>'btn btn-embossed btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>