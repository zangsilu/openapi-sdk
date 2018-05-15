<?php
/**
 * Created by PhpStorm.
 * User:  王亚伟
 * Date: 2018/5/8
 * Time: 10:54
 */
class Vendor_Cps_Mtdp extends Vendor_Api
{
    /**
     * addOrderChange
     * @param $criteria
     * @return mixed
     */
    public function addOrderChange($criteria)
    {
        $criteria['Act'] = 'AddOrderChange';

        return $this->client->post('', $criteria);
    }
}