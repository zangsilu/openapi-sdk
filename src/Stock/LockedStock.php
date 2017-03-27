<?php
/**
 * Vendor_Stock_LockedStock
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
class Vendor_Stock_LockedStock extends Vendor_Api
{
    /**
     * 获取有效的仓库列表
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getLockedStockNum($criteria)
    {
        $url = 'stock/locked_stock?act=sum';

        return $this->client->get($url, $criteria)->first();
    }
}
