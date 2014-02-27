<?php
/* @var $this MaterialshardwaresController */
/* @var $data Materialshardwares */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDMH')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDMH), array('view', 'id'=>$data->IDMH)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDType')); ?>:</b>
	<?php echo CHtml::encode($data->IDType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UnitCost')); ?>:</b>
	<?php echo CHtml::encode($data->UnitCost); ?>
	<br />


</div>