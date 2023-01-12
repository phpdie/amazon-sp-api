<?php


namespace Phpdie\AmazonSpApi\Api;


use Phpdie\AmazonSpApi\AmaRequest;

class FbaInbound
{
    private AmaRequest $instance;

    public function __construct(AmaRequest $instance)
    {
        $this->instance = $instance;
    }

    public function getInboundGuidance(array $param)
    {
        $path = '/fba/inbound/v0/itemsGuidance';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function createInboundShipmentPlan(array $body)
    {
        $path = '/fba/inbound/v0/plans';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function updateInboundShipment(array $param, array $body)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/fba/inbound/v0/shipments/{shipmentId}';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, [], $body, 'PUT');
    }

    public function createInboundShipment(array $param, array $body)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/fba/inbound/v0/shipments/{shipmentId}';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getPreorderInfo(array $param)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/fba/inbound/v0/shipments/{shipmentId}/preorder';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        unset($param['shipmentId']);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function confirmPreorder(array $param)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/fba/inbound/v0/shipments/{shipmentId}/preorder/confirm';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        unset($param['shipmentId']);
        return $this->instance->sendRequest($path, $param, [], 'PUT');
    }

    public function getPrepInstructions(array $param)
    {
        $path = '/fba/inbound/v0/prepInstructions';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getTransportDetails(array $param)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/fba/inbound/v0/shipments/{shipmentId}/transport';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function putTransportDetails(array $param, array $body)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/fba/inbound/v0/shipments/{shipmentId}/transport';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, [], $body, 'PUT');
    }

    public function voidTransport(array $param)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/fba/inbound/v0/shipments/{shipmentId}/transport/void';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, [], [], 'POST');
    }

    public function estimateTransport(array $param)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/fba/inbound/v0/shipments/{shipmentId}/transport/estimate';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, [], [], 'POST');
    }

    public function confirmTransport(array $param)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/fba/inbound/v0/shipments/{shipmentId}/transport/confirm';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, [], [], 'POST');
    }

    public function getLabels(array $param)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/fba/inbound/v0/shipments/{shipmentId}/labels';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        unset($param['shipmentId']);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getBillOfLading(array $param)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/fba/inbound/v0/shipments/{shipmentId}/billOfLading';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function getShipments(array $param)
    {
        $path = '/fba/inbound/v0/shipments';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getShipmentItemsByShipmentId(array $param)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/fba/inbound/v0/shipments/{shipmentId}/items';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        unset($param['shipmentId']);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getShipmentItems(array $param)
    {
        $path = '/fba/inbound/v0/shipmentItems';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }
}