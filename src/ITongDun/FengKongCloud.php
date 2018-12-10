<?php

class Vendor_ITongDun_FengKongCloud extends Vendor_Api
{
    /**
     * 注册
     *
     * @param array $criteria
     * @return mixed
     * @throws Vendor_RestClient_Exception
     */
    public function register($criteria = array())
    {
        $criteria['Act'] = 'TongDunRegister';

        return $this->client->post('', $criteria);
    }
}
