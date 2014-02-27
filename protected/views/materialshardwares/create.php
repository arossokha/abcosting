<?php
/* @var $this MaterialshardwaresController */
/* @var $model Materialshardwares */

$this->breadcrumbs=array(
	'Materialshardwares'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Materialshardwares', 'url'=>array('index')),
	array('label'=>'Manage Materialshardwares', 'url'=>array('admin')),
);
?>

<h1>Create Materialshardwares</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>