<?php
/**
 * Vendor_Goods_Photo
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
class Vendor_Goods_Photo extends Vendor_Api
{
    /**
     * getByPidPTypeSpecId
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
    public function getByPidPTypeSpecId($criteria, $orderSort = '', $limit = 0, $offset = 0)
    {
        $url = 'goods/photos?act=getByPidPTypeSpecId';
        $orderSort ? $criteria['ordersort'] = $orderSort : '';
        $limit >0? $criteria['limit']     = $limit :'';
        $offset >=0? $criteria['offset']    = $offset: '';
       
        return $this->client->get($url, $criteria)->toArray();
    }
    /**
     * getByPid
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
    public function getByPid($criteria, $orderSort = '', $limit = 0, $offset = 0)
    {
        $url = '?GetGoodsPhotoByPid';
        $criteria['Act'] = 'GetGoodsPhotoByPid';
        $orderSort ? $criteria['ordersort'] = $orderSort : '';
        $limit >0? $criteria['limit']     = $limit :'';
        $offset >=0? $criteria['offset']    = $offset: '';
        $results =  $this->client->post($url, $criteria)->toArray();
        $photos  =  array();
        foreach ($results as $result) {
            $specIds = explode(',', $result['spec_id']);
            foreach ($specIds as $specId) {
                $key = sprintf('%d_%d', $result['pid'], $specId);
                $photos[$key] = $result['picpath'];
            }
        }

        return $photos;
    }

    /**
     * 获取商品主图
     *
     * @param $criteria
     *
     * @return mixed
     */
    public function getProductMainPic($criteria)
    {
        $url = '?GetGoodsPhotoByPid';
        $criteria['Act'] = 'GetGoodsPhotoByPid';

        return $this->client->post($url, $criteria)->firstValue('picpath');
    }

    /**
     * 获取图片路径列表
     *
     * @param $criteria
     *
     * @return mixed
     */
    public function getPicpathByProductIds($criteria)
    {
        $url = '?GetGoodsPhotoByPid';
        $criteria['Act'] = 'GetGoodsPhotoByPid';

        $result = $this->client->post($url, $criteria)->toArray();
        $picList = array();
        foreach ($result as $value) {
            $picList[$value['pid']] = $value['picpath'];
        }
        return $picList;
    }

    /**
     * 根据商品ID和类型获取图片信息并根据商品ID分组
     *
     * @param $criteria
     *
     * @return mixed
     */
    public function getByPidPTypeThenGroup($criteria)
    {
        $url = 'goods/photos?act=getByPidPTypeThenGroup';

        return $this->client->get($url, $criteria)->toArray();
    }
}
