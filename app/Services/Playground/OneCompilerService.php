<?php

namespace App\Services\Playground;

use GuzzleHttp\Client;

class OneCompilerService
{
    protected $baseUri;
    protected $accessToken;

    public function __construct()
    {
        $this->baseUri = config('settings.oc_base_uri');
        $this->accessToken = config('settings.oc_access_key');
    }
    public function makeRequest($lang, $file, $code)
    {
        $client = new Client();

        $response = $client->request(
            'POST',
            $this->baseUri,
            [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => [
                    "language" => $lang,
                    "stdin" => "mcdns",
                    "files" => [
                        [
                            "name" => $file,
                            "content" => $code,
                        ]
                    ]
                ],
                'query' => [
                    "access_token" => $this->accessToken,
                ]
            ]
        );

        $response = $response->getBody()->getContents();

        return json_decode($response);
    }
}
