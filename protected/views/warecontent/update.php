<?php
/* @var $this WarecontentController */
/* @var $model Warecontent */

$this->breadcrumbs=array(
	'Warecontents'=>array('index'),
	$model->IDWarecontent=>array('view','id'=>$model->IDWarecontent),
	'Update',
);

$this->menu=array(
	array('label'=>'List Warecontent', 'url'=>array('index')),
	array('label'=>'Create Warecontent', 'url'=>array('create')),
	array('label'=>'View Warecontent', 'url'=>array('view', 'id'=>$model->IDWarecontent)),
	array('label'=>'Manage Warecontent', 'url'=>array('admin')),
);
?>

<h1>Update Warecontent <?php echo $model->IDWarecontent; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>