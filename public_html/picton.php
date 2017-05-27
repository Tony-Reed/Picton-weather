<?php
header("Content-type: text/html; charset=utf-8");
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Expires: Fri, 22 Nov 1963 18:30:00 GMT\n"); // Date in the past
header("Content-Transfer-Encoding: binary");
header("Creation-Date: Mon, 12 June 2002 12:00:00 GMT/n");
?>
<!DOCTYPE html>

<html lang="en">

<head> 

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Picton My Picton</title>
<link href="beebee/bb_style.css" rel="stylesheet" />
<link rel="shortcut icon" href="http://www.trljc.com/favicon.ico" type="image/x-icon" /> 
<!--[if lt IE 9]>
 <script src="beebee/modernizr-2.5.3.js">
 </script>
<![endif]--> 
</head>
<script
src='http://openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'>
</script>

<div id='openweathermap-widget'></div>
<script type='text/javascript'>
         window.myWidgetParam = {
         id: 21,
         cityid: 6113355,
         appid: 'e209baee3853cdc73a162fe2c03b2065',
         units: 'metric',
         containerid: 'openweathermap-widget',                        
         	           };
         (function()
	 {
	 var script   =	 document.createElement('script');
         script.type  =  'text/javascript';
         script.async =  true;
         script.src   =  'http://openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js';
         var s 	      =  document.getElementsByTagName('script')[0];
         s.parentNode.insertBefore(script, s);
         })();
         </script>
