<?php
/* @var $this PostsController */
/* @var $model Posts */

?>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'category_id',
		'content',
		'status',
	),
)); ?>
