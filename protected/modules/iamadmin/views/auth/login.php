<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
?>

<div class="container-fluid">

    <div class="bloglogin col-sm-4 col-lg-offset-4">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'login-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
            'htmlOptions'=>array('class'=>'login-form','role'=>'form'),
        )); ?>
    <h2 class="form-signin-heading">Please sign in</h2>
            <div class="form-group">
                <?php echo $form->labelEx($model,'',array('class'=>"login-field-icon fui-user",'for'=>"login-name")); ?>
                <?php echo $form->textField($model,'username',array('class'=>'form-control login-field','placeholder'=>'UserName')); ?>
                <?php echo $form->error($model,'username'); ?>

            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model,'',array('class'=>"login-field-icon fui-lock",'for'=>"login-pass")); ?>
                <?php echo $form->passwordField($model,'password',array('class'=>'form-control login-field','placeholder'=>'PassWord')); ?>
                <?php echo $form->error($model,'password'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->checkBox($model,'rememberMe'); ?>
                <?php echo $form->label($model,'rememberMe'); ?>
                <?php echo $form->error($model,'rememberMe'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-primary btn-lg btn-block')); ?>
            </div>

    </div>
<?php $this->endWidget(); ?>
</div>