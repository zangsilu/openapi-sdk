<?php

class Vendor_TuiKe_User extends Vendor_Api
{
    /**
     * 波奇用户变成美狗岛商户
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function createMeetDogAccount($criteria = array())
    {
        $criteria['Act'] = 'CreateMeetDogAccount';

        return $this->client->post('', $criteria);
    }
}
