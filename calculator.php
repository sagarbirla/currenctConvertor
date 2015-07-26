<!DOCTYPE html>
<html>
<body>

	
	<?php

	
	$open = fopen("http://quote.yahoo.com/d/quotes.csv?s=USDINR=X&f=sl1d1t1c1ohgv&e=.csv", "r");
	$exchangeRate = fread($open, 2000);
	$exchangeRate = str_replace("\"", "", $exchangeRate);
	$exchangeRate = explode(",", $exchangeRate);
	echo "$exchangeRate";
	fclose($open);
		
	
	
	$usd = array('USD','US Dollars');
	$inr = array('INR','Indian Rupees');
	
	

	
	//currencyExchange("120",$usd,$inr);
	 
	?>

</body>
</html>