#!/bin/zsh

#emulate sh
php darksky.php
#jq '.currently.time' < dksky.json

curTime=$(jq '.currently.time' < dksky.json)
date "+%Y-%m-%d %H:%M:%S" --date=@$curTime

jq '.currently.summary' < dksky.json

curTemp=$(jq '.currently.temperature' <dksky.json)
print $curTemp degrees C

jq '.daily .data[1] .time' < dksky.json




