<?php
// show all errors
error_reporting(E_ALL);
ini_set('display_errors', 1);
// include the config file

$config = include('../config.php');
$OPENAI_KEY = $config["OPENAI_KEY"];

// get the input
$input = $_GET['input'];



$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.openai.com/v1/chat/completions",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n  \"model\": \"gpt-3.5-turbo\",\n  \"messages\": [\n\t\t{\"role\": \"system\", \"content\": \"Convert abbrivations to full words. Do not change the sentence.\"},\n\t\t{\"role\": \"user\", \"content\": \"".$input."\"}\n\t]\n}",
  CURLOPT_HTTPHEADER => [
    "Authorization: Bearer $OPENAI_KEY",
    "Content-Type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  // parse the response
  $response = json_decode($response, true);
  $response = $response["choices"][0]["message"]["content"];
  echo $response;
}


?>