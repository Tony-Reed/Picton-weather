<!DOCTYPE html>
<html>
<body>

<?php
$weather=json_decode("dsky.json", true);
$output=var_dump($weather);
echo $output;
?>