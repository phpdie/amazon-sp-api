<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class Notifications extends BaseModel
{
    public function getSubscription(array $param)
    {
        $notificationType = $param['notificationType'];
        $path = '/notifications/v1/subscriptions/{notificationType}';
        $path = str_replace('{notificationType}', $notificationType, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function createSubscription(array $param, array $body)
    {
        $notificationType = $param['notificationType'];
        $path = '/notifications/v1/subscriptions/{notificationType}';
        $path = str_replace('{notificationType}', $notificationType, $path);
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getSubscriptionById(array $param)
    {
        $notificationType = $param['notificationType'];
        $subscriptionId = $param['subscriptionId'];
        $path = '/notifications/v1/subscriptions/{notificationType}/{subscriptionId}';
        $path = str_replace(['{notificationType}', '{subscriptionId}'], [$notificationType, $subscriptionId], $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function deleteSubscriptionById(array $param)
    {
        $notificationType = $param['notificationType'];
        $subscriptionId = $param['subscriptionId'];
        $path = '/notifications/v1/subscriptions/{notificationType}/{subscriptionId}';
        $path = str_replace(['{notificationType}', '{subscriptionId}'], [$notificationType, $subscriptionId], $path);
        return $this->instance->sendRequest($path, [], [], 'DELETE');
    }

    public function getDestinations()
    {
        $path = '/notifications/v1/destinations';
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function createDestination(array $body)
    {
        $path = '/notifications/v1/destinations';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getDestination(array $param)
    {
        $destinationId = $param['destinationId'];
        $path = '/notifications/v1/destinations/{destinationId}';
        $path = str_replace('{destinationId}', $destinationId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function deleteDestination(array $param)
    {
        $destinationId = $param['destinationId'];
        $path = '/notifications/v1/destinations/{destinationId}';
        $path = str_replace('{destinationId}', $destinationId, $path);
        return $this->instance->sendRequest($path, [], [], 'DELETE');
    }
}