<?php
/**
 * Vendor_Promotion_SecKill
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
class Vendor_Promotion_SecKill extends Vendor_Api
{
    /**
     * getSecKillGoodsList
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getSecKillGoodsList($criteria)
    {
        //$url = 'promotion/seckill?act=getSecKillGoodsList';
        //return $this->client->get($url, $criteria)->toArray();
        $criteria['Act'] = 'GetSecKillGoodsList';

        return $this->client->post('', $criteria)->toArray();
    }

    /**
     * getSecKillGoodsListByActivityIds
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getSecKillGoodsListByActivityIds($criteria)
    {
        //$url = 'promotion/seckill?act=getSecKillGoodsListByActivityIds';
        //return $this->client->get($url, $criteria)->toArray();
        $criteria['Act'] = 'GetSecKillGoodsListByActivityIds';

        return $this->client->post('', $criteria)->toArray();
    }
}
