<?php

namespace liugene\zqsdk\service;

class ZqOrderCreateService implements ServiceInterface
{

    private $api_param = [];

    public function getApiMethodName()
    {
        return 'ZqOrderCreate';
    }

    public function getApiParam()
    {
        return $this->api_param;
    }

    public function setNotifyUrl($url)
    {
        $this->api_param['notifyurl'] = $url;
        return $this;
    }

    public function setPrice($price)
    {
        $this->api_param['zk_price'] = $price;
        return $this;
    }

    public function setOutOrderId($orderId)
    {
        $this->api_param['out_order_id'] = $orderId;
        return $this;
    }

}