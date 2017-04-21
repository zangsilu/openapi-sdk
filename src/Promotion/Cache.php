<?php
/**
 * Vendor_Promotion_Cache
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
class Vendor_Promotion_Cache extends Vendor_Api
{
    /**
     * clearCache
     *
     * @access public
     *
     * @return mixed
     */
    public function clearCache()
    {
        $url = 'promotion/cache';

        return $this->client->delete($url)->toArray();
    }
}