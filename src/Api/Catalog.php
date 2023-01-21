<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\AmaRequest;

class Catalog
{
    private AmaRequest $instance;

    public function __construct(AmaRequest $instance)
    {
        $this->instance = $instance;
    }

    public function searchCatalogItems(array $param)
    {
        $path = '/catalog/2022-04-01/items';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getCatalogItem(array $param)
    {
        $asin = $param['asin'];
        $path = '/catalog/2022-04-01/items/{asin}';
        $path = str_replace('{asin}', $asin, $path);
        unset($param['asin']);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }
}