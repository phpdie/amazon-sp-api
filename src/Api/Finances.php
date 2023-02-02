<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class Finances extends BaseModel
{
    public function listFinancialEventGroups(array $param)
    {
        $path = '/finances/v0/financialEventGroups';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function listFinancialEventsByGroupId(array $param)
    {
        $eventGroupId = $param['eventGroupId'];
        $path = '/finances/v0/financialEventGroups/{eventGroupId}/financialEvents';
        $path = str_replace('{eventGroupId}', $eventGroupId, $path);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function listFinancialEventsByOrderId(array $param)
    {
        $orderId = $param['orderId'];
        $path = '/finances/v0/orders/{orderId}/financialEvents';
        $path = str_replace('{orderId}', $orderId, $path);
        unset($param['orderId']);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function listFinancialEvents(array $param)
    {
        $path = '/finances/v0/financialEvents';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }
}