#! /usr/bin/env php

//  DarkSky API
//  GPS position at 23 Ferguson Street, Picton, ON CA
//  (my desk)

$lat=44.004401;
$lon=-77.145244;
$key=getenv('DARK_SKY_KEY');
$opt="?units=si";
$url="https://api.darksky.net/forecast/";

// build a URL 
$sky=$url . $key . "/" . $lat . "," . $lon . $opt;  

// debugging
//echo $sky;
//return true;

// create a curl resource 
$ch=curl_init();

// set url 
curl_setopt($ch, CURLOPT_URL, $sky);
curl_setopt($ch, CURLOPT_HEADER, 0);

// open  a file
$fp = fopen("dsky.json", "w");
curl_setopt($ch, CURLOPT_FILE, $fp);

// grab the output
curl_exec($ch);

// return the transfer as a string 
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0); 

//$output = curl_exec($ch); 

// $output contains the output string 
//var_dump($output);

//var_dump(json_decode($output, true));

fclose($fp);
curl_close($ch);      



