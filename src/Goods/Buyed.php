<?php
/**
 * Vendor_Goods_Buyed
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
class Vendor_Goods_Buyed extends Vendor_Api
{
    /**
     * getListByPid
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getListByPid($criteria)
    {
        $url = 'goods/buyed?act=getListByPid';

        return $this->client->get($url, $criteria)->toArray();
    }
}
