# Twilio Outbound Call PHP CLI Application

This is a command-line application written in PHP that uses the Twilio API to make outbound calls with text-to-speech functionality.

## Features

- Make outbound calls using Twilio
- Convert text to speech for the call content
- Easy to use from the command line

## Prerequisites

- PHP 7.2 or higher
- Composer
- Twilio account (Account SID and Auth Token)
- Twilio phone number

## Installation

1. Clone this repository or download the `make_call.php` file.

2. Install the Twilio PHP SDK using Composer:

   ```
   composer require twilio/sdk
   ```

3. Open `make_call.php` and replace the placeholder values with your Twilio credentials:

   ```php
   $account_sid = 'YOUR_ACCOUNT_SID';
   $auth_token = 'YOUR_AUTH_TOKEN';
   $twilio_number = 'YOUR_TWILIO_PHONE_NUMBER';
   ```

## Usage

Run the script from the command line with the following syntax:

```
php make_call.php <phone_number> "<message>"
```

- `<phone_number>`: The phone number you want to call (in E.164 format, e.g., +1234567890)
- `"<message>"`: The message you want to be spoken (enclose in quotes)

Example:

```
php make_call.php +1234567890 "Hello, this is a test call from Twilio."
```

## Output

The script will output the Call SID and status if successful:

```
Call SID: CAxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
Call status: queued
```

If there's an error, it will display the error message.

## Error Handling

The script includes basic error handling. If you don't provide the correct number of arguments, it will display a usage message:

```
Usage: php make_call.php <phone_number> <message>
```
