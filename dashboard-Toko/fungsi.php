<?php
function curl($method, $param)
{
    $url = "http://localhost:8080/index.php/api/" . $method;
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $param,
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
            "key: 6440637357919b9af12c6453f0f3a988",
        ),
    ));

    $output = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($output);

    return $data;
}
