<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class MerchantFulfillment extends BaseModel
{
    public function getEligibleShipmentServicesOld(array $body)
    {
        $path = '/mfn/v0/eligibleServices';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getEligibleShipmentServices(array $body)
    {
        $path = '/mfn/v0/eligibleShippingServices';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getShipment(array $param)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/mfn/v0/shipments/{shipmentId}';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function cancelShipment(array $param)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/mfn/v0/shipments/{shipmentId}';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, [], [], 'DELETE');
    }

    public function cancelShipmentOld(array $param)
    {
        $shipmentId = $param['shipmentId'];
        $path = '/mfn/v0/shipments/{shipmentId}/cancel';
        $path = str_replace('{shipmentId}', $shipmentId, $path);
        return $this->instance->sendRequest($path, [], [], 'PUT');
    }

    public function createShipment(array $body)
    {
        $path = '/mfn/v0/shipments';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getAdditionalSellerInputsOld(array $body)
    {
        $path = '/mfn/v0/sellerInputs';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getAdditionalSellerInputs(array $body)
    {
        $path = '/mfn/v0/additionalSellerInputs';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }
}