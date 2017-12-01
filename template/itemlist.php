		<section class="body container">
			<h3> List of Electronic Items and it's price (HardCoded from MyConstant.php file)</h3>
			<div class="row itemtitle">
				<div class="col-xs-12 col-sm-4 ">Type</div>
				<div class="col-xs-12 col-sm-4 ">Item Name</div>
				<div class="col-xs-12 col-sm-4">Item Price</div>
			</div>
			
			<?php 
			if(!empty($elexItemListPrice) && is_array($elexItemListPrice)) {
					foreach($elexItemListPrice as $valueElexPrice) {
			?>	
					<div class="row itemdescription">
						<div class="col-xs-12 col-sm-4 "><?php echo ucfirst($valueElexPrice['Type']);?></div>
						<div class="col-xs-12 col-sm-4 "><?php echo ucfirst($valueElexPrice['Item Name']);?></div>
						<div class="col-xs-12 col-sm-4"><?php echo $valueElexPrice['price'];?></div>
					</div>
			<?php 
				} 
			}	
			?>
			<div class="row total_of_items">
				<div class="col-xs-12 col-sm-4 ">Total</div>
				<div class="col-xs-12 col-sm-4 "></div>
				<div class="col-xs-12 col-sm-4"><?php echo $totalOfElexItemPrice; ?></div>
			</div>
			
		</section>