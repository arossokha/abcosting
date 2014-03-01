<?php
/* @var $this WareservicesController */
/* @var $model Wareservices */

$this->breadcrumbs=array(
	'Wareservices'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Wareservices', 'url'=>array('index')),
	array('label'=>'Create Wareservices', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#wareservices-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Wareservices</h1>
<?php echo CHtml::link('Create',array($this->id.'/create')); ?>
<br />
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'wareservices-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		array(
			'header' => 'Ware',
			'type' => 'raw',
			'sortable' => true,
			'id' => 'IDWare',
			'filter' => $model->iDWare,
			'value' => '$data->iDWare->Name',
		),
		array(
			'header' => 'Service',
			'type' => 'raw',
			'sortable' => true,
			'id' => 'IDService',
			'filter' => $model->iDService,
			'value' => '$data->iDService->Name',
		),
		'CountHours',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
