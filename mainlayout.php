<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <title>TRACKTIK - PHP test</title>

            <!-- Bootstrap -->
            <link rel="stylesheet" href="css/style.css">

			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
			
			<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			
			<script src="js/bootstrap.min.js"></script>
			
			</head>
                  <body class="inner">                    
					<div id="global-wrapper">
                        
					<?php include('template/header.php'); ?>

					<?php include('template/itemlist.php'); ?>
						<br/>
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<h1>Solution of Test</h1>
								</div>
							</div>
						</div>
						
						<br/>
					<?php include('template/console_extra.php'); ?>
					<br/>
					<?php include('template/television_extras.php'); ?>
						<br/>
						<section class="body container microwave_extras">
							<h2>MicroWave</h2>
							<div class="extras_details">
								<div class="row general_item_description_price">
									<div class="col-xs-12 col-sm-6">Price of MicroWave: </div> 
									<div class="col-xs-12 col-sm-6"><strong><?php echo (!empty($microwavePrice)?$microwavePrice:0); ?></strong></div>
								</div>
							</div>
						</section>
						<br/>
						
						<section class="body container microwave_extras">
							<h2>Grand Total</h2>
							<div class="extras_details">
								<div class="row general_item_description_price">
									<div class="col-xs-12 col-sm-6">The total price that a person spend while buying ElectronicItem: </div> 
									<div class="col-xs-12 col-sm-6"><strong><?php echo (!empty($grandTotal)?$grandTotal:0); ?></strong></div>
								</div>
							</div>
						</section>
						
						<br/>
						<section class="body container microwave_extras">
							<h2>Person's Friend question.</h2>
							<div class="extras_details">
								<div class="row general_item_description_price">
									<div class="col-xs-12 col-sm-6">That person's friend saw him with his new purchase and asked him how much the console and its controllers had cost him? </div> 
									<div class="col-xs-12 col-sm-6">Ans: The total cost of Console and it's controller is: <strong><?php echo (!empty($totalConsole)?$totalConsole:0); ?></strong></div>
								</div>
							</div>
						</section>
						
						<br/>
						
						<?php include('template/sort.php'); ?>
						                   
			</div>
		</body>

    </html>
