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
        $criteria['Act'] =  'GetCoupon';
       
        return $this->client->post('', $criteria);
    }
    /**
     * pcCheckCoupon
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function pcCheckCoupon($criteria)
    {
        $criteria['Act'] =  'PcCheckCoupon';
       
        return $this->client->post('', $criteria);
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
        $criteria['Act'] = 'shop.coupon.batch.send';

        return $this->client->post('', $criteria);
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
        $criteria['Act'] = 'shop.coupon.newsend';

        return $this->client->post('', $criteria);
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
        $criteria['Act'] = 'shop.coupon.newget';

        return $this->client->post('', $criteria);
    }
    /**
     * 检查优惠券 checkCoupon
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function checkCoupon($criteria)
    {
        $criteria['Act'] = 'CheckCoupon';

        return $this->client->post('', $criteria);
    }
    /**
     * 获取优惠券列表 getShoppingMallCoupon
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getShoppingMallCoupon($criteria)
    {
        $criteria['Act'] = 'GetShoppingMallCoupon';

        return $this->client->post('', $criteria);
    }

    /**
     * crontask
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function crontask($criteria)
    {
        $criteria['Act'] = 'SendCoupons';

        return $this->client->post('', $criteria);
    }

    /**
     * getUnsendNum 
     * 
     * @param mixed $criteria 
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getUnsendNum($criteria)
    {
        $criteria['Act'] = 'GetUnusednumByPrefix';

        return $this->client->post('', $criteria);
    }
}
