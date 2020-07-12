<?php



require "vendor/autoload.php";

$access_token = 'yOkF958n++ZTBRkyuDiLhTEqgELkP7rp0c3c/fXLhs2FyCsXRhYGnfNwgOj/8iGvsnVjz1lMcKn/YUY3xFcUQ0OmXAGY6fimqOrgmPoAQSW29XnI3GdJZ5rcbd0WP+5KIjnQMZ9S0NAXSzQHd/z2ZQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'a1446a22faa1009d7cee38eb416ff3bd';

$pushID = '1654439762';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







