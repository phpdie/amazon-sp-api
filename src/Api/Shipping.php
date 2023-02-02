<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class Shipping extends BaseModel
{
    public function createShipment(array $body)
    {
        $path = '/shipping/v1/shipments';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getShipment(array $param)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/shipping/v1/shipments/{shipmentId}';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function cancelShipment(array $param)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/shipping/v1/shipments/{shipmentId}/cancel';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, [], [], 'POST');
    }

    public function purchaseLabels(array $param, array $body)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/shipping/v1/shipments/{shipmentId}/purchaseLabels';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function retrieveShippingLabel(array $param, array $body)
    {
        $shipmentId = $param['shipmentId'];
        $trackingId = $param['trackingId'];
        $path = '/shipping/v1/shipments/{shipmentId}/containers/{trackingId}/label';
        $path = str_replace(['{shipmentId}', '{trackingId}'], [$shipmentId, $trackingId], $path);
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function purchaseShipment(array $body)
    {
        $path = '/shipping/v1/purchaseShipment';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getRates(array $body)
    {
        $path = '/shipping/v1/rates';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getAccount()
    {
        $path = '/shipping/v1/account';
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function getTrackingInformation(array $param)
    {
        $trackingId = $param['trackingId'];
        $path = '/shipping/v1/tracking/{trackingId}';
        $path = str_replace('{trackingId}', $trackingId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }
}