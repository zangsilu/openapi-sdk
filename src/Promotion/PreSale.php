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

    /**
     * 通过活动ID获取预售商品列表 (供预售活动模板使用)
     *
     * @param $criteria
     * @return mixed
     */
    public function GetPreSaleGoodsListByActivityIds($criteria)
    {
        $criteria['Act'] = 'GetPreSaleGoodsListByActivityIds';

        return $this->client->post('?GetPreSaleGoodsListByActivityIds', $criteria);
    }

    /**
     * 获取预售商品初始化数据（格式同普通商品购物车初始化）
     *
     * @param $criteria
     * @return mixed
     */
    public function GetInitPreSaleProductList($criteria)
    {
        $criteria['Act'] = 'GetInitPreSaleProductList';

        return $this->client->post('?GetInitPreSaleProductList', $criteria);
    }

}
