#!/bin/sh


#php darksky.php
#jq '.currently.time' < dksky.json

curTime=$(jq '.currently.time' dksky.json)
curTemp=$(jq tonum '.currently.temperature' dksky.json)
date "+%Y-%m-%d %H:%M:%S" --date=@$curTime

jq '.currently.summary' dksky.json


printf  'Current temp: %.0f\n' $curTemp 






