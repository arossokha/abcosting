<?php
/* @var $this HardwaretypesController */
/* @var $model Hardwaretypes */

$this->breadcrumbs=array(
	'Hardwaretypes'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Hardwaretypes', 'url'=>array('index')),
	array('label'=>'Create Hardwaretypes', 'url'=>array('create')),
	array('label'=>'Update Hardwaretypes', 'url'=>array('update', 'id'=>$model->IDType)),
	array('label'=>'Delete Hardwaretypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDType),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hardwaretypes', 'url'=>array('admin')),
);
?>

<h1>View Hardwaretypes #<?php echo $model->IDType; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Name',
	),
)); ?>
