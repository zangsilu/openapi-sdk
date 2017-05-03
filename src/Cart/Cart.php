<?php
/**
 * Vendor_Comment_Comment
 *
 * PHP version 5.2+
 *
 * @category  Comment
 * @package   Vendor/Cart/Cart
 * @author    wangyt <wangyt@boqii.com>
 * @copyright 2016-2019 GuangCheng. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_Cart_Cart extends Vendor_Api
{
    /**
     * 获取分销订单评论
     *
     * @param array $distributionIds
     *
     * @return array
     */
    public function getCartProduct(
        $cityId = 0,
       $expressType = 0,
       $ip = '',
       $source = 1,
       $ignoreGlobal = false,
       $ignoreValid = false
    ) {
        $distributionIds = ! empty($distributionIds) ? implode(',', $distributionIds) : '';
        $url = '/?';
        $criteria = array(
            'method' => 'shop.distribution.order.comment',
            'format' => 'json',
            'data'   => $distributionIds,
        );

        return $this->client->post($url, $criteria)->toArray();
    }


    public function getProductNumberByProduct(){
        $distributionIds = ! empty($distributionIds) ? implode(',', $distributionIds) : '';
        $url = '/?';
        $criteria = array(
            'method' => 'shop.distribution.order.comment',
            'format' => 'json',
            'data'   => $distributionIds,
        );

        return $this->client->post($url, $criteria)->toArray();
    }
}