<?php
/**
 * Vendor_Coupon_Coupon
 *
 * PHP version 5.2+
 *
 * @category  Coupon
 * @package   Vendor\Coupon
 * @author    Guojing Liu <liugj@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_Coupon_Coupon extends Vendor_Api
{
    /**
     * getCoupon
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getCoupon($criteria)
    {
        $url = '/?GetCoupon';
        $criteria['Act'] =  'GetCoupon';
       
        return $this->client->post($url, $criteria);
    }
}
