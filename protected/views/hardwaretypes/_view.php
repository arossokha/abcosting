<?php
/* @var $this HardwaretypesController */
/* @var $data Hardwaretypes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDType')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDType), array('view', 'id'=>$data->IDType)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />


</div>