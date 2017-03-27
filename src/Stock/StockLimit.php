<?php
/**
 * Vendor_Stock_StockLimit
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
class Vendor_Stock_StockLimit extends Vendor_Api
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
    public function getList($criteria)
    {
        $url = 'stock/stocklimit?act=getList';
        $stockLimits = array();

        foreach ($this->client->get($url, $criteria) as $row) {
            $key = sprintf('%d_%d', $row['pid'], $row['sgmsid']);
            $num = $row['stock'] - $row['lockstock'];
            $stockLimits[$key] =  $num <0 ? 0:$num;
        }

        return $stockLimits;
    }
}
