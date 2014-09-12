<?php
/* @var $this PostsController */
/* @var $model Posts */
/* @var $tag Posts */
?>
<div class="demo-title">
    编辑文章
</div>
<?php $this->renderPartial('_form', array('model'=>$model,'tag'=>$tag)); ?>