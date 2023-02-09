# amazon-sp-api
1.所有的传参都得用数组,即使只允许接收一个参数也是用数组.

2.参数类型为Query或者Path,用$param数组传参即可.

3.参数类型为Body,用$body数组传参即可,不需要含有body的键名


#用法
```
<?php

use AmazonSpApi\AmaRequest;
use AmazonSpApi\AmaCredentials;
use AmazonSpApi\Api\Reports;

class Test{
    public function index(){
        $refresh_token = '用你的吧';//类似于Atzr|
        $key = '用你的吧';
        $secret = '用你的吧';
        $client_id = '用你的吧'; //类似于amzn1.application-开头的
        $client_secret = '用你的吧';
        $roleToAssumeArn = '用你的吧';//类似于arn:aws:iam开头的
        
        
        $refreshInfo = AmaRequest::getAccessTokenByRefreshToken($client_id, $client_secret, $refresh_token);
        $access_token = json_decode($refreshInfo, true)['access_token'];
        
        $region = 'us-east-1';
        $endpoint = 'https://sellingpartnerapi-na.amazon.com';
        
        $credentials = AmaCredentials::createCredentials($key, $secret, $region, $roleToAssumeArn);
        $instance = AmaRequest::getInstance($access_token, $credentials);
        $instance->setHost($endpoint);
        $result = (new Orders($instance))->getOrder(['orderId' => '503-2418830-6455847']);
        
        print_r(json_decode($result, true));
    }
}
```


