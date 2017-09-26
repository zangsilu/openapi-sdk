<?php
 
class Vendor_User_Collect extends Vendor_Api
{
    /**
     * HandleGoodsCollection 
     * 
     * @param array $criteria 
     * 
     * @access public
     * 
     * @return mixed
     */
    public function HandleGoodsCollection($criteria = array())
    {
        $criteria['Act'] = 'HandleGoodsCollection';

        return $this->client->post('?HandleGoodsCollection', $criteria);
    }
}
