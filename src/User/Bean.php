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
}
