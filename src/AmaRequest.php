<?php


namespace AmazonSpApi;

use \Aws\Credentials\Credentials;
use \Aws\Signature\SignatureV4;
use \GuzzleHttp\Psr7\Request;
use \GuzzleHttp\Client;

class AmaRequest
{
    private string $host = '';

    private string $access_token = '';

    private string $region = '';

    private static AmaRequest $instance;

    private Credentials $credentials;

    private static array $endpoints = [
        'https://sellingpartnerapi-na.amazon.com' => [
            //North America (Canada, US, Mexico, and Brazil marketplaces)
            'region' => 'us-east-1',
        ],
        'https://sellingpartnerapi-eu.amazon.com' => [
            //Europe (Spain, UK, France, Belgium, Netherlands, Germany, Italy, Sweden, Poland, Saudi Arabia,
            //Egypt, Turkey, United Arab Emirates, and India marketplaces)
            'region' => 'eu-west-1',
        ],
        'https://sellingpartnerapi-fe.amazon.com' => [
            //Far East (Singapore, Australia, and Japan marketplaces)
            'region' => 'us-west-2',
        ]
    ];

    private function getHost(): string
    {
        return $this->host;
    }

    public function setHost(string $host): void
    {
        if (strpos($host, 'https://') === false) {
            $host = 'https://' . $host;
        }
        if (isset(self::$endpoints[$host])) {
            $this->host = $host;
            $this->setRegion(self::$endpoints[$host]['region']);
        }
    }

    private function getAccessToken(): string
    {
        return $this->access_token;
    }

    private function setAccessToken(string $access_token): void
    {
        $this->access_token = $access_token;
    }

    private function getRegion(): string
    {
        return $this->region;
    }

    private function setRegion(string $region): void
    {
        $this->region = $region;
    }

    private function getCredentials(): Credentials
    {
        return $this->credentials;
    }

    private function setCredentials(Credentials $credentials): void
    {
        $this->credentials = $credentials;
    }

    private function __construct(string $access_token, Credentials $credentials)
    {
        $this->setAccessToken($access_token);
        $this->setCredentials($credentials);
    }

    private function __clone()
    {

    }

    public static function getInstance(string $access_token, Credentials $credentials): AmaRequest
    {
        if (!empty(self::$instance) && self::$instance instanceof self) {
            return self::$instance;
        }
        return new self($access_token, $credentials);
    }

    public static function getAccessTokenByRefreshToken(string $client_id, string $client_secret, string $refresh_token)
    {
        $data = [
            'grant_type' => 'refresh_token',
            'client_id' => $client_id,
            'client_secret' => $client_secret,
            'refresh_token' => $refresh_token
        ];
        return (new Client())->request('POST',
            'https://api.amazon.com/auth/o2/token?' . http_build_query($data)
        )->getBody()->getContents();
    }

    public function sendRequest(string $path, array $param, array $body, string $method = 'GET')
    {
        $service = 'execute-api';
        $method = strtoupper(trim($method));
        $uri = $this->getHost() . trim($path);
        $uri .= $param ? '?' . http_build_query($param) : '';
        if ($body) {
            $body = isset($body['body']) ? json_encode($body) : json_encode(['body' => $body]);
        } else {
            $body = null;
        }
        $request = new Request($method, $uri, ['x-amz-access-token' => $this->getAccessToken()], $body);
        $signatureV4 = new SignatureV4($service, $this->getRegion());
        $sendRequest = $signatureV4->signRequest($request, $this->getCredentials(), $service);
        return (new Client())->send($sendRequest)->getBody()->getContents();
    }
}