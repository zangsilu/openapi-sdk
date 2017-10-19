<?php
/**
 * Vendor_Goods_Brand
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
class Vendor_Goods_Brand extends Vendor_Api
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
        $url = '?GetGoodsBrandList';
        $orderSort ? $criteria['ordersort'] = $orderSort : '';
        $criteria['Act'] = 'GetGoodsBrandList';
       
        return $this->client->post($url, $criteria)->toArray();
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
        $url = sprintf('goods/brand/%d', $id);

        return $this->client->get($url, $criteria)->toArray();
    }
    /**
     * getMulti
     *
     * @param mixed $criteria
     * @param array $filter
     *
     * @access public
     *
     * @return mixed
     */
    public function getMulti($criteria, $filter = array())
    {
        $url = '?GetGoodsBrandMulti';
        $criteria['Act'] = 'GetGoodsBrandMulti';

        $brands = array();
        foreach ($this->client->post($url, $criteria) as $brandId => $brand) {
            $isFilter = false;
            foreach ($filter as $key => $value) {
                if (isset($brand[$key]) && $brand[$key]  == $value) {
                } else {
                    $isFilter = true;
                    break;
                }
            }
            if (!$isFilter) {
                $brands[$brandId] = $brand;
            }
        }
        return $brands;
    }
    /**
     * 取消收藏 cancelMyBrand
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function cancelMyBrand($criteria)
    {
        $criteria['Act'] = 'CancelMyBrand';

        return $this->client->post('?CancelMyBrand', $criteria);
    }
    /**
     * 收藏 commitMyBrand
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function commitMyBrand($criteria)
    {
        $criteria['Act'] = 'CommitMyBrand';

        return $this->client->post('?CommitMyBrand', $criteria);
    }
}
