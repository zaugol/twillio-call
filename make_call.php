<?php

require_once 'vendor/autoload.php';
use Twilio\Rest\Client;

// Twilio credentials
$account_sid = 'YOUR_ACCOUNT_SID';
$auth_token = 'YOUR_AUTH_TOKEN';
$twilio_number = 'YOUR_TWILIO_PHONE_NUMBER';

// Function to make the outbound call
function makeOutboundCall($to, $message) {
    global $account_sid, $auth_token, $twilio_number;

    $client = new Client($account_sid, $auth_token);

    try {
        $call = $client->calls->create(
            $to,
            $twilio_number,
            [
                'twiml' => "<Response><Say>{$message}</Say></Response>"
            ]
        );

        echo "Call SID: " . $call->sid . "\n";
        echo "Call status: " . $call->status . "\n";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

// Check if the required arguments are provided
if ($argc != 3) {
    echo "Usage: php " . $argv[0] . " <phone_number> <message>\n";
    exit(1);
}

$to_number = $argv[1];
$message = $argv[2];

// Make the outbound call
makeOutboundCall($to_number, $message);