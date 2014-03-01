<?php
/* @var $this WaresController */
/* @var $model Wares */

$this->breadcrumbs=array(
	'Wares'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Wares', 'url'=>array('index')),
	array('label'=>'Create Wares', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#wares-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Wares</h1>
<?php echo CHtml::link('Create',array($this->id.'/create')); ?>
<br />
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'wares-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'Name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
