<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class Solicitations extends BaseModel
{
    public function getSolicitationActionsForOrder(array $param)
    {
        $amazonOrderId = $param['amazonOrderId'];
        $path = '/solicitations/v1/orders/{amazonOrderId}';
        $path = str_replace('{amazonOrderId}', $amazonOrderId, $path);
        unset($param['amazonOrderId']);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function createProductReviewAndSellerFeedbackSolicitation(array $param)
    {
        $amazonOrderId = $param['amazonOrderId'];
        $path = '/solicitations/v1/orders/{amazonOrderId}/solicitations/productReviewAndSellerFeedback';
        $path = str_replace('{amazonOrderId}', $amazonOrderId, $path);
        unset($param['amazonOrderId']);
        return $this->instance->sendRequest($path, $param, [], 'POST');
    }
}