<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class ProductFees extends BaseModel
{
    public function getMyFeesEstimateForSKU(array $param, array $body)
    {
        $SellerSKU = $param['SellerSKU'];
        $path = '/products/fees/v0/listings/{SellerSKU}/feesEstimate';
        $path = str_replace('{SellerSKU}', $SellerSKU, $path);
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getMyFeesEstimateForASIN(array $param, array $body)
    {
        $Asin = $param['Asin'];
        $path = '/products/fees/v0/items/{Asin}/feesEstimate';
        $path = str_replace('{Asin}', $Asin, $path);
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getMyFeesEstimates(array $body)
    {
        $path = '/products/fees/v0/feesEstimate';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }
}