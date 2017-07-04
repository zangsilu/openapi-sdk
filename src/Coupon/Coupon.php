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
        $url = '?GetCoupon';
        $criteria['Act'] =  'GetCoupon';
       
        return $this->client->post($url, $criteria);
    }

    /**
     * shopCouponBatchSend
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function shopCouponBatchSend($criteria)
    {
        $url = '?shop.coupon.batch.send';
        $criteria['Act'] = 'shop.coupon.batch.send';

        return $this->client->post($url, $criteria);
    }

    /**
     * shopCouponNewSend
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function shopCouponNewSend($criteria)
    {
        $url = '?shop.coupon.newsend';
        $criteria['Act'] = 'shop.coupon.newsend';

        return $this->client->post($url, $criteria);
    }
    /**
     * 检查状态 shopCouponNewGet
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function shopCouponNewGet($criteria)
    {
        $url = '?shop.coupon.newget';
        $criteria['Act'] = 'shop.coupon.newget';

        return $this->client->post($url, $criteria);
    }
}
