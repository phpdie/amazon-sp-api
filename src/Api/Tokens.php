<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class Tokens extends BaseModel
{
    public function createRestrictedDataToken(array $body)
    {
        $path = '/tokens/2021-03-01/restrictedDataToken';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }
}