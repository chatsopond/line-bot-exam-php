<?php



require "vendor/autoload.php";

$access_token = 'HIYMMjaV2M5wSa4JeL5+qUL/prKeGy3Vc5Gj9orWJXrAI7uNNw25xzcOj4xRSfirmX0Z/9bUv0WGJU7eKXl1WDvQ3D2FaiNpND7Fcw1ytKZD963CbXdIgd5k00nC5kTW4TfM52ZmGUJZ8mSl/v23PQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '1d6affb107ea3442affb9e979a2849aa';

$pushID = 'Ubb56c39799ccd5aac622bb1d4fa067c0';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







