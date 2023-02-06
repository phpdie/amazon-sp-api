<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class ProductPricing extends BaseModel
{
    public function getPricing(array $param)
    {
        $path = '/products/pricing/v0/price';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getCompetitivePricing(array $param)
    {
        $path = '/products/pricing/v0/competitivePrice';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getListingOffers(array $param)
    {
        $SellerSKU = $param['SellerSKU'];
        $path = '/products/pricing/v0/listings/{SellerSKU}/offers';
        $path = str_replace('{SellerSKU}', $SellerSKU, $path);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getItemOffers(array $param)
    {
        $Asin = $param['Asin'];
        $path = '/products/pricing/v0/items/{Asin}/offers';
        $path = str_replace('{Asin}', $Asin, $path);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getItemOffersBatch(array $body)
    {
        $path = '/batches/products/pricing/v0/itemOffers';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getListingOffersBatch(array $body)
    {
        $path = '/batches/products/pricing/v0/listingOffers';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }
}