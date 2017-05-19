#!/bin/sh

php darksky.php


curTime=$(jq '.currently.time' dkSky.json)
curTemp=$(jq '.currently.temperature' dkSky.json)

# get today's high from the "daily" object
tempMax=$(jq '.daily.data[0].temperatureMax' dkSky.json)

#tempMin=$(jq '.currently.temperatureMin' dkSky.json)
#sunDown=$(jq '.currently.sunsetTime' dkSky.json)
#sunUp=$(jq '.currently.sunriseTime' dkSky.json)

date "+%Y-%m-%d %H:%M:%S" --date=@$curTime
date "+%A " --date=@$curTime
jq '.currently.summary' dkSky.json

printf 'Current temp: %.0f\n' $curTemp 
printf 'High today: %.0f\n' $tempMax





