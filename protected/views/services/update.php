<?php
/* @var $this ServicesController */
/* @var $model Services */

$this->breadcrumbs=array(
	'Services'=>array('index'),
	$model->Name=>array('view','id'=>$model->IDService),
	'Update',
);

$this->menu=array(
	array('label'=>'List Services', 'url'=>array('index')),
	array('label'=>'Create Services', 'url'=>array('create')),
	array('label'=>'View Services', 'url'=>array('view', 'id'=>$model->IDService)),
	array('label'=>'Manage Services', 'url'=>array('admin')),
);
?>

<h1>Update Services <?php echo $model->IDService; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>