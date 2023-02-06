<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class Uploads extends BaseModel
{
    public function createUploadDestinationForResource(array,$param,array $body)
    {
        $resource = $param['resource'];
        $path = '/uploads/2020-11-01/uploadDestinations/{resource}';
        $path = str_replace('{resource}', $resource, $path);
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }
}