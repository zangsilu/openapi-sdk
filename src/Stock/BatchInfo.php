<?php
/**
 * Vendor_Stock_BatchInfo
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
class Vendor_Stock_BatchInfo extends Vendor_Api
{
    /**
     * sum
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function sum($criteria)
    {
        $url = 'stock/batch_info?act=sum';

        return $this->client->get($url, $criteria)->first();
    }
    /**
     * sumGroupBySgmsid
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function sumGroupBySgmsid($criteria)
    {
        $url = 'stock/batch_info?act=sumGroupBySgmsid';
        $results = array();
        foreach ($this->client->get($url, $criteria) as $row) {
            $key = sprintf('%d_%d', $row['productid'], $row['sgmsid']);
            $results[$key] = $row['num'];
        }

        return $results;
    }

    /**
     * sumByProductIdValid
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function sumByProductIdValid($criteria)
    {
        $url = 'stock/batch_info?act=sumByProductIdValid';

        return $this->client->get($url, $criteria)->first();
    }
}
