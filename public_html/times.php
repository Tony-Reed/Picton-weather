<?php

mb_internal_encoding("UTF-8");


//echo date('l jS F Y H:i:s e', 1494116640);

@include "darksky.php";

$output = shell_exec('./weather_now');
printf($output);

$output1 = shell_exec('./seven_day_forecast');
printf($output1);

?>