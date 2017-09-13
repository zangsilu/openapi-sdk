<?php
/**
 * Vendor_Arch_Synonym
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
class Vendor_Arch_Synonym extends Vendor_Api
{
    /**
     * delete
     *
     * @param array $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function delete($criteria = array())
    {
        $url = 'synonym';
        return $this->client->delete($url, $criteria)->toArray();
    }
}
