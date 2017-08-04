	<?php
        $Lbc_Public = new LocalBitcoins_Public_API();

			$pagination 		= 1;
		$arguments = array(
		'payment_method'	=> 'qiwi'
		);
		$res = $Lbc_Public->BuyBitcoinsOnline($pagination,$arguments);
        $res = json_decode($json,true);
        foreach($object->data->ad_list as $current)
        {
echo $res;
echo ($current->trade_type);
echo ('</br></br>');
}


		?>
