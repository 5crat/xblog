<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
?>

<div class="container-fluid">

    <div class="bloglogin col-sm-5 col-lg-offset-3">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'login-form',
            'enableAjaxValidation'=>false,
            'enableClientValidation'=>false,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
            'htmlOptions'=>array('class'=>'login-form','role'=>'form'),
        )); ?>
    <h2 class="form-signin-heading">Please sign in</h2>
        <div class="form-group">
            <?php echo $form->labelEx($model,'',array('class'=>"login-field-icon fui-user",'for'=>"login-name")); ?>
            <?php echo $form->textField($model,'username',array('class'=>'form-control login-field','placeholder'=>'Username')); ?>
            <?php echo $form->error($model,'username'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model,'',array('class'=>"login-field-icon fui-eye",'for'=>"login-pass")); ?>
            <?php echo $form->passwordField($model,'password',array('class'=>'form-control login-field','placeholder'=>'Password')); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model,'',array('class'=>"login-field-icon fui-lock",'for'=>'login-captcha')); ?>
            <?php echo $form->textField($model,'verifyCode',array('class'=>'form-group form-control login-field','placeholder'=>'Verifycode')); ?>
            <?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('class'=>'login-field','alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer'))); ?>
            <?php echo $form->error($model,'verifyCode'); ?>
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