<?php
/**
 * Vendor_Config_Cache
 *
 * PHP version 5.2+
 *
 * @category  Config
 * @package   Vendor\Config
 * @author    wangaibo <wangaibo@boqii.net>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_Config_Cache extends Vendor_Api
{
    /**
     * clearConfigCache
     *
     * @param $criteria
     *
     * @return mixed
     */
    public function clearConfigCache($criteria)
    {
        $criteria['Act'] = 'ClearConfigCache';

        return $this->client->post('', $criteria)->toArray();
    }
}
