<?php
/**
 * 用户发票管理
 * Vendor_User_Invoice
 *
 * PHP version 5.2+
 *
 * @category  User
 * @package   Vendor\User
 * @author    wangyt<wangyt@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 * @see       https://code.boqii.com/management/doc/blob/master/InvoiceManagementAPI.md
 */

class Vendor_User_Invoice extends Vendor_Api
{
    /**
     * 发票添加接口: InvoiceAdd
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function InvoiceAdd($criteria = array())
    {
        $criteria['Act'] = 'InvoiceAdd';
        $criteria['UserId'] = (string) $criteria['UserId'];
        if (isset($criteria['InvoiceType'])) {
            $criteria['InvoiceType'] = intval($criteria['InvoiceType']);
        }
        if (isset($criteria['ContentType'])) {
            $criteria['ContentType'] = intval($criteria['ContentType']);
        }

        return $this->client->post('?InvoiceAdd', $criteria);
    }

    /**
     * 发票编辑接口: InvoiceEdit
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function InvoiceEdit($criteria = array())
    {
        $criteria['Act'] = 'InvoiceEdit';
        $criteria['UserId'] = (string) $criteria['UserId'];
        if (isset($criteria['InvoiceType'])) {
            $criteria['InvoiceType'] = intval($criteria['InvoiceType']);
        }
        if (isset($criteria['ContentType'])) {
            $criteria['ContentType'] = intval($criteria['ContentType']);
        }

        return $this->client->post('?InvoiceEdit', $criteria);
    }

    /**
     * 发票删除接口: InvoiceDelete
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function InvoiceDelete($criteria = array())
    {
        $criteria['Act'] = 'InvoiceDelete';
        $criteria['UserId'] = (string) $criteria['UserId'];
        $criteria['InvoiceId'] = !empty($criteria['InvoiceId']) ? intval($criteria['InvoiceId']) : 0;

        return $this->client->post('?InvoiceDelete', $criteria);
    }

    /**
     * 发票列表接口: GetInvoiceList
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function GetInvoiceList($criteria = array())
    {
        $criteria['Act'] = 'GetInvoiceList';
        $criteria['UserId'] = (string) $criteria['UserId'];
        if (isset($criteria['InvoiceType'])) {
            $criteria['InvoiceType'] = intval($criteria['InvoiceType']);
        }

        return $this->client->post('?GetInvoiceList', $criteria);
    }

    /**
     * 发票详情接口: GetInvoiceDetail
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function GetInvoiceDetail($criteria = array())
    {
        $criteria['Act'] = 'GetInvoiceDetail';
        $criteria['UserId'] = (string) $criteria['UserId'];
        $criteria['InvoiceId'] =  !empty($criteria['InvoiceId']) ? intval($criteria['InvoiceId']) : 0;

        return $this->client->post('?GetInvoiceDetail', $criteria);
    }
}
