<?php
/* @var $this AddexpencesController */
/* @var $model addexpences */

$this->breadcrumbs=array(
	'Addexpences'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List addexpences', 'url'=>array('index')),
	array('label'=>'Manage addexpences', 'url'=>array('admin')),
);
?>

<h1>Create addexpences</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>