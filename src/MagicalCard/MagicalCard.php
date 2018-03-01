<?php
/**
 * Vendor_MagicalCard_MagicalCard
 *
 * PHP version 5.2+
 *
 * @category  MagicalCard
 * @package   Vendor\MagicalCard
 * @author    wangaibo <wangaibo@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_MagicalCard_MagicalCard extends Vendor_Api
{
    /**
     * GetMagicalCardUserInfo
     * 
     * @param array $criteria 
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getMagicalCardUserInfo($criteria)
    {
        $criteria['Act'] = 'GetMagicalCardUserInfo';

        return $this->client->post('', $criteria);
    }

    /**
     * ActiveMagicalCardBuyOrder
     *
     * @param $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function activeMagicalCardBuyOrder($criteria)
    {
        $criteria['Act'] = 'ActiveMagicalCardBuyOrder';

        return $this->client->post('', $criteria);
    }

    /**
     * ActiveMagicalCardRechargeOrder
     *
     * @param $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function activeMagicalCardRechargeOrder($criteria)
    {
        $criteria['Act'] = 'ActiveMagicalCardRechargeOrder';

        return $this->client->post('', $criteria);
    }

    /**
     * CancelMagicalCardRechargeOrder
     *
     * @param array $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function cancelMagicalCardRechargeOrder($criteria)
    {
        $criteria['Act'] = 'CancelMagicalCardRechargeOrder';

        return $this->client->post('', $criteria);
    }

    /**
     * DestroyMagicalCard
     *
     * @param array $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function destroyMagicalCard($criteria)
    {
        $criteria['Act'] = 'DestroyMagicalCard';

        return $this->client->post('', $criteria);
    }

    /**
     * StopMagicalCard
     *
     * @param array $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function stopMagicalCard($criteria)
    {
        $criteria['Act'] = 'StopMagicalCard';

        return $this->client->post('', $criteria);
    }

    /**
     * GetMagicalCardUserList
     *
     * @param array $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getMagicalCardUserList($criteria)
    {
        $criteria['Act'] = 'GetMagicalCardUserList';

        return $this->client->post('', $criteria);
    }

    /**
     * GetMagicalCardUserLevelList
     *
     * @param array $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getMagicalCardUserLevelList($criteria)
    {
        $criteria['Act'] = 'GetMagicalCardUserLevelList';

        return $this->client->post('', $criteria);
    }
}
