<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.pepipost.com/v2/sendEmail",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"personalizations\":[{\"recipient\":\"sumeet2088@gmail.com\"}],\"from\":{\"fromEmail\":\"sumeetsingh@pepisandbox.com\",\"fromName\":\"sumeetsingh\"},\"subject\":\"Welcome to Pepipost\",\"content\":\"Hi, this is my first trial mail\"}",
  CURLOPT_HTTPHEADER => array(
    "api_key: dfa598683712ef7aa6289020f91a7614",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}