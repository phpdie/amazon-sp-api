<?php

namespace AmazonSpApi;

use AmazonSpApi\AmaRequest;

class BaseModel
{
    protected AmaRequest $instance;

    public function __construct(AmaRequest $instance)
    {
        $this->instance = $instance;
    }
}