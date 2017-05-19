<?php

mb_internal_encoding("UTF-8");

// lat & long lead to 23 Ferguson St., Picton, Ontario, Canada
$lat=44.0044;
$lon=-77.1453;

// Dark Sky API key somewhere safe
$key=getenv('DARK_SKY_KEY');

$url="https://api.darksky.net/forecast/";

// we're not working with the minute-by-minute forecast
// we don't need the weatherstation flags
$exc="?exclude=minutely,flags";

$opt="&units=uk2";

// build a custom url
$dkSky=$url . $key . "/" . $lat . "," . $lon . $exc .  $opt;  
//echo  $dkSky;
//return true;


// download the forecast
$dkSky=file_get_contents($dkSky);

// write it locally
$fp=fopen("dkSky.json", "w");
fwrite($fp, $dkSky);
// tidy up
fclose($fp);




