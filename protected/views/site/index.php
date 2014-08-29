<?php
/* @var $this SiteController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name;
?>

<div class="col-md-11 list-group post-list no-padding with-shadow">

<ul class="style1">
    <?php
    foreach($list as $key=>$value){
        ?>
        <li style="padding-top: 10px;">
            <a href="<?=Yii::app()->request->BaseUrl.'/posts/index?category='.$value->category_name->name;?>" class="pl-category">
                <span class="label label-info"><?=$value->category_name->name;?></span>
            </a>
            <p class="date">
                <?=date("d",$value['create_time']);?>
                <b>
                    <?=date("m",$value['create_time']);?>
                </b>
                <strong>
                    <?=date("Y",$value['create_time']);?>
                </strong>
            </p>
            <a class="pl-title" href="<?=Yii::app()->request->BaseUrl;?>/index.php/Posts/view/<?=$value['id'];?>">
                <h5><?=$value['title'];?></h5>
            </a>
                <?=preg_replace('/\s(?=\s)/','',substr(strip_tags($value['content']),0,150));?>
        </li>
    <?php }?>
</ul>
    <?php
    XUtils::linkPage($pages,$this)
    ?>
</div>

