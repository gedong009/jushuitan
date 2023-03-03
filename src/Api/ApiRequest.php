<?php

namespace gedong\JuShuiTan\Api;

use gedong\JuShuiTan\Api\Common\BaseApi;
use gedong\JuShuiTan\Api\Common\Client;
use gedong\JuShuiTan\Api\Common\ServeHttp;
use gedong\JuShuiTan\Api\Common\Util;

class ApiRequest extends BaseApi implements ServeHttp
{
    public function request($serveHttp, $params): array
    {
        return Client::post($serveHttp, Util::getParams($this->getConfig()['app_Secret'], $params));
    }
}
