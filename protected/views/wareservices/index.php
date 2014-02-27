<?php
/* @var $this WareservicesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Wareservices',
);

$this->menu=array(
	array('label'=>'Create Wareservices', 'url'=>array('create')),
	array('label'=>'Manage Wareservices', 'url'=>array('admin')),
);
?>

<h1>Wareservices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
