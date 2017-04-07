<?php
/**
 * Vendor_Arch
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
class Vendor_Arch extends Vendor_Api
{
    /**
     * search 
     * 
     * @param array $criteria 
     * 
     * @access public
     * 
     * @return mixed
     */
    public function search($criteria = array())
    {
       $url = 'search';
       return $this->client->get($url, $criteria)->toArray();
    }
}
