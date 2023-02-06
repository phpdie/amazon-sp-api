<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class Sales extends BaseModel
{
    public function getOrderMetrics(array $param)
    {
        $path = '/sales/v1/orderMetrics';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }
}