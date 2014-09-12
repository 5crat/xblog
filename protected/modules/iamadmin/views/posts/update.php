<?php
/* @var $this PostsController */
/* @var $model Posts */
/* @var $tag Posts */
?>
<div class="demo-title">
    Edit Article
</div>

<?php $this->renderPartial('_form', array('model'=>$model,'tag'=>$tag)); ?>