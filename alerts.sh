#!/bin/bash
# just for testing
    [  $(jq -r '.alerts' dkSky.json) == null  ] &&  (echo "no alerts"; exit 1)
