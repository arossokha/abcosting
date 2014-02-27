<?php
/* @var $this EquipsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Equips',
);

$this->menu=array(
	array('label'=>'Create Equips', 'url'=>array('create')),
	array('label'=>'Manage Equips', 'url'=>array('admin')),
);
?>

<h1>Equips</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
