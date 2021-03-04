<?php
class BinanceCaller 
{
	Public function assynCaller($url,$post)
	{
		file_get_contents($url);
		/*
		$ch = curl_init($url);
		$post = json_encode($post);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		// local execution
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$result = curl_exec($ch);
		$result = (json_decode($result));
		curl_close($ch);
		// return $result;
		*/
	}
}


/*
$BinanceCaller1 = new BinanceCaller;
$BinanceCaller1->assynCaller("http://localhost/lab/AssyncThreadTask.php?task=1","1");
*/

require '../vendor/autoload.php';
$loop = ReactEventLoopFactory::create();

// Criar um array
$array = array();

//Inicializando multiplas Thread
foreach ( range(1, 1000) as $i ) 
{
	$array[] = new BinanceCaller;
}

// iniciar a Threads
foreach ( $array as $c ) 
{
	$loop->addTimer(2, static function () {
		$i++;
	    $c->assynCaller("http://localhost/lab/AssyncThreadTask.php?task=".$i,$i);
	});
}


$loop->run();

?>