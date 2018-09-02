<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.line.me/v2/bot/message/push");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n  \"to\": \"Ubb56c39799ccd5aac622bb1d4fa067c0\",\n  \"messages\": [\n    {\n      \"type\": \"flex\",\n      \"altText\": \"This is a Flex Message\",\n      \"contents\": {\n        \"type\": \"bubble\",\n        \"body\": {\n          \"type\": \"box\",\n          \"layout\": \"horizontal\",\n          \"contents\": [\n            {\n              \"type\": \"text\",\n              \"text\": \"Hello,\"\n            },\n            {\n              \"type\": \"text\",\n              \"text\": \"Flex!\"\n            }\n          ]\n        }\n      }\n    }\n  ]\n}");
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = "Content-Type: application/json";
$headers[] = "Authorization: Bearer {HIYMMjaV2M5wSa4JeL5+qUL/prKeGy3Vc5Gj9orWJXrAI7uNNw25xzcOj4xRSfirmX0Z/9bUv0WGJU7eKXl1WDvQ3D2FaiNpND7Fcw1ytKZD963CbXdIgd5k00nC5kTW4TfM52ZmGUJZ8mSl/v23PQdB04t89/1O/w1cDnyilFU=}";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

?>
