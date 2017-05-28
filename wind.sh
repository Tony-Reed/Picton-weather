#!/bin/bash

windFrom=$(jq '.currently.windBearing' dkSky.json)
#echo $windFrom

if [  $windFrom  -le 23 ];
then echo "N";
elif [ $windFrom -le 45 ];
then echo "NNE";
elif [ $windFrom -le 68 ];
then echo "NE"
elif [ $windFrom -le 90 ];
then echo "E"
elif [ $windFrom -le 113 ];
then echo "ESE"
elif [ $windFrom -le 135 ];
then echo "SE"
elif [ $windFrom -le 158 ];
then echo "SSE"
elif [ $windFrom -le 180 ];
then echo "S"
elif [ $windFrom -le 203 ];
then echo "SSW"
elif [ $windFrom -le 225 ];
then echo "SW"
elif [ $windFrom -le 248 ];
then echo "WSW"
elif [ $windFrom -le 270 ];
then echo "W"
elif [ $windFrom -le 293 ];
then echo "WNW"
elif [ $windFrom -le 315 ];
then echo "NW"
elif [ $windFrom -le 338 ];
then echo "N"
    
fi

   
   
