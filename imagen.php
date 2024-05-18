<?php
require_once "vendor/autoload.php";
 
use GuzzleHttp\Client;
 
$fp = fopen('blog.jpg', 'wb');
 
$client = new \GuzzleHttp\Client();
$request = $client->get('https://artisansweb.net/wp-content/uploads/2020/03/blog.jpg', ['sink' => $fp]);
 
fclose($fp);