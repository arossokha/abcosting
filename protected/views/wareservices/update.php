<?php
/* @var $this WareservicesController */
/* @var $model Wareservices */

$this->breadcrumbs=array(
	'Wareservices'=>array('index'),
	$model->IDWareservices=>array('view','id'=>$model->IDWareservices),
	'Update',
);

$this->menu=array(
	array('label'=>'List Wareservices', 'url'=>array('index')),
	array('label'=>'Create Wareservices', 'url'=>array('create')),
	array('label'=>'View Wareservices', 'url'=>array('view', 'id'=>$model->IDWareservices)),
	array('label'=>'Manage Wareservices', 'url'=>array('admin')),
);
?>

<h1>Update Wareservices <?php echo $model->IDWareservices; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>