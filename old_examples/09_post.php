<?php

// Initialize Guzzle client
$client = new GuzzleHttp\Client();

// Create a POST request
$response = $client->request(
    'POST',
    'https://isa-php-shop-api.herokuapp.com/api/v1/products',
    [
      'headers'        => ['Accept' => 'application/json', 'Content-Type' => 'application/json'],
      'form_params' => [
          'name' => 'Product1',
          'description' => 'Lorem ipsum'
        ]
    ]
);
// Parse the response object, e.g. read the headers, body, etc.
$headers = $response->getHeaders();
$body = $response->getBody();

// Output headers and body for debugging purposes
var_dump($headers, $body);
