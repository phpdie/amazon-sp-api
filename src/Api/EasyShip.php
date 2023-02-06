<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class EasyShip extends BaseModel
{
    public function listHandoverSlots(array $body)
    {
        $path = '/easyShip/2022-03-23/timeSlot';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getScheduledPackage(array $body)
    {
        $path = '/easyShip/2022-03-23/package';
        return $this->instance->sendRequest($path, [], $body, 'GET');
    }

    public function createScheduledPackage(array $body)
    {
        $path = '/easyShip/2022-03-23/package';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function updateScheduledPackages(array $body)
    {
        $path = '/easyShip/2022-03-23/package';
        return $this->instance->sendRequest($path, [], $body, 'PATCH');
    }

    public function createScheduledPackageBulk(array $body)
    {
        $path = '/easyShip/2022-03-23/packages/bulk';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }
}