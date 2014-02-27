<?php
/* @var $this MaterialshardwaresController */
/* @var $model Materialshardwares */

$this->breadcrumbs=array(
	'Materialshardwares'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Materialshardwares', 'url'=>array('index')),
	array('label'=>'Create Materialshardwares', 'url'=>array('create')),
	array('label'=>'Update Materialshardwares', 'url'=>array('update', 'id'=>$model->IDMH)),
	array('label'=>'Delete Materialshardwares', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDMH),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Materialshardwares', 'url'=>array('admin')),
);
?>

<h1>View Materialshardwares #<?php echo $model->IDMH; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Name',
		array(
			'label' => 'Type',
			'type' => 'raw',
			'value' => $model->iDType->Name,
		),
		array(
			'label' => 'UnitCost',
			'type' => 'raw',
			'value' => '$'.$model->UnitCost,
		)
	),
)); ?>
