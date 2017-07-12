<?php

/**
 * Vendor_Promotion_FullCoupon
 *
 * PHP version 5.2+
 *
 * @category  Promotion
 * @package   Vendor\Promotion
 * @author    zhangzhibin
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_Promotion_PreSale extends Vendor_Api
{
    /**
     * pushOrder
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function GetPreSaleDetail($criteria)
    {
        $criteria['Act'] = 'GetPreSaleDetail';

        return $this->client->post('?GetPreSaleDetail', $criteria);
    }
}
