<?php
/* @var $this ServicesController */
/* @var $data Services */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDService')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDService), array('view', 'id'=>$data->IDService)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CostHour')); ?>:</b>
	<?php echo CHtml::encode($data->CostHour); ?>
	<br />


</div>