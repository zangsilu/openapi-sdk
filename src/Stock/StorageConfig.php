<?php
/**
 * Vendor_Stock_StorageConfig
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
class Vendor_Stock_StorageConfig extends Vendor_Api
{
    /**
     * 获取有效的仓库列表
     *
     * @param mixed $criteria
     * @param mixed $orderSort
     *
     * @access public
     *
     * @return mixed
     */
    public function getValidStorageNumList()
    {
        $url = 'stock/storageconf?act=getList&select=storagenum';
        $storageNum = array_column($this->client->get($url)->toArray(), "storagenum");
        return is_array($storageNum) ? implode(',', $storageNum): '';
    }
}
