<?php
header("Content-type: text/html; charset=utf-8");
header("Accept-Encoding: gzip");
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Expires: Fri, 22 Nov 1963 18:30:00 GMT\n"); // Date in the past
header("Content-Transfer-Encoding: binary");
header("Creation-Date: Wed, 24 May 2017 12:00:00 GMT/n");
?>

<!DOCTYPE html>

<!--   
     I hope you're having a nice day
     Website & code by Tony Reed
-->

<html lang="en">

<head> 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- The above 3 meta tags *must* come first in the head -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Weather Web Site</title>
<link href="main.css" rel="stylesheet" />
<link rel="shortcut icon" href="http://www.trljc.com/favicon.ico" type="image/x-icon" /> 
</head>

<body>
<header> 
<h1>The weather in Picton Ontario Canada, <br>powered by <a href="https://darksky.net/poweredby/"> DarkSky </a></h1>
</header>

<article>
<?php 

ob_start();

// get the DarkSky forecast
include 'darksky.php';

// print current conditions
$output = shell_exec('./weather_now');
printf($output);

// print seven-day forecast
$output1 = shell_exec('./seven_day_forecast');
printf($output1);

ob_end_flush();
?>

</article>

</body>
</html>

