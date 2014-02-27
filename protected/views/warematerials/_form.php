<?php
/* @var $this WarematerialsController */
/* @var $model Warematerials */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'warematerials-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IDWork'); ?>
		<?php echo $form->dropDownList($model,'IDWork',
			CHtml::listData(Work::model()->findAll(),'IDWork','Name'),
			array('empty' => 'Select...')
			); 
		?>
		<?php echo $form->error($model,'IDWork'); ?>
	</div>

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
		<?php echo $form->labelEx($model,'IDEquip'); ?>
		<?php echo $form->dropDownList($model,'IDEquip',
			CHtml::listData(Equips::model()->findAll(),'IDEquip','Name'),
			array('empty' => 'Select...')
			); 
		?>
		<?php echo $form->error($model,'IDEquip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CountMaterials'); ?>
		<?php echo $form->textField($model,'CountMaterials'); ?>
		<?php echo $form->error($model,'CountMaterials'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HoursWork'); ?>
		<?php echo $form->textField($model,'HoursWork'); ?>
		<?php echo $form->error($model,'HoursWork'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HoursEquip'); ?>
		<?php echo $form->textField($model,'HoursEquip'); ?>
		<?php echo $form->error($model,'HoursEquip'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->