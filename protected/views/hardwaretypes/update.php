<?php
/* @var $this HardwaretypesController */
/* @var $model Hardwaretypes */

$this->breadcrumbs=array(
	'Hardwaretypes'=>array('index'),
	$model->Name=>array('view','id'=>$model->IDType),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hardwaretypes', 'url'=>array('index')),
	array('label'=>'Create Hardwaretypes', 'url'=>array('create')),
	array('label'=>'View Hardwaretypes', 'url'=>array('view', 'id'=>$model->IDType)),
	array('label'=>'Manage Hardwaretypes', 'url'=>array('admin')),
);
?>

<h1>Update Hardwaretypes <?php echo $model->IDType; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>