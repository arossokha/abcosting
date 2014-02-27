<?php
/* @var $this EquipsController */
/* @var $model Equips */

$this->breadcrumbs=array(
	'Equips'=>array('index'),
	$model->Name=>array('view','id'=>$model->IDEquip),
	'Update',
);

$this->menu=array(
	array('label'=>'List Equips', 'url'=>array('index')),
	array('label'=>'Create Equips', 'url'=>array('create')),
	array('label'=>'View Equips', 'url'=>array('view', 'id'=>$model->IDEquip)),
	array('label'=>'Manage Equips', 'url'=>array('admin')),
);
?>

<h1>Update Equips <?php echo $model->IDEquip; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>