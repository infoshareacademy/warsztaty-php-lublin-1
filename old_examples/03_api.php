<?php
# GET https://isa-php-shop-api.herokuapp.com/api/v1/products
# POST https://isa-php-shop-api.herokuapp.com/api/v1/products
# GET https://isa-php-shop-api.herokuapp.com/api/v1/products/:id
# PATCH https://isa-php-shop-api.herokuapp.com/api/v1/products/:id
# DELETE https://isa-php-shop-api.herokuapp.com/api/v1/products/:id

$apiUrl = 'https://isa-php-shop-api.herokuapp.com/api/v1';

$response = file_get_contents("{$apiUrl}/products");
$response = json_decode($response);

var_dump($response);

foreach ($response as $product) {
  var_dump($product->_id);
  var_dump($product->name);
}

?>

<ul>
  <?php foreach($response as $product): ?>
    <li><?= $product->name ?></li>
  <?php endforeach; ?>
<ul>
