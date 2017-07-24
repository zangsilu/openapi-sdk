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
 * @see       http://code.boqii.com/management/doc/blob/master/PreSaleAPI.md
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
        $criteria['Act'] = 'GetPreSaleOrderAmount';

        return $this->client->post('?GetPreSaleOrderAmount', $criteria);
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
        $criteria['Act'] = 'CommitPreSaleGoodsOrder';

        return $this->client->post('?CommitPreSaleGoodsOrder', $criteria);
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
        $criteria['Act'] = 'GetRetainagePayment';

        return $this->client->post('?GetRetainagePayment', $criteria);
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
        $criteria['Act'] = 'CommitGoodsOrder';

        return $this->client->post('?CommitGoodsOrder', $criteria);
    }
}
