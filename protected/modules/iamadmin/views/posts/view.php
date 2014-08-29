<?php
/* @var $this PostsController */
/* @var $model Posts */

?>

<h1>View Posts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'category_id',
		'content',
		'status',
		'create_time',
		'update_time',
	),
)); ?>
