		<section class="body container television_extras">
			<h2>Television and it's extras</h2>
			<h3>2 Televisions with different prices</h3>
			<h3>The TV 1 has 2 remote controllers and the TV 2 has 1 remote controller</h3>
			<div class="extras_details">
				<div class="row general_item_description_price">
					<div class="col-xs-12 col-sm-6">Price of TV1: </div> 
					<div class="col-xs-12 col-sm-6"><strong><?php echo (!empty($tv1_price)?$tv1_price:0); ?></strong></div>
				</div>
				<div class="row general_item_description_price">
					<div class="col-xs-12 col-sm-12">Extras of TV1's: <em>'2 remote controllers'</em></div> 
				</div>
				<div class="row general_item_description_price">
					<div class="col-xs-12 col-sm-6">Price of 2 remote controllers: </div> 
					<div class="col-xs-12 col-sm-6"><strong><?php echo (!empty($remoteControlPriceForTv1)?$remoteControlPriceForTv1:0); ?></strong></div>
				</div>
				<div class="row general_item_description_price">
					<div class="col-xs-12 col-sm-6">Price of TV2:: </div> 
					<div class="col-xs-12 col-sm-6"><strong><?php echo (!empty($tv2_price)?$tv2_price:0); ?></strong></div>
				</div>
				<div class="row general_item_description_price">
					<div class="col-xs-12 col-sm-12">Extras of TV2's: <em>'1 remote controller.'</em></div> 
				</div>
				<div class="row general_item_description_price">
					<div class="col-xs-12 col-sm-6">Price of 1 remote controller: </div> 
					<div class="col-xs-12 col-sm-6"><strong><?php echo (!empty($remoteControlPriceForTv2)?$remoteControlPriceForTv2:0); ?></strong></div>
				</div>
				<div class="row general_item_description_price">
					<div class="col-xs-12 col-sm-6">Total of Television and its extras controllers: </div> 
					<div class="col-xs-12 col-sm-6"><strong><?php echo (!empty($totalTelevision)?$totalTelevision:0); ?></strong></div>
				</div>
				
			</div>
			
		</section>