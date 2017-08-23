<?php
/**
 * Vendor_Promotion_Special_SecKill
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
class Vendor_Promotion_Special_SecKill extends Vendor_Api
{
    /**
     * getSpecialHomeSecKillInfo
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getSpecialHomeSecKillInfo($criteria)
    {
        $url = 'promotion/special_seckill?act=getSpecialHomeSecKillInfo';

        return $this->client->get($url, $criteria)->toArray();
    }

    /**
     * getSpecialSecKillList
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getSpecialSecKillList($criteria)
    {
        $url = 'promotion/special_seckill?act=getSpecialSecKillList';

        return $this->client->get($url, $criteria)->toArray();
    }

    /**
     * getSpecialSecKillGoodsList
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getSpecialSecKillGoodsList($criteria)
    {
        $url = 'promotion/special_seckill?act=getSpecialSecKillGoodsList';

        return $this->client->get($url, $criteria)->toArray();
    }
}
