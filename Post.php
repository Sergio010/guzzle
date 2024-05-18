<?php
require_once "vendor/autoload.php";
 
use GuzzleHttp\Client;
 
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'BASE_URL',
]);
 
$client->request('POST', '/endpoint_here', [
   'form_params' => [
       'foo' => 'bar',
       'baz' => ['hi', 'there!']
   ]
]);

$body = $response->getBody();
$arr_body = json_decode($body);
echo "<pre>"; print_r($arr_body) ; "</pre>";