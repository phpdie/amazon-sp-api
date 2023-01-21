<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\AmaRequest;

class FbaOutbound
{
    private AmaRequest $instance;

    public function __construct(AmaRequest $instance)
    {
        $this->instance = $instance;
    }

    public function getFulfillmentPreview(array $body)
    {
        $path = '/fba/outbound/2020-07-01/fulfillmentOrders/preview';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function listAllFulfillmentOrders(array $param)
    {
        $path = '/fba/outbound/2020-07-01/fulfillmentOrders';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function createFulfillmentOrder(array $body)
    {
        $path = '/fba/outbound/2020-07-01/fulfillmentOrders';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getPackageTrackingDetails(array $param)
    {
        $path = '/fba/outbound/2020-07-01/tracking';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function listReturnReasonCodes(array $param)
    {
        $path = '/fba/outbound/2020-07-01/returnReasonCodes';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function createFulfillmentReturn(array $param, array $body)
    {
        $sellerFulfillmentOrderId = $param['sellerFulfillmentOrderId'];
        $path = '/fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}/return';
        $path = str_replace('{sellerFulfillmentOrderId}', $sellerFulfillmentOrderId, $path);
        return $this->instance->sendRequest($path, [], $body, 'PUT');
    }

    public function getFulfillmentOrder(array $param)
    {
        $sellerFulfillmentOrderId = $param['sellerFulfillmentOrderId'];
        $path = '/fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}';
        $path = str_replace('{sellerFulfillmentOrderId}', $sellerFulfillmentOrderId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function updateFulfillmentOrder(array $param, array $body)
    {
        $sellerFulfillmentOrderId = $param['sellerFulfillmentOrderId'];
        $path = '/fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}';
        $path = str_replace('{sellerFulfillmentOrderId}', $sellerFulfillmentOrderId, $path);
        return $this->instance->sendRequest($path, [], $body, 'PUT');
    }

    public function cancelFulfillmentOrder(array $param)
    {
        $sellerFulfillmentOrderId = $param['sellerFulfillmentOrderId'];
        $path = '/fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}/cancel';
        $path = str_replace('{sellerFulfillmentOrderId}', $sellerFulfillmentOrderId, $path);
        return $this->instance->sendRequest($path, [], [], 'PUT');
    }

    public function getFeatures(array $param)
    {
        $path = '/fba/outbound/2020-07-01/features';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getFeatureInventory(array $param)
    {
        $featureName = $param['featureName'];
        $path = '/fba/outbound/2020-07-01/features/inventory/{featureName}';
        $path = str_replace('{featureName}', $featureName, $path);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getFeatureSKU(array $param)
    {
        $featureName = $param['featureName'];
        $sellerSku = $param['sellerSku'];
        $path = '/fba/outbound/2020-07-01/features/inventory/{featureName}/{sellerSku}';
        $path = str_replace(['{featureName}', '{sellerSku}'], [$featureName, $sellerSku], $path);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }
}