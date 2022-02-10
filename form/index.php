<head>
<title>Валидация</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,100;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
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
	<div class="form_title">
		<h1>Customer information</h1>
	</div>
<form id="form" action="index.php" method="post">
	 <div class="form_conteiner">
	 	<div class="form_conteiner_name">
			<div class="first_name">
					<span id="form_text">First name</span>
						<div class="first_name_input">
							<p ><input type="text" name="first_name" pattern="[A-Za-zА-Яа-яЁё]" id="first_name" /> <span id="valid"></span></p>
								</div>
							</div>
			<div class="last_name">
				<span id="last_text">Last name</span>
					<div class="first_name_input">
							<p ><input type="text" name="last_name" pattern="[A-Za-zА-Яа-яЁё]" id="last_name" /> <span id="valid_last"></span></p>
						</div>
					</div> 
				</div>

				<div class="conteiner_address">
					<div class="address">
				<span id="form_text">Address</span>
							<p><input type="text" name="address" pattern="[A-Za-zА-Яа-яЁё]" id="Address" /> <span id="valid"></span></p>
					</div> 
				</div>


					<div class="country_list">
						<div class="country">	
						<span id="form_text">Contry</span>
						<input type="text" name="country" />
						</div>

						<div class="city">
						<span id="form_text">City</span>
						<input type="text" name="city" />
						</div>
					</div>


				<div class="postal_list">

						<div class="postal_code">	
						<div class="postal_title"><span id="form_text">Postal code</span></div>
						<div class="postal_input">
						<input type="text" name="postal_code" />
						<div class="find">
						<button type="submit">Find</button>
						</div>
						</div>
						</div>

						<div class="phone">
						<span id="form_text_phone">Phone</span><span id="valid_phone"></span>
						<p>

						<input value="" id="tel_input" class="tel">
						</p>
						</div>
					</div>


			 <div class="button_form">
			  <form id="form" action="form.php" method="post">
			  	<span class="reset"><button type="submit">Return to shop</button></span>
			  	<p><button type='text' name="continue_to_shipping" id="continue_to_shipping" value=""  onclick="window.location.href='http://form/shipping.php';">continue to shipping</button></p>
			 </form>
			</div>




	</div><!-- ///form_conteiner -->
</form><!-- ///form -->



</div><!-- ///conteiner -->
</div><!-- ///page_block -->
</div> <!-- ///page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
<script src="validinput.js" type="text/javascript"></script>
<script src="mask.js" type="text/javascript"></script>
<script src="form.js" type="text/javascript"></script>
</body>
</html>
