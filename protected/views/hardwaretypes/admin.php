<?php
/* @var $this HardwaretypesController */
/* @var $model Hardwaretypes */

$this->breadcrumbs=array(
	'Hardwaretypes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Hardwaretypes', 'url'=>array('index')),
	array('label'=>'Create Hardwaretypes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#hardwaretypes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Hardwaretypes</h1>
<?php echo CHtml::link('Create',array($this->id.'/create')); ?>
<br />
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'hardwaretypes-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'IDType',
		'Name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
