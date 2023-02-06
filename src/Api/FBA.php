<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class FBA extends BaseModel
{
    public function getItemEligibilityPreview(array $param)
    {
        $path = '/fba/inbound/v1/eligibility/itemPreview';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }
}