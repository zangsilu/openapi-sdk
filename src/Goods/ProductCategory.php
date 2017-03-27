<?php
/**
 * Vendor_Goods_Product_Category
 *
 * PHP version 5.2+
 *
 * @category  Goods
 * @package   Vendor\Goods
 * @author    Guojing Liu <liugj@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_Goods_Product_Category extends Vendor_Api
{
    /**
     * getList
     *
     * @param mixed $criteria
     * @param mixed $orderSort
     * @param int   $limit
     * @param int   $offset
     *
     * @access public
     *
     * @return mixed
     */
    public function getList($criteria, $orderSort = '', $limit = 0, $offset = 0)
    {
        $url = 'goods/product_category?act=getList';
        $orderSort ? $criteria['ordersort'] = $orderSort :'';
        $limit >0? $criteria['limit']     = $limit: '';
        $offset >=0 ? $criteria['offset']    = $offset: '';
       
        return $this->client->get($url, $criteria)->toArray();
    }
}
