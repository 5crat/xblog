<?php /* @var $this Controller */

Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile($this->assetsUrl.'/js/bootstrap.min.js',CClientScript::POS_END);
Yii::app()->clientScript->registerCSSFile($this->assetsUrl.'/css/bootstrap.css');
Yii::app()->clientScript->registerCSSFile($this->assetsUrl.'/css/flat-ui.css');
Yii::app()->clientScript->registerCSSFile($this->assetsUrl.'/css/prettify.css');
Yii::app()->clientScript->registerCSSFile($this->assetsUrl.'/css/docs.css');
Yii::app()->clientScript->registerCSSFile($this->assetsUrl.'/css/blogstyle.css');
Yii::app()->clientScript->registerCssFile($this->assetsUrl.'/css/ext.min.css');
Yii::app()->clientScript->registerCssFile($this->assetsUrl.'/css/jquery.tagsinput.css');
Yii::app()->clientScript->registerScriptFile($this->assetsUrl.'/js/jquery.tagsinput.min.js');
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>BackEnd</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php echo $content;?>
</body>
</html>