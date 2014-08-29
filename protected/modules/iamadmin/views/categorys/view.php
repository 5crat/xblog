<?php
/* @var $this CategorysController */
/* @var $model Categorys */

$this->breadcrumbs=array(
	'Categorys'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Categorys', 'url'=>array('index')),
	array('label'=>'Create Categorys', 'url'=>array('create')),
	array('label'=>'Update Categorys', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Categorys', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Categorys', 'url'=>array('admin')),
);
?>

<h1>View Categorys #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'update_time',
	),
)); ?>
