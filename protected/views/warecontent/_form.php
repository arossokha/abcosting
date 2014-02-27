<?php
/* @var $this WarecontentController */
/* @var $model Warecontent */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'warecontent-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IDWare'); ?>
		<?php echo $form->dropDownList($model,'IDWare',
			CHtml::listData(Wares::model()->findAll(),'IDWare','Name'),
			array('empty' => 'Select...')
			); 
		?>
		<?php echo $form->error($model,'IDWare'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'IDMH'); ?>
		<?php echo $form->dropDownList($model,'IDMH',
			CHtml::listData(Materialshardwares::model()->findAll(),'IDMH','Name'),
			array('empty' => 'Select...')
			); 
		?>
		<?php echo $form->error($model,'IDMH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CountHardware'); ?>
		<?php echo $form->textField($model,'CountHardware'); ?>
		<?php echo $form->error($model,'CountHardware'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->