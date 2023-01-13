<?php


namespace Phpdie\AmazonSpApi;

use \Aws\Sts\StsClient;
use \Aws\Credentials\Credentials;

class AmaCredentials
{
    public static function createCredentials($key, $secret, $region, $roleToAssumeArn): Credentials
    {
        $client = new StsClient([
            'region' => $region,
            'version' => '2011-06-15',
            'credentials' => [
                'key' => $key,
                'secret' => $secret,
            ]
        ]);
        $result = $client->assumeRole([
            'RoleArn' => $roleToAssumeArn,
            'RoleSessionName' => 'amazon-sp-api-php'
        ]);
        return $client->createCredentials($result);
    }

    public static function makeCredentials($AccessKeyId, $SecretAccessKey, $SecurityToken, $Expiration): Credentials
    {
        return new Credentials($AccessKeyId, $SecretAccessKey, $SecurityToken, $Expiration);
    }
}