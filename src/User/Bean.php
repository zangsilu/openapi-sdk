<?php

class Vendor_User_Bean extends Vendor_Api
{
    /**
     * 批量发送波奇豆
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function beanBatchSend($criteria = array())
    {
        $criteria['Act'] = 'BeanBatchSend';
        $criteria['orderIds'] = (string) $criteria['orderIds'];

        return $this->client->post('', $criteria);
    }
	/**
     * @param array $criteria
     * @return mixed
     */
    public function getNormalBeanPercentByUserId($criteria = array())
    {
        $criteria['Act'] = 'GetNormalBeanPercentByUserId';
        $criteria['UserId'] = (string) $criteria['UserId'];

        return $this->client->post('', $criteria)->toArray();
    }
}
