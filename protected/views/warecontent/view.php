<?php
/* @var $this WarecontentController */
/* @var $model Warecontent */

$this->breadcrumbs=array(
	'Warecontents'=>array('index'),
	$model->IDWarecontent,
);

$this->menu=array(
	array('label'=>'List Warecontent', 'url'=>array('index')),
	array('label'=>'Create Warecontent', 'url'=>array('create')),
	array('label'=>'Update Warecontent', 'url'=>array('update', 'id'=>$model->IDWarecontent)),
	array('label'=>'Delete Warecontent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDWarecontent),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Warecontent', 'url'=>array('admin')),
);
?>

<h1>View Warecontent #<?php echo $model->IDWarecontent; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label' => 'Ware',
			'type' => 'raw',
			'value' => $model->iDWare->Name,
		),
		array(
			'label' => 'Materials hardwares',
			'type' => 'raw',
			'value' => $model->iDMH->Name,
		),
		'CountHardware',
	),
)); ?>
