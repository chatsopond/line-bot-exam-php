<?php

$try_contents = array(
  'type' => 'text',
  'text' => 'hello'
);

$try_body = array(
  'type' => 'box',
  'layout' => 'horizontal',
  'contents' => [$try_content]
);

$body_data_contents = array(
  'type' => 'bubble',
  'body' => [$try_body]
);

$body_data = array(
    'type' => 'text',
    'altText' => 'This is a Flex Message',
    'contents' => [$body_data_contents]
);

$ja = array(
  'to' => 'Ubb56c39799ccd5aac622bb1d4fa067c0',
  'message' => $body_data
);

// Configure cURL
$image_curl = curl_init();
curl_setopt($image_curl, CURLOPT_URL, "https://api.line.me/v2/bot/message/push");
curl_setopt($image_curl, CURLOPT_POST, true); // Use POST
curl_setopt($image_curl, CURLOPT_POSTFIELDS, $body_data); // Setup post body
curl_setopt($image_curl, CURLOPT_RETURNTRANSFER, true); // Receive server response

// Execute request and read responce
$session_response = curl_exec($image_curl);
$response = json_decode($session_response);

?>
