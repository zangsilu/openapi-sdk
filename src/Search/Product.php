<?php
/**
 * Vendor_Search_Product
 *
 * PHP version 5.2+
 *
 * @category  Search
 * @package   Vendor\Search
 * @author    Jianbo Qin <qinjb@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_Search_Product extends Vendor_Api
{
    /**
     * get
     *
     * @param mixed $params
     *
     * @access public
     *
     * @return mixed
     */
    public function get($params)
    {
        if (!$params) {
            return array();
        }
        $criteria = array();
        $criteria['q'] = $params['keyword'];
        $criteria['p'] = $params['page'];
        $criteria['ps'] = $params['size'];
        $price =  ($params['userid'] && $params['grade'])? sprintf('price_%s_v%s', $params['source'], $params['grade']) : 'newcast';
        $sortFields = array(
             0 => '',
             1 => 'isstock_DESC,sales_DESC',
             2 => 'isstock_DESC,views_DESC',
             3 => 'isstock_DESC,'. $price .'_ASC' ,
             4 => 'isstock_DESC,'. $price .'_DESC',
             5 => 'isstock_DESC,cretime_DESC',
             6 => 'isstock_DESC,commentnum_DESC',
        );
        $criteria['range']  = sprintf(
            '%s$%s$%s',
            $price,
            isset($params['minprice']) ? $params['minprice'] : '',
            isset($params['maxprice']) ? $params['maxprice'] : ''
        );
        $criteria['price'] = $price;
        $criteria['s'] = isset($sortFields[$params['sort']]) ? $sortFields[$params['sort']] : '';
        if (!$criteria['q'] && !$criteria['s']) {
            $criteria['s'] = 'isstock_DESC,upstatus_DESC,sales_DESC,order_saleamount_DESC';
        }
        $criteria['highlight'] = 'pname';
        $criteria['facets']    = isset($params['facets']) ? $params['facets']: 'brandid,c3,p';
        $criteria['site_source'] = $params['site_source'];

        $url = 'product/search';

        $response = $this->client->get($url, $criteria)->toArray();

        $response['facets']['p1'] = $response['facets']['p'];
        foreach ($response['facets']['p1'] as $key => $value) {
            $response['facets']['p1'][$key] = array_sum($value);
        }
        arsort($response['facets']['p1'], SORT_NUMERIC);

        return $response;
    }
}
