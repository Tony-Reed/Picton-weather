<?php


$lat=44.004401;
$lon=-77.145244;
$key=getenv('DARK_SKY_KEY');
$opt="?units=si";
$url="https://api.darksky.net/forecast/";


// build our url
$sky=$url . $key . "/" . $lat . "," . $lon . $opt;  

//{{{ debugging
//  echo $sky;
//  return true;
//}}}

// tell it our output file name
$out="dksky.json";

// create a curl resource 
$ch=curl_init();

// set url 
curl_setopt($ch, CURLOPT_URL, $sky);
curl_setopt($ch, CURLOPT_HEADER, 0);

// open output file for writing & write data to it
$fp = fopen($out, "w");
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_exec($ch);

//$out=json_decode($out, true);

//clean up
fclose($fp);
curl_close($ch);      

?>

