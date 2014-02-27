<?php
/* @var $this WaresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Wares',
);

$this->menu=array(
	array('label'=>'Create Wares', 'url'=>array('create')),
	array('label'=>'Manage Wares', 'url'=>array('admin')),
);
?>

<h1>Wares</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
