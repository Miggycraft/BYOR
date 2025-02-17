<?php
require "vendor/autoload.php";

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

$data = json_decode(file_get_contents('php://input'));

$text = $data->text;
$cachedItems = $data->cachedItems ?? '';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$api_key = $_ENV['API_KEY'] ?? null;

$client = new Client($api_key);
$prompt = "You are a professional chatbot assisting the user with computer specs. Make sure the pricing listed is accurate and in Philippine Peso (₱).";
$prompt .= "\nOnly suggest products that are in the available cache, do not suggest prebuilt specs, and ensure the pricing is validated for each product.";
$prompt .= "\nHere are the available products from cache: " . $cachedItems;
$prompt .= "\nIf the user queries a product not in the cache, politely inform them.";
$prompt .= "\nYour response must follow this format for each product: ";
$prompt .= "\n- Product Name: Description (₱Price)";
$prompt .= "\nAfter listing the products, include the total cost at the end like this: 'Total Cost: ₱TotalAmount'.";
$prompt .= "\nUser query: " . $text;
$response = $client->geminiPro()->generateContent(new TextPart($prompt));

echo $response->text();
