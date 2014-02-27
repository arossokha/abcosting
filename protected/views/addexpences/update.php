<?php
/* @var $this AddexpencesController */
/* @var $model addexpences */

$this->breadcrumbs=array(
	'Addexpences'=>array('index'),
	$model->Name=>array('view','id'=>$model->IDExpence),
	'Update',
);

$this->menu=array(
	array('label'=>'List addexpences', 'url'=>array('index')),
	array('label'=>'Create addexpences', 'url'=>array('create')),
	array('label'=>'View addexpences', 'url'=>array('view', 'id'=>$model->IDExpence)),
	array('label'=>'Manage addexpences', 'url'=>array('admin')),
);
?>

<h1>Update addexpences <?php echo $model->IDExpence; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>