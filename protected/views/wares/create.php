<?php
/* @var $this WaresController */
/* @var $model Wares */

$this->breadcrumbs=array(
	'Wares'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Wares', 'url'=>array('index')),
	array('label'=>'Manage Wares', 'url'=>array('admin')),
);
?>

<h1>Create Wares</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>