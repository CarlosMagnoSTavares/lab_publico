<?php

$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);
$logBinance1 ="";
$logBinance2 ="";

foreach ($array as $key => $value) 
{
	if (!is_array($key)&!is_array($value)) 
	{
		$logBinance2 .= "\n	".$key.": ".$value;

	}
}
echo "<pre> logBinance2";
echo $logBinance2;

echo "<br> logBinance1";
echo $logBinance1;


?>