<?php

namespace App\Services\Sms;

use GuzzleHttp\Client;

class SmsRu implements SmsSender
{
    private $appId = 15;
    private $url;
    private $client;

    public function __construct($appId = 15, $url = 'https://sms.ru/sms/send')
    {

        $this->appId = $appId;
        $this->url = $url;
        $this->client = new Client();
    }

    public function send($number, $text): void
    {
//        $this->client->post($this->url, [
//            'form_params' => [
//                'api_id' => $this->appId,
//                'to' => '+' . trim($number, '+'),
//                'text' => $text
//            ],
//        ]);
    }
}