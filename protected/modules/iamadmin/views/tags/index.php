<?php
/* @var $this TagsController */
/* @var $dataProvider CActiveDataProvider */
?>

<h1>Tags</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
