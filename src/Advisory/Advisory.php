<?php
/**
 * Vendor_Advisory_Advisory
 *
 * PHP version 5.2+
 *
 * @category  Advisory
 * @package   Vendor\Advisory
 * @author    Jianbo Qin <qinjb@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_Advisory_Advisory extends Vendor_Api
{
    /**
     * 获取带有商品信息的咨询列表
     *
     * @param $criteria
     *
     * @return mixed
     */
    public function getListWithGoodsInfo($criteria)
    {
        //$url = 'advisories?act=getListWithGoodsInfo';
        //return $this->client->get($url, $criteria)->toArray();
        $criteria['Act'] = 'GetAdvisoryListWithGoodsInfo';

        return $this->client->post('', $criteria)->toArray();
    }
    /**
     * 获取咨询回复
     *
     * @param $criteria
     *
     * @return mixed
     */
    public function getReply($criteria)
    {
        //$url = 'advisories?act=getByParentId';
        //return $this->client->get($url, $criteria)->toArray();
        $criteria['Act'] = 'GetAdvisoryByParentId';

        return $this->client->post('', $criteria)->toArray();
    }

    /**
     * 获取咨询数量
     *
     * @param $criteria
     *
     * @return mixed
     */
    public function getCount($criteria)
    {
        //$url = 'advisories?act=getCount';
        //return $this->client->get($url, $criteria)->first();
        $criteria['Act'] = 'GetAdvisoryCount';

        return $this->client->post('', $criteria)->toArray();
    }

    /**
     * create 
     * 
     * @param mixed $advisory
     * @param mixed $assoc 
     * 
     * @access public
     * 
     * @return mixed
     */
    public function create($advisory, $assoc = true)
    {
        $advisory['Act'] = 'AddAdvisory';
        if ($assoc) {
            return $this->client->post('', $advisory)->toArray();
        }

        return $this->client->post('', $advisory);
    }
}
