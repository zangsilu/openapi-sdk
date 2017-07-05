<?php
/**
 * Vendor_Shopping_Order
 *
 * PHP version 5.2+
 *
 * @category  Shopping
 * @package   Vendor\Shopping
 * @author    wangyt <wangyt@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 * @see       http://code.boqii.com/management/doc/blob/master/%E5%95%86%E5%9F%8EAPI%E6%8E%A5%E5%8F%A3.md#93-%E8%8E%B7%E5%8F%96%E8%B4%AD%E7%89%A9%E8%BD%A6%E5%95%86%E5%93%81%E4%BF%A1%E6%81%AFgetshoppingcartdetailv2
 */
class Vendor_Shopping_Order extends Vendor_Api
{
    /**
     * 预售商品订单核对页接口
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function getPreSaleOrderAmount($criteria)
    {
        $criteria['Act'] = 'getPreSaleOrderAmount';

        return $this->client->post('?getPreSaleOrderAmount', $criteria);
    }

    /**
     * 预售下单接口
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function commitPreSaleGoodsOrder($criteria)
    {
        $criteria['Act'] = 'commitPreSaleGoodsOrder';

        return $this->client->post('?commitPreSaleGoodsOrder', $criteria);
    }

    /**
     * 预售订单尾款支付接口
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getRetainagePayment($criteria)
    {
        $criteria['Act'] = 'getRetainagePayment';

        return $this->client->post('?getRetainagePayment', $criteria);
    }

    /**
     * 普通商品下单接口
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function commitGoodsOrder($criteria)
    {
        $criteria['Act'] = 'commitGoodsOrder';

        return $this->client->post('?commitGoodsOrder', $criteria);
    }


}
