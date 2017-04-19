<?php
/**
 * Vendor_Goods_Product
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
class Vendor_Goods_Product extends Vendor_Api
{
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
        $url = 'goods/products?act=getMulti';
        $orderSort ? $criteria['ordersort'] = $orderSort : '';
        $limit >0? $criteria['limit']     = $limit :'';
        $offset >=0? $criteria['offset']    = $offset: '';
       
        return $this->client->get($url, $criteria)->toArray();
    }
    /**
     * getList
     *
     * @param mixed $criteria
     * @param string $orderSort
     * @param int $limit
     * @param mixed $offset
     *
     * @access public
     *
     * @return mixed
     */
    public function getList($criteria, $orderSort = '', $limit = 0, $offset = -1)
    {
        $url = 'goods/products?act=getList';
        $orderSort ? $criteria['ordersort'] = $orderSort : '';
        $limit >0? $criteria['limit']     = $limit :'';
        $offset >=0? $criteria['offset']    = $offset: '';
       
        return $this->client->get($url, $criteria)->toArray();
    }
    /**
     * show
     *
     * @param array $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function show($id, $criteria = array())
    {
        $url = sprintf('goods/product/%d', $id);

        return  $this->client->get($url, $criteria)->toArray();
    }

    /**
     * 更新商品信息
     *
     * @param $id
     * @param $criteria
     *
     * @return mixed
     */
    public function update($id, $criteria)
    {
        $url = sprintf('goods/product/%d', $id);

        return $this->client->put($url, $criteria)->toArray();
    }
}
