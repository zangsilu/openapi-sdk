<?php
/**
 * Vendor_Foot_Footprints
 *
 * PHP version 5.2+
 *
 * @category  Foot
 * @package   Vendor\Foot
 * @author    Jianbo Qin <qinjb@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_Foot_Footprints extends Vendor_Api
{
    /**
     * footprintCount
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function footprintCount($criteria)
    {
        $criteria['Act'] = 'FootprintCount';

        return $this->client->post('?FootprintCount', $criteria);
    }

    /**
     * footprintAdd
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function footprintAdd($criteria)
    {
        $criteria['Act'] = 'FootprintAdd';

        return $this->client->post('?FootprintAdd', $criteria);
    }
}
