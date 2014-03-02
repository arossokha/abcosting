<?php
/* @var $this WarematerialsController */
/* @var $model Warematerials */

$this->breadcrumbs=array(
	'Warematerials'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Warematerials', 'url'=>array('index')),
	array('label'=>'Create Warematerials', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#warematerials-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Production Card</h1>
<?php echo CHtml::link('Create',array($this->id.'/create')); ?>
<br />
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'warematerials-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		array(
			'header' => 'Work',
			'type' => 'raw',
			'sortable' => true,
			'id' => 'IDWork',
			'filter' => $model->iDWork,
			'value' => '$data->iDWork->Name',
		),
		array(
			'header' => 'Ware',
			'type' => 'raw',
			'sortable' => true,
			'id' => 'IDWare',
			'filter' => $model->iDWare,
			'value' => '$data->iDWare->Name',
		),
		array(
			'header' => 'Materials hardwares',
			'type' => 'raw',
			'sortable' => true,
			'id' => 'IDMH',
			'filter' => $model->iDMH,
			'value' => '$data->iDMH->Name',
		),
		array(
			'header' => 'Equipment',
			'type' => 'raw',
			'sortable' => true,
			'id' => 'IDEquip',
			'filter' => $model->iDEquip,
			'value' => '$data->iDEquip->Name',
		),
		'CountMaterials',
		'HoursWork',
		'HoursEquip',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
