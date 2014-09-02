<?php
/* @var $this PostsController */
/* @var $model Posts */
/* @var $comment PostsController */
?>

<header class="entry-header">
    <h3><?=$model->title;?></h3>
</header>
<div class="entry-meta" style="padding-top: 5px;padding-bottom: 5px">
    <a href="<?=Yii::app()->request->BaseUrl.'/posts/index?category='.$model->category_name->name;?>" class="pl-category"><span class="label label-info"><?=$model->category_name->name;?></span></a>
    <span class="fui-time"><?=date('Y-m-d h:s',$model->create_time);?></span>&nbsp;
    <a href="#comment"> <span class="fui-chat"><?=$model->comment_count;?>评论</span></a>
    <span class="label label-danger"><?=$model->getVisiterCount();?>人浏览</span>
    <span class="label label-default"><?=Tags::model()->getTags($model->id);?></span>
</div>
<hr>
<div class="entry-content">
    <?=$model->content;?>
</div>
<div class="entry-footer">
    <!--文章评论显示-->
    <div id="comments">
        <?php if($model->comment_count>=1): ?>
            <h3>
                共<?=$model->comment_count; ?>条评论
            </h3>

            <?php $this->renderPartial('_comments',array(
                'post'=>$model,
                'comments'=>Comments::model()->findAll('pid=:pid',array(':pid'=>$model->id)),
            )); ?>
        <?php endif; ?>
    </div>
    <!--文章评论提交-->
    <div class="jumbotron" id="comment">
        <div class="container">
            <?php $this->renderPartial('/comments/_form',array(
                'model'=>$comment,
            ));?>
        </div>
    </div>
</div>

