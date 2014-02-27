<?php
/* @var $this WarecontentController */
/* @var $model Warecontent */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

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
		<?php echo $form->label($model,'CountHardware'); ?>
		<?php echo $form->textField($model,'CountHardware'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->