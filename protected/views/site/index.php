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
<div class="categories-area">
	<h1>Categories</h1>
	<div class="category-block" id="products">
		<a href="/index.php?r=wares">
			<img src="/img/product.png">
			Products
		</a>
	</div>

	<div class="category-block" id="materials">
		<a href="/index.php?r=materialshardwares">
			<img src="/img/materials.png">
			Materials
		</a>
	</div>

	<div class="category-block" id="equips">
		<a href="/index.php?r=equips">
			<img src="/img/equip.png">
			Equipment
		</a>
	</div>

	<div class="category-block" id="work">
		<a href="/index.php?r=work">
			<img src="/img/work.png">
			Work
		</a>
	</div>

	<div class="category-block" id="services">
		<a href="/index.php?r=services">
			<img src="/img/services.png">
			Services
		</a>
	</div>

	<div class="category-block" id="expences">
		<a href="/index.php?r=addexpences">
			<img src="/img/coins.png">
			Additional Expences
		</a>
	</div>

	<div class="category-block" id="process">
		<a href="/index.php?r=warematerials">
			<img src="/img/process.png">
			Production process
		</a>
	</div>

	<div class="category-block" id="product-content">
		<a href="/index.php?r=warecontent">
			<img src="/img/list.png">
			Product Content
		</a>
	</div>

	<div class="category-block" id="servicescost">
		<a href="/index.php?r=wareservices">
			<img src="/img/check.png">
			Services Cost
		</a>
	</div>
</div>