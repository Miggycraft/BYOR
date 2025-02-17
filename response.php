<?php
require "vendor/autoload.php";

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

$data = json_decode(file_get_contents('php://input'));

$text = $data->text;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$api_key = $_ENV['API_KEY'] ?? null;

$client = new Client($api_key);

$response = $client->geminiPro()->generateContent(new TextPart($text));

echo $response->text();
?>