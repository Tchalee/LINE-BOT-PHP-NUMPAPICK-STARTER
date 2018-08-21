<?php
$access_token = 'zU742U3Frw1VOLPEucyQwxtJuKHLj8i8l5k7WhzVeiYpHJ8fIFEkWUyCGwrAQgpl4OSRokpxtCKAZpU0D42XMD2RQmRR59/FWcxLm+ApRdCxnhG/MPq4y65mbfdz/S/ZxKe8L+TqhENP2X49vgJlqQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
