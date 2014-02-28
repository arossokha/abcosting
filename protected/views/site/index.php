<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<div class="calc">
	Choose product <select>
		<option disabled selected style='display:none;'>Select...</option>
		<option>test</option>
		<option>test2</option>
	</select>

	<div class="processor invisible">
		<p>Calculating...</p>
		<p>Materials		$<span id="materials-price"></span></p>
		<p>Equip		$<span id="equip-price"></span></p>
		<p>Work 		$<span id="work-price"></span></p>
		<p>Other		$<span id="other-price"></span></p>
		<hr>
		<p>Summary		$<span id="summary-price"></span></p>
	</div>	
</div>