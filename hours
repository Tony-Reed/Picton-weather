#!/bin/bash

printf "<div class='hours'>"
i=1
while [ $i -lt 6 ]
do
    
hrsTime=$(jq -r --arg i "$i" '.hourly.data[$i|tonumber].time' dkSky.json)
hrsSum=$(jq --arg i "$i" '.hourly.data[$i|tonumber]|.summary' dkSky.json)
hrsClock=$(date "+%I %p" --date=@$hrsTime)
hrsTemp=$(jq --arg i "$i" '.hourly.data[$i|tonumber].temperature' dkSky.json)

printf "$hrsClock\t"

printf "$hrsSum\t"

printf '%.0f\t' $hrsTemp
printf "<br>"

i=$[$i+1]
printf "\n"
done
printf "</div>"
