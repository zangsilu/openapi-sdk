<?php
/**
 * Vendor_Goods_ProductSpec
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
class Vendor_Goods_ProductSpec extends Vendor_Api
{
    /**
     * getCountByProductId
     *
     * @param mixed $productId
     *
     * @access public
     *
     * @return mixed
     */
    public function getCountByProductId($criteria)
    {
        $url = 'goods/specs?act=getCountByProductId';
        //$criteria['productid'] = $productId;
        
        $results = array();
        $response = $this->client->get($url, $criteria)->toArray();

        foreach ($response as $value) {
            $results[$value['productid']] = $value['nums'];
        }

        return $results;
    }

    /**
     * getByProductIdValid
     *
     * @param mixed  $criteria
     * @param string $orderSort
     * @param int    $limit
     * @param mixed  $offset
     *
     * @access public
     *
     * @return mixed
     */
    public function getByProductIdValid($criteria, $orderSort = '', $limit = 0, $offset = -1)
    {
        $url = 'goods/specs?act=getByProductIdValid';

        $orderSort ? ($criteria['ordersort'] = $orderSort) : '';
        $limit >0? ($criteria['limit']     = $limit) :'';
        $offset >=0? ($criteria['offset']    = $offset): '';

        $response = $this->client->get($url, $criteria)->toArray();
        return $response;
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
        $url = sprintf('goods/spec/%d', $id);

        return  $this->client->get($url, $criteria)->toArray();
    }
}
