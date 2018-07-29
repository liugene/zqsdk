<?php

namespace liugene\zqsdk\service;

class ZqOrderNotifyQueryService implements ServiceInterface
{

    private $api_param = [];

    public function getApiMethodName()
    {
        return 'ZqOrderNotifyQuery';
    }

    public function getApiParam()
    {
        return $this->api_param;
    }

}
