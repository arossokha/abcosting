<?php
/* @var $this WarematerialsController */
/* @var $model Warematerials */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<label for="sd">Work</label>
		<?php echo $form->dropDownList($model,'IDWork',
			CHtml::listData(Work::model()->findAll(),'IDWork','Name'),
			array('empty' => 'Select...')
			); ?>
	</div>

	<div class="row">
		<label for="sd">Ware</label>
		<?php echo $form->dropDownList($model,'IDWare',
			CHtml::listData(Wares::model()->findAll(),'IDWare','Name'),
			array('empty' => 'Select...')
			); ?>
	</div>

	<div class="row">
		<label for="sd">Ware</label>
		<?php echo $form->dropDownList($model,'IDMH',
			CHtml::listData(Materialshardwares::model()->findAll(),'IDMH','Name'),
			array('empty' => 'Select...')
			); ?>
	</div>

	<div class="row">
		<label for="sd">Eqipment</label>
		<?php echo $form->dropDownList($model,'IDEquip',
			CHtml::listData(Equips::model()->findAll(),'IDEquip','Name'),
			array('empty' => 'Select...')
			); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CountMaterials'); ?>
		<?php echo $form->textField($model,'CountMaterials'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HoursWork'); ?>
		<?php echo $form->textField($model,'HoursWork'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HoursEquip'); ?>
		<?php echo $form->textField($model,'HoursEquip'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->