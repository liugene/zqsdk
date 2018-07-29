<?php

namespace liugene\zqsdk\service;

class ZqGoodsGetService implements ServiceInterface
{

    private $api_param = [];

    public function getApiMethodName()
    {
        return 'ZqGoodsGet';
    }

    public function getApiParam()
    {
        return $this->api_param;
    }

}
