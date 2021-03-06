<?php
/**
 * Vendor_Order_Pay
 *
 * PHP version 5.2+
 *
 * @category  Order
 * @package   Vendor\Order
 * @author    wangaibo <wangaibo@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_Order_Pay extends Vendor_Api
{
    /**
     * GetOrderPayList
     *
     * @param array $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getOrderPayList($criteria)
    {
        $criteria['Act'] = 'GetOrderPayList';

        return $this->client->post('', $criteria);
    }

    /**
     * ActiveShopOrder
     *
     * @param $criteria
     *
     * @return mixed
     */
    public function activeShopOrder($criteria)
    {
        $criteria['Act'] = 'ActiveShopOrder';

        return $this->client->post('', $criteria);
    }

    /**
     * ActiveShopPreSaleOrder
     * @param $criteria
     * @return mixed
     * @throws Vendor_RestClient_Exception
     */
    public function activeShopPreSaleOrder($criteria)
    {
        $criteria['Act'] = 'ActiveShopPreSaleOrder';

        return $this->client->post('', $criteria);
    }
}
