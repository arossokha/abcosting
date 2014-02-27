<?php
/* @var $this WarematerialsController */
/* @var $model Warematerials */

$this->breadcrumbs=array(
	'Warematerials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Warematerials', 'url'=>array('index')),
	array('label'=>'Manage Warematerials', 'url'=>array('admin')),
);
?>

<h1>Create Warematerials</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>