<?php
/* @var $this AddexpencesController */
/* @var $data addexpences */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Name), array('view', 'id'=>$data->IDExpence)); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('CostHour')); ?>:</b>
	<?php echo CHtml::encode($data->CostHour); ?>
	<br />


</div>