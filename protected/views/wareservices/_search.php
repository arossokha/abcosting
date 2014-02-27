<?php
/* @var $this WareservicesController */
/* @var $model Wareservices */
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
		<label for="sd">Service</label>
		<?php echo $form->dropDownList($model,'IDService',
			CHtml::listData(Services::model()->findAll(),'IDService','Name'),
			array('empty' => 'Select...')
			); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CountHours'); ?>
		<?php echo $form->textField($model,'CountHours'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->