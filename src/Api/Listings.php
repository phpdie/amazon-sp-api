<?php

namespace Phpdie\AmazonSpApi\Api;

use Phpdie\AmazonSpApi\AmaRequest;

class Listings
{
    private AmaRequest $instance;

    public function __construct(AmaRequest $instance)
    {
        $this->instance = $instance;
    }

    public function getListingsItem(array $param)
    {
        $sellerId = $param['sellerId'];
        $sku = $param['sku'];
        $path = '/listings/2021-08-01/items/{sellerId}/{sku}';
        $path = str_replace(['{sellerId}', '{sku}'], [$sellerId, $sku], $path);
        unset($param['sellerId'], $param['sku']);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function putListingsItem(array $param, array $body)
    {
        $sellerId = $param['sellerId'];
        $sku = $param['sku'];
        $path = '/listings/2021-08-01/items/{sellerId}/{sku}';
        $path = str_replace(['{sellerId}', '{sku}'], [$sellerId, $sku], $path);
        unset($param['sellerId'], $param['sku']);
        return $this->instance->sendRequest($path, $param, $body, 'PUT');
    }

    public function deleteListingsItem(array $param)
    {
        $sellerId = $param['sellerId'];
        $sku = $param['sku'];
        $path = '/listings/2021-08-01/items/{sellerId}/{sku}';
        $path = str_replace(['{sellerId}', '{sku}'], [$sellerId, $sku], $path);
        unset($param['sellerId'], $param['sku']);
        return $this->instance->sendRequest($path, $param, [], 'DELETE');
    }

    public function patchListingsItem(array $param, array $body)
    {
        $sellerId = $param['sellerId'];
        $sku = $param['sku'];
        $path = '/listings/2021-08-01/items/{sellerId}/{sku}';
        $path = str_replace(['{sellerId}', '{sku}'], [$sellerId, $sku], $path);
        unset($param['sellerId'], $param['sku']);
        return $this->instance->sendRequest($path, $param, $body, 'PATCH');
    }
}