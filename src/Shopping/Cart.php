<?php
/**
 * Vendor_Shopping_Cart
 *
 * PHP version 5.2+
 *
 * @category  Cart
 * @package   Vendor\Cart
 * @author    Guojing Liu <liugj@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 * @see       http://code.boqii.com/management/doc/blob/master/%E5%95%86%E5%9F%8EAPI%E6%8E%A5%E5%8F%A3.md#93-%E8%8E%B7%E5%8F%96%E8%B4%AD%E7%89%A9%E8%BD%A6%E5%95%86%E5%93%81%E4%BF%A1%E6%81%AFgetshoppingcartdetailv2
 */
class Vendor_Shopping_Cart extends Vendor_Api
{
    /**
     * 获取购物车商品信息 getShoppingCartDetailV2
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function getShoppingCartDetailV2($criteria)
    {
        $criteria['Act'] = 'GetShoppingCartDetailV2';

        return $this->client->post('?GetShoppingCartDetailV2', $criteria);
    }

    /**
     * 修改购物车商品数量 modifyShoppingCartGoodsNumber
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function modifyShoppingCartGoodsNumber($criteria)
    {
        $criteria['Act'] = 'ModifyShoppingCartGoodsNumber';

        return $this->client->post('?ModifyShoppingCartGoodsNumber', $criteria);
    }

    /**
     * 获取购物车金额信息 getShoppingCartMoneyInfo
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getShoppingCartMoneyInfo($criteria)
    {
        $criteria['Act'] = 'GetShoppingCartMoneyInfo';

        return $this->client->post('?GetShoppingCartMoneyInfo', $criteria);
    }

    /**
     * 获取购物车商品数量 getShoppingCartNumber
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getShoppingCartNumber($criteria)
    {
        $criteria['Act'] = 'GetShoppingCartNumber';

        return $this->client->post('?GetShoppingCartNumber', $criteria);
    }
    /**
     * 获取订单支付信息，返回还需支付信息 getOrderAmountDetail
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getOrderAmountDetail($criteria)
    {
        $criteria['Act'] = 'GetOrderAmountDetail';

        return $this->client->post('?GetOrderAmountDetail', $criteria);
    }
    /**
     * 添加至购物车 addToShoppingCart
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function addToShoppingCart($criteria)
    {
        $criteria['Act'] = 'AddToShoppingCart';

        return $this->client->post('?AddToShoppingCart', $criteria);
    }
    /**
     *  批量添加至购物车 batchAddToShoppingCart
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function batchAddToShoppingCart($criteria)
    {
        $criteria['Act'] = 'BatchAddToShoppingCart';

        return $this->client->post('?BatchAddToShoppingCart', $criteria);
    }
    /**
     * 获取换购商品列表 getChangeBuyList
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getChangeBuyList($criteria)
    {
        $criteria['Act'] = 'GetChangeBuyList';

        return $this->client->post('?GetChangeBuyList', $criteria);
    }
    /**
     * 重新选择换购商品 changeBuyGoods
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function changeBuyGoods($criteria)
    {
        $criteria['Act'] = 'ChangeBuyGoods';

        return $this->client->post('?ChangeBuyGoods', $criteria);
    } 
}
