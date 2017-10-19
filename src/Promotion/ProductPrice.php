<?php
/**
 * Vendor_Promotion_Product_Price
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
class Vendor_Promotion_Product_Price extends Vendor_Api
{
    /**
     * getSearchPrice
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getSearchPrice($criteria)
    {
        //$url = 'promotion/product_price?act=getSearchPrice';
        //return $this->client->get($url, $criteria)->toArray();
        $criteria['Act'] = 'GetGoodsSearchPrice';

        return $this->client->post('', $criteria)->toArray();
    }

    /**
     * getGoodsPrice
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getGoodsPrice($criteria)
    {
        //$url = 'promotion/product_price?act=getGoodsPrice';
        //return $this->client->get($url, $criteria)->toArray();
        $criteria['Act'] = 'GetGoodsPrice';

        return $this->client->post('', $criteria)->toArray();
    }
}
