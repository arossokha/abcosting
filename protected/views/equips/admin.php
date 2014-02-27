<?php
/* @var $this EquipsController */
/* @var $model Equips */

$this->breadcrumbs=array(
	'Equips'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Equips', 'url'=>array('index')),
	array('label'=>'Create Equips', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#equips-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Equips</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'equips-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'Name',
		array(
			'name' => 'CostHour',
			'type' => 'raw',
			'value' => '\'$\'.$data->CostHour',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
