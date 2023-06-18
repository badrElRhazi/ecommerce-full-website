<?php
// wishlist.php


$response = ['success' => true, 'message' => 'Product added to wishlist.'];

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
