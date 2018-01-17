<?php
 
class Vendor_User_RedPacket extends Vendor_Api
{
    /**
     * GetMyRedPacketList 
     * 
     * @param array $criteria 
     * 
     * @access public
     * 
     * @return mixed
     */
    public function GetMyRedPacketList($criteria = array())
    {
        $criteria['Act'] = 'GetMyRedPacketList';

        return $this->client->post('', $criteria);
    }
}
