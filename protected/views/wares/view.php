<?php
/* @var $this WaresController */
/* @var $model Wares */

$this->breadcrumbs=array(
	'Wares'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Wares', 'url'=>array('index')),
	array('label'=>'Create Wares', 'url'=>array('create')),
	array('label'=>'Update Wares', 'url'=>array('update', 'id'=>$model->IDWare)),
	array('label'=>'Delete Wares', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDWare),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Wares', 'url'=>array('admin')),
);
?>

<h1>View Wares #<?php echo $model->IDWare; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Name',
	),
)); ?>
