<?php
/* @var $this WarematerialsController */
/* @var $data Warematerials */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDWarematerials')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDWarematerials), array('view', 'id'=>$data->IDWarematerials)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDWork')); ?>:</b>
	<?php echo CHtml::encode($data->IDWork); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDWare')); ?>:</b>
	<?php echo CHtml::encode($data->IDWare); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDMH')); ?>:</b>
	<?php echo CHtml::encode($data->IDMH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDEquip')); ?>:</b>
	<?php echo CHtml::encode($data->IDEquip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CountMaterials')); ?>:</b>
	<?php echo CHtml::encode($data->CountMaterials); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoursWork')); ?>:</b>
	<?php echo CHtml::encode($data->HoursWork); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('HoursEquip')); ?>:</b>
	<?php echo CHtml::encode($data->HoursEquip); ?>
	<br />

	*/ ?>

</div>