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
class Vendor_Promotion_FullCoupon extends Vendor_Api
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
    public function pushOrder($criteria)
    {
        //$url = 'promotion/full_coupon?act=pushOrder';
        //return $this->client->get($url, $criteria)->toArray();
        $criteria['Act'] = 'FullCouponPushOrder';

        return $this->client->post('', $criteria)->toArray();
    }
}
