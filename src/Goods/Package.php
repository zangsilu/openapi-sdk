<?php
/**
 * Vendor_Goods_Package
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
class Vendor_Goods_Package extends Vendor_Api
{
    /**
     * 增加套餐接口 GetShoppingMallGoodsPackage
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getShoppingMallGoodsPackage($criteria)
    {
        $criteria['Act'] = 'GetShoppingMallGoodsPackage';

        return $this->client->post('', $criteria);
    }
    /**
     * 套餐金额 packageAmountCalclulation
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function packageAmountCalclulation($criteria)
    {
        $criteria['Act'] = 'PackageAmountCalclulation';

        return $this->client->post('', $criteria);
    }
}
