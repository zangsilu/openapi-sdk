<?php
/**
 * Vendor_Suggest_Suggest
 *
 * PHP version 5.2+
 *
 * @category  Suggest
 * @package   Vendor\Suggest
 * @author    Jianbo Qin <qinjb@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_Suggest_Suggest extends Vendor_Api
{
    /**
     * getDefaultSuggest
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getDefaultSuggest($criteria)
    {
        $criteria['Act'] = 'GetDefaultSuggest';

        return $this->client->post('', $criteria);
    }
}
