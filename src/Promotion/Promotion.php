<?php
/**
 * Vendor_Promotion_Promotion
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
class Vendor_Promotion_Promotion extends Vendor_Api
{
    /**
     * disposeSingleActivity
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function disposeSingleActivity($criteria)
    {
        $url = 'promotion/dispose_single_activity';

        return $this->client->get($url, $criteria)->toArray();
    }

    /**
     * disposeFullActivityExtraInfo
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function disposeFullActivityExtraInfo($criteria)
    {
        $url = 'promotion/dispose_full_activity_extra_info';

        return $this->client->get($url, $criteria)->toArray();
    }
    /**
     * 促销信息 proActivity
     *
     * @param array $criteria
     *
     * @access public
     *
     * @return array
     */
    public function proActivity($criteria)
    {
        $criteria['Act'] = 'PromotionActivity';

        return $this->client->post('', $criteria)->toArray();
    }
}
