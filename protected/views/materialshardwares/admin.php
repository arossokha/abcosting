<?php
/* @var $this MaterialshardwaresController */
/* @var $model Materialshardwares */

$this->breadcrumbs=array(
	'Materialshardwares'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Materialshardwares', 'url'=>array('index')),
	array('label'=>'Create Materialshardwares', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#materialshardwares-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Materialshardwares</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'materialshardwares-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'Name',	
		array(
			'name' => 'UnitCost',
			'type' => 'raw',
			'value' => '\'$\'.$data->UnitCost',
		),
		array(
			'header' => 'Hardware Type',
			'type' => 'raw',
			'sortable' => true,
			'id' => 'IDType',
			'filter' => $model->iDType,
			'value' => '$data->iDType->Name',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
