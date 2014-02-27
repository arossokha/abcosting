<?php
/* @var $this WarecontentController */
/* @var $data Warecontent */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDWarecontent')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDWarecontent), array('view', 'id'=>$data->IDWarecontent)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDWare')); ?>:</b>
	<?php echo CHtml::encode($data->IDWare); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDMH')); ?>:</b>
	<?php echo CHtml::encode($data->IDMH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CountHardware')); ?>:</b>
	<?php echo CHtml::encode($data->CountHardware); ?>
	<br />


</div>