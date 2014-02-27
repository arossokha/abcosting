<?php
/* @var $this WareservicesController */
/* @var $model Wareservices */

$this->breadcrumbs=array(
	'Wareservices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Wareservices', 'url'=>array('index')),
	array('label'=>'Manage Wareservices', 'url'=>array('admin')),
);
?>

<h1>Create Wareservices</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>