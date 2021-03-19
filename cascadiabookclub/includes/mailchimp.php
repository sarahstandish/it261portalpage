<?php

use GuzzleHttp\Client;

include 'header.php';

display_header('Contact');
include 'keys.php';
require_once('../../vendor/autoload.php');
// require_once('/path/to/MailchimpMarketing/vendor/autoload.php');
$list_id = '86c372fe4f';

$mailchimp = new MailchimpMarketing\ApiClient();

$mailchimp->setConfig([
    'apiKey' => $mailchimp_api_key,
    'server' => 'us7'
]);

$response = $mailchimp->ping->get();
echo "<pre>";
print_r($response);
echo "</pre>";

try {
    $response = $client->lists->addListMember($list_id, [
        "email_address" => "prudence.mcvankab@example.com",
        "status" => "subscribed",
        "merge_fields" => [
          "FNAME" => "Prudence",
          "LNAME" => "McVankab"
        ]
    ]);
    echo "<pre>";
    print_r($response);
    echo "</pre>";
} catch (MailchimpMarketing\ApiException $e) {
    echo $e->getMessage();
}


?>
