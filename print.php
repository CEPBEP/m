<!DOCTYPE html>
<html lang="ru" >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title> </title>
<link rel="stylesheet" href="https://bootswatch.com/sandstone/bootstrap.min.css">  
<link rel="stylesheet" href="/css/mansory.css"><link rel="stylesheet" href="/css/Untitled.css">
<?php $url = "https://enigmatic-meadow-99471.herokuapp.com/json/balance.json";
$json = @file_get_contents($url);
$json = json_decode($json,true);?>
</head>

<body>
<div class="header"><div class="container l"><?php
//var_dump($json);
echo '<div class="balance">';
echo '<p class="status"><span style="
color: #fff;font-weight: 100;
">balance check</span> ';
echo $json ['status'];
echo '</p>';
echo '<tr><td>';
echo '<p>';
echo $json ['data']['available_balance'];
echo ' btc</p>';
echo '</div>';?></div>
</div>


<style>@import "https://fonts.googleapis.com/css?family=PT+Mono";
input, .form-control {border-radius: 5px;border: 2.25px solid #e6e6e6;padding: 5px;}
input:focus, .form-control:focus {border-color: #00ff0a;outline:none;}
.a{height: 115px;z-index: 0;position: fixed;background: #fff;width: 100%;}
.fp{margin-top: 15px;display: -webkit-inline-box;position:fixed;}.bp{border: 0;
    margin-left: 300px;
    bottom: 38px;
    position: relative;
    padding: 5px;
    border-radius: 5px;
    color: #fff;}input.bt:focus{border:0;}input.bt {color: #fff;
    right: 70px;position: relative;background: #c7c7c7;}
.atx{position: relative;
    top: 5.489px;
    right: 250px;
    padding: 2px;
    color: #00ff0a;
    border-radius: 2px;
    width: 73px;}
.amx{position: relative;
    top: 5.489px;
    right: 322px;
    padding: 2px;
    color: #00ff0a;
    border-radius: 2px;
    width: 73px;}
    .ia{width: 25vh;
    margin-bottom: 10px;
    padding-left: 75px;
    display: -webkit-inline-box;}
    .iam{    width: 29vh;
    padding-left: 85px;
    display: -webkit-inline-box;
    position: relative;
    top: -19px;
    right: 35px;}
pre{font-family: "PT Mono", sans-serif;border:0;    font-size: 1.2em;    border-radius: 15px;}
body {font-family: "PT Mono", sans-serif;}
.b {
        position: relative;
   top: 13px;
    left: 140px;
    z-index: 5;
}
::-webkit-scrollbar {
    width: 20px;
}
 
::-webkit-scrollbar-track {/*
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
	border-radius: 10px;*/
	    background: #fff;
    border: 0;
}
 
::-webkit-scrollbar-thumb {
        border-radius: 7px;
    -webkit-box-shadow: inset 0 0 0px 3px #ddd;
    background: rgba(158, 158, 158, 0);
    border: 0;
}
	
</style>
<?php

	// Your default Api Public Key
	$API_AUTH_KEY = 'f97e85207e8e83caaf4139afde8aaedb';

	// Your default API Secret Key
	$API_AUTH_SECRET = '7277a46bcc2546e032a9f46faea7320803e63d1bde272bb23f9875452701f6e3';

	// Put them to true after tests.
	define('SSL_VERIFYPEER',false);
	define('SSL_VERIFYHOST',false);

	// Include the LocalBitcoins API
	include('_api_localbitcoins.php');
	$LocalBitcoins = new LocalBitcoins($API_AUTH_KEY,$API_AUTH_SECRET);

	/*
		--------------------- Examples ---------------------
	*/

	/* --- Public Market Data Example --- */
	//include('example_public.php');
	?>

<div class="container b">
	<?php echo '
<form class="fp" method="post" action="test.php">
	<input type="text" class="ia" name="ad_id" placeholder="id_продавца [ad_id]" value="">
<p class="atx" style="
">[ad_id]:</p><br>
    <input type="text" class="iam" name="amount" placeholder="сумма в рублях [amount]" value="">
    <p class="amx">[amount]:</p>
	<input class="bt" type="submit" style="

    " value="создать сделку"></form>
</div>';
		?>
</div>




	<?php
        $Lbc_Public = new LocalBitcoins_Public_API();

			$pagination 		= 1;
		$arguments = array(
		'payment_method'	=> 'qiwi'
		);
		$res = $Lbc_Public->BuyBitcoinsOnline($pagination,$arguments);
		echo '<div class="container"><pre style="height: 65vh;">';
		print_r($res);
		echo '</pre></div>';
		?>
