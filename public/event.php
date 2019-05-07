<?php

$post_params = json_decode(file_get_contents("php://input"), true);
$input_params = $_GET;

if (is_array($post_params)) {
    $input_params = array_merge($input_params, $post_params);
}

if (isset($input_params['status'])) {
    error_log("Status: " . $input_params['status']);
}
error_log("Event data: " . json_encode($input_params));

