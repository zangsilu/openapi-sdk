<?php
/**
 * Vendor_Stock
 *
 * PHP version 5.2+
 *
 * @category  Stock
 * @package   Vendor\Stock
 * @author    Jianbo Qin <qinjb@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_Stock extends Vendor_Api
{
    /**
     * 根据时间戳获取变更库存 getStockByTimestamp
     *
     * @param mixed $criteria array('timestamp'=>2122321, 'is_erp'=>1, 'storage'=>'多个仓库逗号分隔')
     *
     * @access public
     *
     * @return Array(
     *   'lastUpdateTime' => 1490060705
     *   'stocks'         => array(
     *      '仓库ID2' => Array( '商品ID' => Array( 'number' => '', 'virtual'),)
     *      '仓库ID1' => Array( '商品ID' => Array( 'number' => '', 'virtual'),)
     *      )
     * )
     */
    public function getStockByTimestamp($criteria)
    {
        $criteria['Act'] = 'GetVariedProductIdsByTimestamp';

        $results = $this->client->post('', $criteria)->toArray();
        
        $storage  = isset($criteria['storage'])? $criteria['storage'] : '';
        $storages = array(0);
        if ($storage) {
            $storages = explode(',', $criteria['storage']);
        }
        $stocks =  array();
        foreach (array_chunk($results['productIds'], 100) as $chunk) {
            foreach ($storages as $storage) {
                $values = $this->calculateMulti(implode(',', $chunk), 0, $storage, '', 0, 1);
                foreach ($values as $key => $value) {
                    $stocks[$storage][$key] =  $value;
                }
            }
        }
        unset($results['productIds']);
        $results['stocks'] = $stocks;
        return $results;
    }
    /**
     * calculateByProductId
     *
     * @param mixed $productId
     * @param mixed $specId
     * @param mixed $storageNum
     * @param mixed $storage
     * @param mixed $cityStorageNum
     * @param mixed $isIncludeReserved
     *
     * @access public
     *
     * @return mixed
     */
    public function calculateByProductId($productId, $specId = 0, $storageNum = 0, $storage = '', $cityStorageNum = 0, $isErp = 0, $isIncludeReserved = 0)
    {
        $criteria = array_combine(
            array('product_id', 'spec_id', 'storage_num', 'storage', 'city_storage_num', 'is_erp'),
            array($productId, $specId, intval($storageNum), $storage, $cityStorageNum, $isErp)
        );
        $criteria['is_include_reserved'] = $isIncludeReserved;
        $criteria['Act'] = 'CalculateStockByProductId';

        return $this->client->post('', $criteria)->toArray();
    }
    /**
     * calculateMulti
     *
     * @param mixed $ids
     * @param mixed $specId
     * @param mixed $storageNum
     * @param mixed $storage
     * @param mixed $cityStorageNum
     * @param mixed $isIncludeReserved
     *
     * @access public
     *
     * @return mixed
     */
    public function calculateMulti($ids, $specId = 0, $storageNum = 0, $storage = '', $cityStorageNum = 0, $isErp = 0, $isIncludeReserved = 0)
    {
        $criteria = array_combine(
            array('product_id', 'spec_id', 'storage_num', 'storage', 'city_storage_num', 'is_erp'),
            array($ids, $specId, intval($storageNum), $storage, $cityStorageNum, $isErp)
        );
        $criteria['is_include_reserved'] = $isIncludeReserved;

        $criteria['Act'] = 'CalculateMultiStock';

        return $this->client->post('', $criteria)->toArray();
    }
}
