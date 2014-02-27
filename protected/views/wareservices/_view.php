<?php
/* @var $this WareservicesController */
/* @var $data Wareservices */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDWareservices')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDWareservices), array('view', 'id'=>$data->IDWareservices)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDWare')); ?>:</b>
	<?php echo CHtml::encode($data->IDWare); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDService')); ?>:</b>
	<?php echo CHtml::encode($data->IDService); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CountHours')); ?>:</b>
	<?php echo CHtml::encode($data->CountHours); ?>
	<br />


</div>