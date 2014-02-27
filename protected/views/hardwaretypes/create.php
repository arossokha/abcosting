<?php
/* @var $this HardwaretypesController */
/* @var $model Hardwaretypes */

$this->breadcrumbs=array(
	'Hardwaretypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hardwaretypes', 'url'=>array('index')),
	array('label'=>'Manage Hardwaretypes', 'url'=>array('admin')),
);
?>

<h1>Create Hardwaretypes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>