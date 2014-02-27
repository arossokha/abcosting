<?php
/* @var $this MaterialshardwaresController */
/* @var $model Materialshardwares */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<label for="sd">Hardware Type</label>
		<?php echo $form->dropDownList($model,'IDType',
			CHtml::listData(Hardwaretypes::model()->findAll(),'IDType','Name'),
			array('empty' => 'Select...')
			); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UnitCost'); ?>
		<?php echo $form->textField($model,'UnitCost'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->