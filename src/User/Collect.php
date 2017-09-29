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

        return $this->client->post('', $criteria);
    }

    /**
     * GetMyCollectedGoodsList 
     * 
     * @param array $criteria 
     * 
     * @access public
     * 
     * @return mixed
     */
    public function GetMyCollectedGoodsList($criteria = array())
    {
        $criteria['Act'] = 'GetMyCollectedGoodsList';

        return $this->client->post('', $criteria);
    }
}
