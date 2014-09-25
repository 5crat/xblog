<?php /* @var $this Controller */

Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile($this->assetsUrl.'/js/bootstrap.min.js',CClientScript::POS_END);
Yii::app()->clientScript->registerCSSFile($this->assetsUrl.'/css/bootstrap.css');
Yii::app()->clientScript->registerCSSFile($this->assetsUrl.'/css/flat-ui.css');
Yii::app()->clientScript->registerCSSFile($this->assetsUrl.'/css/prettify.css');
Yii::app()->clientScript->registerCSSFile($this->assetsUrl.'/css/docs.css');
Yii::app()->clientScript->registerCSSFile($this->assetsUrl.'/css/blogstyle.css');
Yii::app()->clientScript->registerCSSFile($this->assetsUrl.'/css/ext.min.css');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="<?=$this->assetsUrl;?>/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=$this->assetsUrl;?>/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="page" class="container">
    <div id="header">
        <div id="logo">
            <img src="<?=$this->assetsUrl;?>/images/header.png" height="100px" width="100px" />
            <h1><a href="#">Xss</a></h1>
            <span>Design by <a href="#" rel="nofollow">XSS</a></span>
        </div>
        <div id="menu">
            <?php
            $menu = array(array('label'=>'HomePage', 'url'=>array('/')));
            foreach(Categorys::model()->findAll() as $key=>$value)
            {
                array_push($menu,array('label'=>$value['name'], 'url'=>array('/Posts/index','category'=>$value['name'])));
            }
            array_push($menu,array('label'=>'about', 'url'=>array('/site/page', 'view'=>'about')));
            $this->widget('zii.widgets.CMenu',array(
                'items'=>$menu,
                )); ?>
        </div>
    </div>
    <div id="main">
            <?php echo $content;?>
    </div>
    </div>

</body>
</html>
