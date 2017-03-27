<?php
/**
 * Vendor_Goods_Property
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
class Vendor_Goods_Property extends Vendor_Api
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
    public function getList($criteria, $orderSort = '', $limit = 0, $offset = -1)
    {
        $url = 'goods/properties?act=getList';
        $orderSort ? $criteria['ordersort'] = $orderSort :'';
        $limit >0? $criteria['limit']     = $limit: '';
        $offset >=0 ? $criteria['offset']    = $offset: '';
       
        return $this->client->get($url, $criteria)->toArray();
    }
    /**
     * getMulti
     *
     * @param mixed  $criteria
     * @param string $orderSort
     * @param int    $limit
     * @param int    $offset
     *
     * @access public
     *
     * @return mixed
     */
    public function getMulti($criteria, $orderSort = '', $limit = 0, $offset = -1)
    {
        $url = 'goods/properties?act=getMulti';
        $orderSort ? $criteria['ordersort'] = $orderSort :'';
        $limit >0? $criteria['limit']       = $limit: '';
        $offset >=0 ? $criteria['offset']   = $offset: '';
       
        return $this->client->get($url, $criteria)->toArray();
    }
    /**
     * show
     *
     * @param mixed $id
     * @param array $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function show($id, $criteria = array())
    {
        $url = sprintf('goods/property/%d', $id);

        return  $this->client->get($url, $criteria)->toArray();
    }

    /**
     * getFatherAndSon
     *
     * @param array $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getFatherAndSon($criteria)
    {
        $url = 'goods/properties?act=getFatherAndSon';

        return  $this->client->get($url, $criteria)->toArray();
    }
}
