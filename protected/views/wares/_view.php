<?php
/* @var $this WaresController */
/* @var $data Wares */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDWare')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDWare), array('view', 'id'=>$data->IDWare)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />


</div>