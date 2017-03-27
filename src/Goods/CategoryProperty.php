<?php
/**
 * Vendor_Goods_Category_Property
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
class Vendor_Goods_Category_Property extends Vendor_Api
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
    public function getList($criteria = array(), $orderSort = '', $limit = 0, $offset = -1)
    {
        $url = 'goods/category_property?act=getList';
        $orderSort ? $criteria['ordersort'] = $orderSort : '';
        $limit ? $criteria['limit'] = $limit : '';
        $offset >=0? $criteria['offset']    = $offset:'';

        return  $this->client->get($url, $criteria);
    }
}
