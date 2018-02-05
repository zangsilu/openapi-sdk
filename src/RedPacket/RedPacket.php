<?php
/**
 * Vendor_RedPacket_RedPacket
 *
 * PHP version 5.2+
 *
 * @category  RedPacket
 * @package   Vendor\RedPacket
 * @author    wangaibo <wangaibo@boqii.net>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_RedPacket_RedPacket extends Vendor_Api
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
    public function getMyRedPacketList($criteria)
    {
        $criteria['Act'] = 'GetMyRedPacketList';

        return $this->client->post('', $criteria);
    }

    /**
     * PcCheckRedPacket
     *
     * @param $criteria
     *
     * @return mixed
     */
    public function pcCheckRedPacket($criteria)
    {
        $criteria['Act'] = 'PcCheckRedPacket';

        return $this->client->post('', $criteria);
    }

    /**
     * GetShoppingMallRedPacket
     *
     * @param array $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getShoppingMallRedPacket($criteria)
    {
        $criteria['Act'] = 'GetShoppingMallRedPacket';

        return $this->client->post('', $criteria);
    }

    /**
     * RemoveRedPacketInfo
     *
     * @param array $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function removeRedPacketInfo($criteria)
    {
        $criteria['Act'] = 'RemoveRedPacketInfo';

        return $this->client->post('', $criteria)->toArray();
    }
}
