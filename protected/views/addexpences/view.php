<?php
/* @var $this AddexpencesController */
/* @var $model addexpences */

$this->breadcrumbs=array(
	'Addexpences'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List addexpences', 'url'=>array('index')),
	array('label'=>'Create addexpences', 'url'=>array('create')),
	array('label'=>'Update addexpences', 'url'=>array('update', 'id'=>$model->IDExpence)),
	array('label'=>'Delete addexpences', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDExpence),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage addexpences', 'url'=>array('admin')),
);
?>

<h1>View addexpences #<?php echo $model->IDExpence; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Name',
		array(
			'label' => 'CostHour',
			'type' => 'raw',
			'value' => '$'.$model->CostHour,
		)
		,
	),
)); ?>
