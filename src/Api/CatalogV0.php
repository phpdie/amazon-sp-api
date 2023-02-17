<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class CatalogV0 extends BaseModel
{
    public function listCatalogItems(array $param)
    {
        $path = '/catalog/v0/items';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getCatalogItem(array $param)
    {
        $asin = $param['asin'];
        $path = '/catalog/v0/items/{asin}';
        $path = str_replace('{asin}', $asin, $path);
        unset($param['asin']);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function listCatalogCategories(array $param)
    {
        $path = '/catalog/v0/categories';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }
}