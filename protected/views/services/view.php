<?php
/* @var $this ServicesController */
/* @var $model Services */

$this->breadcrumbs=array(
	'Services'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Services', 'url'=>array('index')),
	array('label'=>'Create Services', 'url'=>array('create')),
	array('label'=>'Update Services', 'url'=>array('update', 'id'=>$model->IDService)),
	array('label'=>'Delete Services', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDService),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Services', 'url'=>array('admin')),
);
?>

<h1>View Services #<?php echo $model->IDService; ?></h1>

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
