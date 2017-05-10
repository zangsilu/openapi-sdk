<?php
/**
 * Vendor_Shopping_ChangeBuy
 *
 * PHP version 5.2+
 *
 * @category  ChangeBuy
 * @package   Vendor\Shopping
 * @author    Guojing Liu <liugj@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 * @see       http://code.boqii.com/management/doc/blob/master/%E5%95%86%E5%9F%8EAPI%E6%8E%A5%E5%8F%A3.md#93-%E8%8E%B7%E5%8F%96%E8%B4%AD%E7%89%A9%E8%BD%A6%E5%95%86%E5%93%81%E4%BF%A1%E6%81%AFgetshoppingcartdetailv2
 */
class Vendor_Shopping_ChangeBuy extends Vendor_Api
{
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
