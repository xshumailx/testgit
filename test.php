<?php
$url="http://www.google.com/ig/api?weather=london,england";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$data = curl_exec($ch); 
print_r($data);
curl_close($ch); 
////added by shumail rafique