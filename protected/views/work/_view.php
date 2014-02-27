<?php
/* @var $this WorkController */
/* @var $data Work */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDWork')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDWork), array('view', 'id'=>$data->IDWork)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CostHour')); ?>:</b>
	<?php echo CHtml::encode($data->CostHour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Employee')); ?>:</b>
	<?php echo CHtml::encode($data->Employee); ?>
	<br />


</div>