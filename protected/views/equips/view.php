<?php
/* @var $this EquipsController */
/* @var $model Equips */

$this->breadcrumbs=array(
	'Equips'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Equips', 'url'=>array('index')),
	array('label'=>'Create Equips', 'url'=>array('create')),
	array('label'=>'Update Equips', 'url'=>array('update', 'id'=>$model->IDEquip)),
	array('label'=>'Delete Equips', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDEquip),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Equips', 'url'=>array('admin')),
);
?>

<h1>View Equips #<?php echo $model->IDEquip; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Name',
		array(
			'label' => 'CostHour',
			'type' => 'raw',
			'value' => '$'.$model->CostHour,
		)
	),
)); ?>
