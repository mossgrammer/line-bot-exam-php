<?php



require "vendor/autoload.php";

$access_token = '1GJIFzTVEKrfRRzuHCvMttSHgPJPpXvGzJ28CXTb0tS62ZE5Tf9AvGQQcyABrOtHVQCRVwV+7n5e0oE37997+lBj1fAGP+cru6OwtKkEhfyjN/Ze+rMlKEPBY83VqW+gcEGV04C1PmbH68p78upHaQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '688212641ae8e578ca9cc7cee78a367e';

$pushID = 'ผมชื่อมอสครับ ผมมีแฟนแล้วครับ แฟนของผมชื่อปิ่น ผมรักแฟนผมคนเดียวครับ แต่ก่อนหน้านั้นผมอยากลองไปเที่ยวเลาจ์ซักครั้งครับ';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







