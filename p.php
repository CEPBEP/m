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
