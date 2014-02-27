<?php
/* @var $this WareservicesController */
/* @var $model Wareservices */

$this->breadcrumbs=array(
	'Wareservices'=>array('index'),
	$model->IDWareservices,
);

$this->menu=array(
	array('label'=>'List Wareservices', 'url'=>array('index')),
	array('label'=>'Create Wareservices', 'url'=>array('create')),
	array('label'=>'Update Wareservices', 'url'=>array('update', 'id'=>$model->IDWareservices)),
	array('label'=>'Delete Wareservices', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDWareservices),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Wareservices', 'url'=>array('admin')),
);
?>

<h1>View Wareservices #<?php echo $model->IDWareservices; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label' => 'Ware',
			'type' => 'raw',
			'value' => $model->iDWare->Name,
		),
		array(
			'label' => 'Service',
			'type' => 'raw',
			'value' => $model->iDService->Name,
		),
		'CountHours',
	),
)); ?>
