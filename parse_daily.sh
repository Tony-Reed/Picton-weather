#!/bin/sh

php darksky.php

#jq --arg i  $i '.daily.data[$i|tonumber]' <dkSky.json

tempMax=$(jq '.daily.data[0]|.temperatureMax' dkSky.json)
tempMin=$(jq '.daily.data[0]|.temperatureMin' dkSky.json)
sunDown=$(jq '.daily.data[0].sunsetTime' dkSky.json)
sunUp=$(jq '.daily.data[0].sunriseTime' dkSky.json)

curDay=$(jq '.daily.data[0].time' dkSky.json)

#jq  '.daily.summary' dkSky.json

date "+%A " --date=@$curDay
jq  '.daily.data[0].summary' dkSky.json

printf  "Today's high: %.0f\n" $tempMax
printf "Overnight: %.0f\n" $tempMin

printf "Sunrise: "
date "+ %H:%M:%S" --date=@$sunUp
printf "Sunset: "
date "+ %H:%M:%S" --date=@$sunDown

