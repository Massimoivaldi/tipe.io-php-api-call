<?php
error_reporting(-1); //Passing in the value -1 will show every possible error, even when new levels and constants are added in future PHP versions
ini_set('display_errors', 'On');


require 'vendor/autoload.php';


echo "guzzle<br>";

/* Tipe REST API
var DOCUMENT_ID = '5a841a673dfd0e0013dedcf2';
var YOUR_ORG_SECRET_KEY = 'NWE4NDExMWE1ODIyYTEwMDEzNjUwOTVk';
var YOUR_API_KEY = '6D7UA7ZTZ3FU992QAZ2E2CBGG'; // Generated-API-Key-1518604935414

window.fetch('https://api.tipe.io/api/v1/document/' + DOCUMENT_ID, {
  method: 'get',
  headers: {
    'Content-Type': 'application/json',
    'Authorization': YOUR_API_KEY,
    'Tipe-Id': YOUR_ORG_SECRET_KEY
  }
})
  .then(function (res) { return res.json(); })
  .then(function (data) {
    console.log(data);
  });

 */

$document_id = '5a841a673dfd0e0013dedcf2';
$your_org_secret_key = 'NWE4NDExMWE1ODIyYTEwMDEzNjUwOTVk';
$your_api_key = '6D7UA7ZTZ3FU992QAZ2E2CBGG';
$url = "https://api.tipe.io/api/v1/";

$client = new GuzzleHttp\Client(['base_uri' => $url]);
//$response = $client->request('GET', $document_id);

$response = $client->request('GET', 'folder/5a84116cd099770013f6c3c0', [
	    'headers' => [
	        'Content-Type'  => 'application/json',
	        'Authorization' => '6D7UA7ZTZ3FU992QAZ2E2CBGG' ,
	        'Tipe-Id'       => 'NWE4NDExMWE1ODIyYTEwMDEzNjUwOTVk'
	    ]
	]);

echo "<pre>";
print_r(json_decode($response->getBody()));
echo "</pre>";




?>
