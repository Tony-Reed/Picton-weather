#!/bin/sh

curDay=$(jq '.daily.data[0].time' < dksky.json)
date "+%A %H:%M:%S" --date=@$curDay
jq '.daily.data[0].summary' < dksky.json
echo "Today's high:"
jq '.daily.data[0].temperatureMax' <dksky.json
echo "Overnight:"
jq '.daily.data[0].temperatureMin' <dksky.json

