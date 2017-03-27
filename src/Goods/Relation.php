<?php
/**
 * Vendor_Goods_Relation
 *
 * PHP version 5.2+
 *
 * @category  Goods
 * @package   Vendor\Goods
 * @author    Jianbo Qin <qinjb@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_Goods_Relation extends Vendor_Api
{
    /**
     * getList
     *
     * @param mixed $criteria
     * @param mixed $orderSort
     *
     * @access public
     *
     * @return mixed
     */
    public function getList($criteria, $orderSort = '')
    {
        $url = 'goods/relations?act=getList';
        $orderSort ? $criteria['ordersort'] = $orderSort: '';
       
        return $this->client->get($url, $criteria)->toArray();
    }
}
