<?php




foreach ($_REQUEST as $key => $value) 
{
	$msg = $key.": ".$value;
	date_default_timezone_set('America/Sao_Paulo');
	$dataLocal = date('d/m/Y H:i:s', time());
	$dataLocal .= ":".(int) substr(strpbrk(microtime(true), '.,'), 1);
	$msg = isset($msg) && !empty($msg)? "[".$dataLocal."] ".$msg."\n" : "";
	if (!empty($msg))
	{
		$fp = fopen("api-get-result.txt", "a");
		$escreve = fwrite($fp, $msg);
		fclose($fp);
	}
}


// echo json_encode($_REQUEST);

?>

