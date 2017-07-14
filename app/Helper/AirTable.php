<?php

namespace App\Helper;

use GuzzleHttp\Client as Guzzle;

class AirTable
{
    public static function create($data)
    {
        $client = new Guzzle;
        $response = $client->request('POST', env("AIRTABLE_ADDRESS"), [
            'json' => [
                'fields' => $data
            ],
            'headers' => [
                'Content-type' => 'application/json',
                'Authorization' => 'Bearer ' . env("AIRTABLE_TOKEN")
            ]
        ]);

        return $response->getStatusCode() == 200;
    }
}