<?php

  mb_internal_encoding("UTF-8");

// lat & long point to 23 Ferguson St., Picton, Ontario, Canada
$lat=44.0044;
$lon=-77.1453;
// Dark Sky API key somewhere safe
$key=getenv('DARK_SKY_KEY');
//$opt="?units=ca";
$opt="?units=uk2";
$url="https://api.darksky.net/forecast/";

// build a customised url
$sky=$url . $key . "/" . $lat . "," . $lon . $opt;  

// download the forecast
$sky=file_get_contents($sky);
//$sky=utf8_encode($sky);

// write it locally
$fp=fopen("dksky.json", "w");
fwrite($fp, $sky);
// tidy up
fclose($fp);






/* 
Another approach

create a curl resource 
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
*/


