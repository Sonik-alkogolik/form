<head>
<title>Shipping</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,100;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="shipping.css">
</head>
<body>
	<div class="page">
	<div class="page_block">


<div class="conteiner">
  <div class="info_block">
		<div class="customer_info">
				<span class="customer_info_text">01 Customer info</span>
		</div>
		<div class="customer_info_ship">
				<span class="customer_info_text">02 Shipping info</span>
		</div>
		<div class="customer_info_payment">
				<span class="customer_info_text">03 Payment selection</span>
		</div>
 				</div><!-- ///info_block -->
			</div><!-- ///conteiner -->



<div class="conteiner">	
	<div class="maps_title">
							<h1>Shipping information</h1>
				</div>
		<div class="conteiner_maps">
				<div class="google_maps">
					<div class="maps_desk">
									<div class="desk_inner">
										<div class="desk_inner_text">
											<p><span>Taras Shevchenko</span></p>
											<p><span>Unit 2 Green Mount Park</span></p>
											<p><span>Halifax</span></p>
											<p><span>HX1 5QN</span></p>
											<p><span>Phone: +3 8097 132-45-67</span></p>
										</div>
										<div class="desk_inner_button">
											<button type="submit" name="edit_adress">Edit Address</button>
											<button type="submit" name="add_new">Add New</button>
										</div>
									</div>
					</div>  

					<div class="maps_inner">
						<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1306479.6537966044!2d30.93793337497786!3d50.24117261150498!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1643019142184!5m2!1sru!2sua" width="368" height="228" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>

		   </div><!-- ///google_maps -->
		</div><!-- ///conteiner_maps -->
</div><!-- ///conteiner -->

<div class="conteiner">
				<div class="shipping_metod">
							<div class="shipping_metod_title">Shipping Method</div>
					<div class="shipping_metod_cart">
						<div class="standart">
						<label class="input_radio_standart"><span class="metod_standart_text"><input type="radio" name="field1" value="1"> Standart Delivery</span><span class="metod_standart_free">FREE</span></label>
					<div class="standart_block_text">
						<p>Freebie checkout form of the third step in sketchapp. Feel free to download and use it for your project. </p>
					</div>
				</div>
					<div class="fast">
						<label class="input_radio_fast"><span class="metod_standart_text"><input type="radio" name="field2"  value="2"> Fast Delivery</span><span class="metod_10doll">$10</span></label>
					<div class="fast_block_text">
						<p>Freebie checkout form of the third step in sketchapp. Feel free to download and use it for your project. </p>
					</div></div>
					</div>
					 
					<div class="button_shipping">
					 			<button id="back_to_sutomer" type="submit" name="back_to_sutomer"  onclick="window.location.href='http://form/index.php';">Back to Customer Info</button>
					 			<button id="continue_to_payment" type="submit" name="continue to payment">Continue to Payment</button>  
					</div>

				</div><!-- ///shipping_metod -->
</div><!-- ///conteiner -->

		</div><!-- ///page_block -->
	</div><!-- ///page -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="shipping.js" type="text/javascript"></script>
</body>