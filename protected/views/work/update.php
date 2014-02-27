<?php
/* @var $this WorkController */
/* @var $model Work */

$this->breadcrumbs=array(
	'Works'=>array('index'),
	$model->Name=>array('view','id'=>$model->IDWork),
	'Update',
);

$this->menu=array(
	array('label'=>'List Work', 'url'=>array('index')),
	array('label'=>'Create Work', 'url'=>array('create')),
	array('label'=>'View Work', 'url'=>array('view', 'id'=>$model->IDWork)),
	array('label'=>'Manage Work', 'url'=>array('admin')),
);
?>

<h1>Update Work <?php echo $model->IDWork; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>