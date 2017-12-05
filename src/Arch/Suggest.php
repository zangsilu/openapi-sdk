<?php
/**
 * Vendor_Arch_Suggest
 *
 * PHP version 5.2+
 *
 * @category  Arch
 * @package   Vendor\Arch
 * @author    Guojing Liu <liugj@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://arch.boqii.com
 */
class Vendor_Arch_Suggest extends Vendor_Api
{
    /**
     * add
     *
     * @param array $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function add($criteria = array())
    {
        $url = 'suggest';
        return $this->client->post($url, $criteria)->toArray();
    }
}
