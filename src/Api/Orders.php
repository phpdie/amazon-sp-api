<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class Orders extends BaseModel
{
    public function getOrders(array $param)
    {
        $path = '/orders/v0/orders';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getOrder(array $param)
    {
        $orderId = $param['orderId'];
        $path = '/orders/v0/orders/{orderId}';
        $path = str_replace('{orderId}', $orderId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function getOrderBuyerInfo(array $param)
    {
        $orderId = $param['orderId'];
        $path = '/orders/v0/orders/{orderId}/buyerInfo';
        $path = str_replace('{orderId}', $orderId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function getOrderAddress(array $param)
    {
        $orderId = $param['orderId'];
        $path = '/orders/v0/orders/{orderId}/address';
        $path = str_replace('{orderId}', $orderId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function getOrderItems(array $param)
    {
        $orderId = $param['orderId'];
        $path = '/orders/v0/orders/{orderId}/orderItems';
        $path = str_replace('{orderId}', $orderId, $path);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getOrderItemsBuyerInfo(array $param)
    {
        $orderId = $param['orderId'];
        $path = '/orders/v0/orders/{orderId}/orderItems/buyerInfo';
        $path = str_replace('{orderId}', $orderId, $path);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function updateShipmentStatus(array $param, array $body)
    {
        $orderId = $param['orderId'];
        $path = '/orders/v0/orders/{orderId}/shipment';
        $path = str_replace('{orderId}', $orderId, $path);
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getOrderRegulatedInfo(array $param)
    {
        $orderId = $param['orderId'];
        $path = '/orders/v0/orders/{orderId}/regulatedInfo';
        $path = str_replace('{orderId}', $orderId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function updateVerificationStatus(array $param, array $body)
    {
        $orderId = $param['orderId'];
        $path = '/orders/v0/orders/{orderId}/regulatedInfo';
        $path = str_replace('{orderId}', $orderId, $path);
        return $this->instance->sendRequest($path, [], $body, 'PATCH');
    }
}