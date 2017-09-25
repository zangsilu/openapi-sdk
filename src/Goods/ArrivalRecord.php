<?php
/**
 * Vendor_Goods_ArrivalRecord
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
class Vendor_Goods_ArrivalRecord extends Vendor_Api
{
    /**
     * getCount
     *
     * @param mixed $criteria
     * @param mixed $orderSort
     *
     * @access public
     *
     * @return mixed
     */
    public function getCount($criteria)
    {
        $url = 'goods/arrirecords?act=getCount';

        return $this->client->get($url, $criteria)->first();
    }
    /**
     * getMultiCount
     *
     * @param  mixed $criteria
     * @access public
     * @return mixed
     */
    public function getMultiCount($criteria)
    {
        $url = 'goods/arrirecords?act=getCount';

        return $this->client->get($url, $criteria);
    }

    /**
     * commitArrivalNotice 
     * 
     * 
     * @access public
     * 
     * @return mixed
     */
    public function commitArrivalNotice($criteria)
    {
        $criteria['Act'] = 'CommitArrivalNotice';

        $url = '?CommitArrivalNotice';

        return $this->client->post($url, $criteria);
    }
}
