<?php
    $cSession = curl_init(); 
    curl_setopt($cSession, CURLOPT_URL,"https://www.bitstamp.net/api/v2/ticker/btcusd/");
    curl_setopt($cSession, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($cSession, CURLOPT_HEADER, 0); 
    curl_setopt($cSession, CURLOPT_SSL_VERIFYPEER, 0);
    $result = curl_exec($cSession);
    curl_close($cSession);
    $result = json_decode($result, 1);
    $high = $result['high'];
    $low = $result['low'];
?>