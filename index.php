<?php 
	
	$sid = 'ACad51599515c5bf6e068467f533c745d9';
	$token = '337028e142cf0afe8b393cbbe60acc49';
	$url = 'https://api.twilio.com/2010-04-01/Accounts/ACad51599515c5bf6e068467f533c745d9/Calls.json';

	hit_curl($url);



	function hit_curl($url){
		$curl = curl_init();
    	curl_setopt($curl, CURLOPT_URL,$url);
    	curl_setopt($curl, CURLOPT_POST, 1);
    	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
    	curl_setopt($curl, CURLOPT_POSTFIELDS, "Url=http://localhost/twilio/voice.xml&To=%2B918013778491&From=%2B13342698968");
    	curl_setopt($curl, CURLOPT_USERPWD, "ACad51599515c5bf6e068467f533c745d9:337028e142cf0afe8b393cbbe60acc49");
    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    	$result = curl_exec ($curl);
    	echo curl_error($curl);
    	curl_close ($curl);
    	print $result;
	}
?>