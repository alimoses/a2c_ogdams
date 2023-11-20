<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://automation.airtimetocash.com/api/v1/generate/otp',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
    "networkName" : "MTN",
    "sender" : "08139161818"
}',
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer REMOVED',
        'Content-Type: application/json',
        'Accept: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
var_dump($response);
