#!/bin/sh

tempMax=$(jq '.daily.data[0]|.temperatureMax' dksky.json)
tempMin=$(jq ' .daily.data[0]|.temperatureMin' dksky.json)
sunDown=$(jq '.daily.data[0].sunsetTime' dksky.json)
sunUp=$(jq '.daily.data[0].sunriseTime' dksky.json)
curDay=$(jq '.daily.data[0].time' dksky.json)

date "+%A " --date=@$curDay
jq '.daily.data[0].summary' dksky.json

printf  "Today's high: %.0f\n" $tempMax
printf "Overnight: %.0f\n" $tempMin

printf "Sunrise: "
date "+ %H:%M:%S" --date=@$sunUp
printf "Sunset: "
date "+ %H:%M:%S" --date=@$sunDown

