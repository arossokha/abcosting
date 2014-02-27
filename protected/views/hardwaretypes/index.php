<?php
/* @var $this HardwaretypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hardwaretypes',
);

$this->menu=array(
	array('label'=>'Create Hardwaretypes', 'url'=>array('create')),
	array('label'=>'Manage Hardwaretypes', 'url'=>array('admin')),
);
?>

<h1>Hardwaretypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
