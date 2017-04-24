<?php

## position at 23 Ferguson Street, Picton, ON CA.

$lat=44.00434;
$lon=-77.14530;
$key="$DARK_SKY_KEY"
$url="https://api.darksky.net/forecast";
$sky=$url . $key . "/" . $lat . "," . $lon . "?units=si";  

//echo $sky;
//return true;


// create a curl resource 
$ch=curl_init();

// set url 
curl_setopt($ch, CURLOPT_URL, $sky);
curl_setopt($ch, CURLOPT_HEADER, false);


// return the transfer as a string 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$output = curl_exec($ch); 
// $output contains the output string 
var_dump($output);

//var_dump(json_decode($output, true));

curl_close($ch);      

//$fp = fopen("sky.txt", "w");

//curl_setopt($ch, CURLOPT_FILE, $fp);
//curl_setopt($ch, CURLOPT_HEADER, 0);
//fclose($fp);

?>


