<?php
/* @var $this WarematerialsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Warematerials',
);

$this->menu=array(
	array('label'=>'Create Warematerials', 'url'=>array('create')),
	array('label'=>'Manage Warematerials', 'url'=>array('admin')),
);
?>

<h1>Warematerials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
