<?php
/* @var $this WarematerialsController */
/* @var $model Warematerials */

$this->breadcrumbs=array(
	'Warematerials'=>array('index'),
	$model->IDWarematerials=>array('view','id'=>$model->IDWarematerials),
	'Update',
);

$this->menu=array(
	array('label'=>'List Warematerials', 'url'=>array('index')),
	array('label'=>'Create Warematerials', 'url'=>array('create')),
	array('label'=>'View Warematerials', 'url'=>array('view', 'id'=>$model->IDWarematerials)),
	array('label'=>'Manage Warematerials', 'url'=>array('admin')),
);
?>

<h1>Update Warematerials <?php echo $model->IDWarematerials; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>