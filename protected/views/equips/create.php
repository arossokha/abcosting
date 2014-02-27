<?php
/* @var $this EquipsController */
/* @var $model Equips */

$this->breadcrumbs=array(
	'Equips'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Equips', 'url'=>array('index')),
	array('label'=>'Manage Equips', 'url'=>array('admin')),
);
?>

<h1>Create Equips</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>