<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\AmaRequest;

class ShipmentInvoicing
{
    private AmaRequest $instance;

    public function __construct(AmaRequest $instance)
    {
        $this->instance = $instance;
    }

    public function getShipmentDetails(array $param)
    {
        $path = '/fba/outbound/brazil/v0/shipments/{shipmentId}';
        $shipmentId = $param['shipmentId'];
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function submitInvoice(array $param, array $body)
    {
        $path = '/fba/outbound/brazil/v0/shipments/{shipmentId}/invoice';
        $shipmentId = $param['shipmentId'];
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getInvoiceStatus(array $param)
    {
        $path = '/fba/outbound/brazil/v0/shipments/{shipmentId}/invoice/status';
        $shipmentId = $param['shipmentId'];
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }
}