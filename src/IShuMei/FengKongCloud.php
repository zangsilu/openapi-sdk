<?php

class Vendor_IShuMei_FengKongCloud extends Vendor_Api
{
    /**
     * 注册
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function register($criteria = array())
    {
        $criteria['Act'] = 'FengKongCloudRegister';

        return $this->client->post('', $criteria);
    }
    /**
     * 登录
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function login($criteria = array())
    {
        $criteria['Act'] = 'FengKongCloudLogin';

        return $this->client->post('', $criteria);
    }
    /**
     * 邀请
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function invite($criteria = array())
    {
        $criteria['Act'] = 'FengKongCloudInvite';

        return $this->client->post('', $criteria);
    }
    /**
     * 优惠券
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function coupon($criteria = array())
    {
        $criteria['Act'] = 'FengKongCloudCoupon';

        return $this->client->post('', $criteria);
    }
    /**
     * 任务
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function task($criteria = array())
    {
        $criteria['Act'] = 'FengKongCloudTask';

        return $this->client->post('', $criteria);
    }
    /**
     * 商品订单
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function order($criteria = array())
    {
        $criteria['Act'] = 'FengKongCloudOrder';

        return $this->client->post('', $criteria);
    }
    /**
     * 批量查询
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function batchQuery($criteria = array())
    {
        $criteria['Act'] = 'FengKongCloudBatchQuery';

        return $this->client->post('', $criteria);
    }
}
