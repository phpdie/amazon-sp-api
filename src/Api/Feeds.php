<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class Feeds extends BaseModel
{
    public function getFeeds(array $param)
    {
        $path = '/feeds/2021-06-30/feeds';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function createFeed(array $body)
    {
        $path = '/feeds/2021-06-30/feeds';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getFeed(array $param)
    {
        $feedId = $param['feedId'];
        $path = '/feeds/2021-06-30/feeds/{feedId}';
        $path = str_replace('{feedId}', $feedId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function cancelFeed(array $param)
    {
        $feedId = $param['feedId'];
        $path = '/feeds/2021-06-30/feeds/{feedId}';
        $path = str_replace('{feedId}', $feedId, $path);
        return $this->instance->sendRequest($path, [], [], 'DELETE');
    }

    public function createFeedDocument(array $body)
    {
        $path = '/feeds/2021-06-30/documents';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getFeedDocument(array $param)
    {
        $feedDocumentId = $param['feedDocumentId'];
        $path = '/feeds/2021-06-30/documents/{feedDocumentId}';
        $path = str_replace('{feedDocumentId}', $feedDocumentId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }
}