<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class Sellers extends BaseModel
{
    public function getMarketplaceParticipations()
    {
        $path = '/sellers/v1/marketplaceParticipations';
        return $this->instance->sendRequest($path, [], [], 'GET');
    }
}