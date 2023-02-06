<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class Messaging extends BaseModel
{
    public function getMessagingActionsForOrder(array $param)
    {
        $amazonOrderId = $param['amazonOrderId'];
        $path = '/messaging/v1/orders/{amazonOrderId}';
        $path = str_replace('{amazonOrderId}', $amazonOrderId, $path);
        unset($param['amazonOrderId']);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function confirmCustomizationDetails(array $param, array $body)
    {
        $amazonOrderId = $param['amazonOrderId'];
        $path = '/messaging/v1/orders/{amazonOrderId}/messages/confirmCustomizationDetails';
        $path = str_replace('{amazonOrderId}', $amazonOrderId, $path);
        unset($param['amazonOrderId']);
        return $this->instance->sendRequest($path, $param, $body, 'POST');
    }

    public function createConfirmDeliveryDetails(array $param, array $body)
    {
        $amazonOrderId = $param['amazonOrderId'];
        $path = '/messaging/v1/orders/{amazonOrderId}/messages/confirmDeliveryDetails';
        $path = str_replace('{amazonOrderId}', $amazonOrderId, $path);
        unset($param['amazonOrderId']);
        return $this->instance->sendRequest($path, $param, $body, 'POST');
    }

    public function createLegalDisclosure(array $param, array $body)
    {
        $amazonOrderId = $param['amazonOrderId'];
        $path = '/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure';
        $path = str_replace('{amazonOrderId}', $amazonOrderId, $path);
        unset($param['amazonOrderId']);
        return $this->instance->sendRequest($path, $param, $body, 'POST');
    }

    public function createNegativeFeedbackRemoval(array $param)
    {
        $amazonOrderId = $param['amazonOrderId'];
        $path = '/messaging/v1/orders/{amazonOrderId}/messages/negativeFeedbackRemoval';
        $path = str_replace('{amazonOrderId}', $amazonOrderId, $path);
        unset($param['amazonOrderId']);
        return $this->instance->sendRequest($path, $param, [], 'POST');
    }

    public function createConfirmOrderDetails(array $param, array $body)
    {
        $amazonOrderId = $param['amazonOrderId'];
        $path = '/messaging/v1/orders/{amazonOrderId}/messages/confirmOrderDetails';
        $path = str_replace('{amazonOrderId}', $amazonOrderId, $path);
        unset($param['amazonOrderId']);
        return $this->instance->sendRequest($path, $param, $body, 'POST');
    }

    public function createConfirmServiceDetails(array $param, array $body)
    {
        $amazonOrderId = $param['amazonOrderId'];
        $path = '/messaging/v1/orders/{amazonOrderId}/messages/confirmServiceDetails';
        $path = str_replace('{amazonOrderId}', $amazonOrderId, $path);
        unset($param['amazonOrderId']);
        return $this->instance->sendRequest($path, $param, $body, 'POST');
    }

    public function createAmazonMotors(array $param, array $body)
    {
        $amazonOrderId = $param['amazonOrderId'];
        $path = '/messaging/v1/orders/{amazonOrderId}/messages/amazonMotors';
        $path = str_replace('{amazonOrderId}', $amazonOrderId, $path);
        unset($param['amazonOrderId']);
        return $this->instance->sendRequest($path, $param, $body, 'POST');
    }

    public function createWarranty(array $param, array $body)
    {
        $amazonOrderId = $param['amazonOrderId'];
        $path = '/messaging/v1/orders/{amazonOrderId}/messages/warranty';
        $path = str_replace('{amazonOrderId}', $amazonOrderId, $path);
        unset($param['amazonOrderId']);
        return $this->instance->sendRequest($path, $param, $body, 'POST');
    }

    public function getAttributes(array $param)
    {
        $amazonOrderId = $param['amazonOrderId'];
        $path = '/messaging/v1/orders/{amazonOrderId}/attributes';
        $path = str_replace('{amazonOrderId}', $amazonOrderId, $path);
        unset($param['amazonOrderId']);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function createDigitalAccessKey(array $param, array $body)
    {
        $amazonOrderId = $param['amazonOrderId'];
        $path = '/messaging/v1/orders/{amazonOrderId}/messages/digitalAccessKey';
        $path = str_replace('{amazonOrderId}', $amazonOrderId, $path);
        unset($param['amazonOrderId']);
        return $this->instance->sendRequest($path, $param, $body, 'POST');
    }

    public function createUnexpectedProblem(array $param, array $body)
    {
        $amazonOrderId = $param['amazonOrderId'];
        $path = '/messaging/v1/orders/{amazonOrderId}/messages/unexpectedProblem';
        $path = str_replace('{amazonOrderId}', $amazonOrderId, $path);
        unset($param['amazonOrderId']);
        return $this->instance->sendRequest($path, $param, $body, 'POST');
    }

    public function sendInvoice(array $param, array $body)
    {
        $amazonOrderId = $param['amazonOrderId'];
        $path = '/messaging/v1/orders/{amazonOrderId}/messages/invoice';
        $path = str_replace('{amazonOrderId}', $amazonOrderId, $path);
        unset($param['amazonOrderId']);
        return $this->instance->sendRequest($path, $param, $body, 'POST');
    }
}