<?php
/* @var $this MaterialshardwaresController */
/* @var $model Materialshardwares */

$this->breadcrumbs=array(
	'Materialshardwares'=>array('index'),
	$model->Name=>array('view','id'=>$model->IDMH),
	'Update',
);

$this->menu=array(
	array('label'=>'List Materialshardwares', 'url'=>array('index')),
	array('label'=>'Create Materialshardwares', 'url'=>array('create')),
	array('label'=>'View Materialshardwares', 'url'=>array('view', 'id'=>$model->IDMH)),
	array('label'=>'Manage Materialshardwares', 'url'=>array('admin')),
);
?>

<h1>Update Materialshardwares <?php echo $model->IDMH; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>