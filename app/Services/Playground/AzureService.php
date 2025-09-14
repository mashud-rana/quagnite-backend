<?php

namespace App\Services\Playground;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class AzureService
{
    protected $clientId;
    protected $clientSecret;
    protected $tenantId;

    public function __construct()
    {
        $this->clientId = env('AZURE_CLIENT_ID');
        $this->clientSecret = env('AZURE_CLIENT_SECRET');
        $this->tenantId = env('AZURE_TENANT_ID');
    }

    public function getAccessToken()
    {
        $response = Http::asForm()->post("https://login.microsoftonline.com/{$this->tenantId}/oauth2/v2.0/token", [
            'grant_type' => 'client_credentials',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'scope' => 'https://graph.microsoft.com/.default',
        ]);

        // Check the status code and body
        if ($response->successful()) {
            return $response->json()['access_token'];
        } else {
            Log::error('Failed to get access token', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
        }
    }

    public function createAzureUser($userData)
    {
        $accessToken = $this->getAccessToken();

        $response = Http::withToken($accessToken)->post('https://graph.microsoft.com/v1.0/users', $userData);

        return $response->json()['id'];
    }

    public function deleteAzureUser($userId)
    {
        $accessToken = $this->getAccessToken();

        $response = Http::withToken($accessToken)->delete("https://graph.microsoft.com/v1.0/users/{$userId}");

        return $response->json();
    }
}
