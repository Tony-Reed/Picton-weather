#!/bin/bash

    [  $(jq -r '.alerts' dkSky.json) == null  ] &&  (echo "no alerts"; exit 1)
