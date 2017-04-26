#! /usr/bin/env php

// <?php
//  DarkSky API
//  position at 23 Ferguson Street, Picton, ON CA.

$lat=44.004401;
$lon=-77.145244;
$key=getenv('DARK_SKY_KEY');
$opt="?units=si";
$url="https://api.darksky.net/forecast/";

$sky=$url . $key . "/" . $lat . "," . $lon . $opt;  

//echo $sky;
//return true;

// create a curl resource 
$ch=curl_init();

// set url 
curl_setopt($ch, CURLOPT_URL, $sky);
curl_setopt($ch, CURLOPT_HEADER, 0);

$fp = fopen("dsky.json", "w");
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_exec($ch);

// return the transfer as a string 
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0); 

//$output = curl_exec($ch); 

// $output contains the output string 
//var_dump($output);

//var_dump(json_decode($output, true));

fclose($fp);
curl_close($ch);      
?>


