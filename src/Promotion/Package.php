<?php
/**
 * Vendor_Promotion_Package
 *
 * PHP version 5.2+
 *
 * @category  Promotion
 * @package   Vendor\Promotion
 * @author    wangaibo <wangaibo@boqii.net>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_Promotion_Package extends Vendor_Api
{
    /**
     * getPackageGoodsList
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getPackageGoodsList($criteria)
    {
        //$url = 'promotion/package?act=getPackageGoodsList';
        //return $this->client->get($url, $criteria)->toArray();
        $criteria['Act'] = 'GetPackageGoodsList';

        return $this->client->post('', $criteria)->toArray();
    }
}
