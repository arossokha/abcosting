<?php
/* @var $this WarematerialsController */
/* @var $model Warematerials */

$this->breadcrumbs=array(
	'Warematerials'=>array('index'),
	$model->IDWarematerials,
);

$this->menu=array(
	array('label'=>'List Warematerials', 'url'=>array('index')),
	array('label'=>'Create Warematerials', 'url'=>array('create')),
	array('label'=>'Update Warematerials', 'url'=>array('update', 'id'=>$model->IDWarematerials)),
	array('label'=>'Delete Warematerials', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDWarematerials),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Warematerials', 'url'=>array('admin')),
);
?>

<h1>View Warematerials #<?php echo $model->IDWarematerials; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label' => 'Work',
			'type' => 'raw',
			'value' => $model->iDWork->Name,
		),
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
		array(
			'label' => 'Equip',
			'type' => 'raw',
			'value' => $model->iDEquip->Name,
		),
		'CountMaterials',
		'HoursWork',
		'HoursEquip',
	),
)); ?>
