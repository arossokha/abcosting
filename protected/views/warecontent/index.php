<?php
/* @var $this WarecontentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Warecontents',
);

$this->menu=array(
	array('label'=>'Create Warecontent', 'url'=>array('create')),
	array('label'=>'Manage Warecontent', 'url'=>array('admin')),
);
?>

<h1>Warecontents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
