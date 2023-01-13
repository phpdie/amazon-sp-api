<?php

namespace Phpdie\AmazonSpApi\Api;

use Phpdie\AmazonSpApi\AmaRequest;

class Sellers
{
    private AmaRequest $instance;

    public function __construct(AmaRequest $instance)
    {
        $this->instance = $instance;
    }

    public function getMarketplaceParticipations()
    {
        $path = '/sellers/v1/marketplaceParticipations';
        return $this->instance->sendRequest($path, [], [], 'GET');
    }
}