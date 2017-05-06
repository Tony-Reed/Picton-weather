#!/bin/sh

php test_darksky.php

jq '.currently' < dksky.json
jq '.daily .data[0] .time' < dksky.json
jq '.alerts[] .title' <dksky.json
jq '.alerts[] .regions[2]' <dksky.json
jq '.alerts[] .description' <dksky.json

