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
     * 批量获取商品是否有满赠券信息
     * @param array $params array('productids' => '123, 456')
     * @return mixed  array(.... 'list' => ['123' => 1, '456' => 0 ]....)
     */
    public function getCouponsForGoodsList($params)
    {
        $url = 'promotion/fullcoupon?act=getCouponsForGoodsList';

        return $this->client->get($url, $params)->toArray();
    }

    /**
     * 获取单个商品所有的满赠券信息
     * @param $params array('productid' => 123)
     * @return mixed array(... 'list' =>[['title' => '', 'description' => '',], ['title' => '', 'description' => '',]] )
     */
    public function getCouponsForGoodsDetail($params)
    {
        $url = 'promotion/fullcoupon?act=getCouponsForGoodsDetail';

        return $this->client->get($url, $params)->toArray();
    }
}
