<?php
/* @var $this WarecontentController */
/* @var $model Warecontent */

$this->breadcrumbs=array(
	'Warecontents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Warecontent', 'url'=>array('index')),
	array('label'=>'Manage Warecontent', 'url'=>array('admin')),
);
?>

<h1>Create Warecontent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>