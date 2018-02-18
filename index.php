<?php
require 'vendor/autoload.php';


echo "guzzle<br>";



$url = "https://api.tipe.io/api/v1/";

$client = new GuzzleHttp\Client(['base_uri' => $url]);
//$response = $client->request('GET', $document_id);

$response = $client->request('GET', 'folder', [
	    'headers' => [
	        'Content-Type'  => 'application/json',
	        'Authorization' => '*************' ,
	        'Tipe-Id'       => '************************'
	    ]
	]);

echo "<pre>";
print_r(json_decode($response->getBody()));
echo "</pre>";




?>
