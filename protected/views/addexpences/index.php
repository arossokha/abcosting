<?php
/* @var $this AddexpencesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Addexpences',
);

$this->menu=array(
	array('label'=>'Create addexpences', 'url'=>array('create')),
	array('label'=>'Manage addexpences', 'url'=>array('admin')),
);
?>

<h1>Addexpences</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
