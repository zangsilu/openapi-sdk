<?php
/**
 * Vendor_Recommend_Product
 *
 * PHP version 5.2+
 *
 * @category  Recommend
 * @package   Vendor\Recommend
 * @author    Guojing Liu <liugj@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_Recommend_Product extends Vendor_Api
{
    /**
     * similar
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
    public function similar($criteria, $orderSort = '', $limit = 0, $offset = -1)
    {
        $url = 'recommend/products?act=similar';
        $orderSort ? ($criteria['ordersort'] = $orderSort) : '';
        $limit >0? ($criteria['limit']     = $limit) :'';
        $offset >=0? ($criteria['offset']    = $offset): '';
       
        return $this->client->get($url, $criteria);
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
}
