#!/bin/sh

sunDown=$(jq '.daily.data[0].sunsetTime' < dksky.json)
sunUp=$(jq '.daily.data[0].sunriseTime' < dksky.json)
curDay=$(jq '.daily.data[0].time' < dksky.json)
date "+%A " --date=@$curDay
jq '.daily.data[0].summary' < dksky.json
printf "Today's high: "
jq '.daily.data[0].temperatureMax' <dksky.json
printf "Overnight: "
jq '.daily.data[0].temperatureMin' <dksky.json
printf  "Sunrise:  "
date "+ %H:%M:%S" --date=@$sunUp
printf "Sunset:   "
date "+ %H:%M:%S" --date=@$sunDown
