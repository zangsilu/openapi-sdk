<?php
 
class Vendor_User_Beans extends Vendor_Api
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
    public function BeanBatchSend($criteria = array())
    {
        $criteria['Act'] = 'BeanBatchSend';
        $criteria['orderIds'] = (string) $criteria['orderIds'];

        return $this->client->post('?BeanBatchSend', $criteria);
    }

}
