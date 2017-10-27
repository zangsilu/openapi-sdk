<?php
/**
 * 用户地址管理
 * Vendor_User_Address
 *
 * PHP version 5.2+
 *
 * @category  User
 * @package   Vendor\User
 * @author    wangyt <wangyt@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 * @see
 */
class Vendor_User_Address extends Vendor_Api
{
    /**
     * 详情
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function getUserAddressDetail($criteria)
    {
        $criteria['Act'] = 'GetUserAddressDetail';

        return $this->client->post('', $criteria);
    }
    /**
     * 添加
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function addUserAddress($criteria)
    {
        $criteria['Act'] = 'AddUserAddress';

        return $this->client->post('', $criteria);
    }
    /**
     * 设置默认
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function setDefaultAddress($criteria)
    {
        $criteria['Act'] = 'SetDefaultAddress';

        return $this->client->post('', $criteria);
    }
    /**
     * 修改
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function updateUserAddress($criteria)
    {
        $criteria['Act'] = 'UpdateUserAddress';

        return $this->client->post('', $criteria);
    }
    /**
     * 删除
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function deleteAddress($criteria)
    {
        $criteria['Act'] = 'DeleteAddress';

        return $this->client->post('', $criteria);
    }
    /**
     * 列表
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function getUserAddressList($criteria)
    {
        $criteria['Act'] = 'GetUserAddressList';

        return $this->client->post('', $criteria);
    }
}
