	<section class="body container">
		<h3> Sort the items by price and output the total pricing.</h3>
		
		<div class="row itemtitle">
			<div class="col-xs-12 col-sm-6 ">Item Name</div>
			<div class="col-xs-12 col-sm-6">Item Price</div>
		</div>
		<?php if(!empty($sortedItem) && is_array($sortedItem)) {
			foreach($sortedItem as $key => $value) { ?>
				<div class="row itemdescription">
					<div class="col-xs-12 col-sm-6"><?php echo $key; ?></div>
					<div class="col-xs-12 col-sm-6"><?php echo $value; ?></div>
				</div>		
		<?php	}
		} ?>
	</section>
	
	<br/>
	
	<section class="body container microwave_extras">
		<h2>Total pricing.</h2>
		<div class="extras_details">
			<div class="row general_item_description_price">
				<div class="col-xs-12 col-sm-6">The total price that a person spend while buying ElectronicItem: </div> 
				<div class="col-xs-12 col-sm-6"><strong><?php echo (!empty($grandTotalUserSpend)?$grandTotalUserSpend:0); ?></strong></div>
			</div>
		</div>
	</section>