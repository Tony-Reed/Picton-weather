<?php

mb_http_output('UTF-8'); 
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_language('uni');
mb_regex_encoding('UTF-8');

// get the DarkSky forecast
include 'darksky.php';

// print current conditions
$output = shell_exec('./weather_now');
printf($output);

// print seven-day forecast
$output1 = shell_exec('./seven_day_forecast');
printf($output1);

?>
