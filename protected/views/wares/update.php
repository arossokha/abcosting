<?php
/* @var $this WaresController */
/* @var $model Wares */

$this->breadcrumbs=array(
	'Wares'=>array('index'),
	$model->Name=>array('view','id'=>$model->IDWare),
	'Update',
);

$this->menu=array(
	array('label'=>'List Wares', 'url'=>array('index')),
	array('label'=>'Create Wares', 'url'=>array('create')),
	array('label'=>'View Wares', 'url'=>array('view', 'id'=>$model->IDWare)),
	array('label'=>'Manage Wares', 'url'=>array('admin')),
);
?>

<h1>Update Wares <?php echo $model->IDWare; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>