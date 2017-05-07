#!/bin/sh

#php test_darksky.php
#jq '.currently.time' < dksky.json

cur=$(jq '.currently.time' < dksky.json)
date --date=@$cur
jq '.currently.summary' < dksky.json



#jq '.daily .data[0] .time' < dksky.json




