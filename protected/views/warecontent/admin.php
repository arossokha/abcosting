<?php
/* @var $this WarecontentController */
/* @var $model Warecontent */

$this->breadcrumbs=array(
	'Warecontents'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Warecontent', 'url'=>array('index')),
	array('label'=>'Create Warecontent', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#warecontent-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>List of hardwares and semimanufactures</h1>
<?php echo CHtml::link('Create',array($this->id.'/create')); ?>
<br />
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'warecontent-grid',
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
			'header' => 'Materials hardwares',
			'type' => 'raw',
			'sortable' => true,
			'id' => 'IDMH',
			'filter' => $model->iDMH,
			'value' => '$data->iDMH->Name',
		),
		'CountHardware',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
