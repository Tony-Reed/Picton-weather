
#tempMin=$(jq '.currently.temperatureMin' dkSky.json)
#sunDown=$(jq '.currently.sunsetTime' dkSky.json)
#sunUp=$(jq '.currently.sunriseTime' dkSky.json)



/* 
Another approach

create a curl resource 
$ch=curl_init();

// set url 
curl_setopt($ch, CURLOPT_URL, $sky);
curl_setopt($ch, CURLOPT_HEADER, 0);

// open output file for writing & write data to it
$fp = fopen($out, "w");
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_exec($ch);

//$out=json_decode($out, true);

//clean up
fclose($fp);
curl_close($ch);      
*/
