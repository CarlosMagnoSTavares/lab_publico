<?php
echo "<pre>";
$data = "Açaí com paçoca";
foreach (range(0, 7) as $key => $value) 
{
	$data = base64_encode($data);
	echo "Nivel De <b>Criptografia= </b>".$value.": ".$data."\n";
}

echo "<br>";
echo "Resultado final <b>Criptografado= </b>".$data."\n";
echo "<br>";

foreach (range(0, 7) as $key => $value) 
{
	$data = base64_decode($data);
	echo "Nivel De <b>Descriptografia= </b>".$value.": ".$data."\n";
}
echo "<br>";
echo "Resultado final Descriptografado= ".$data."\n";