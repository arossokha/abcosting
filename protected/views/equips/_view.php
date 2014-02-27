<?php
/* @var $this EquipsController */
/* @var $data Equips */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Name), array('view', 'id'=>$data->IDEquip)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CostHour')); ?>:</b>
	<?php echo CHtml::encode($data->CostHour); ?>
	<br />


</div>