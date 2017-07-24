<?php
/**
 * Vendor_Comment_Comment
 *
 * PHP version 5.2+
 *
 * @category  Comment
 * @package   Vendor\Comment
 * @author    Jianbo Qin <qinjb@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_Comment_Comment extends Vendor_Api
{
    /**
     * 获取评论列表
     *
     * @param $criteria
     *
     * @return array
     */
    public function getList($criteria)
    {
        $url = 'comments?act=getList';

        return $this->client->get($url, $criteria)->toArray();
    }
    /**
     * 获取评论数量
     *
     * @param $criteria
     *
     * @return array
     */
    public function getCount($criteria)
    {
        $url = 'comments?act=getCount';

        return $this->client->get($url, $criteria)->toArray();
    }

    /**
     * 检查能否评论时计算评论数量
     *
     * @param $criteria
     *
     * @return array
     */
    public function getCountOfCanComment($criteria, $assoc = true)
    {
        $url = 'comments?act=getCountOfCanComment';
        if ($assoc) {
            return $this->client->get($url, $criteria)->toArray();
        }

        return $this->client->get($url, $criteria);
    }

    /**
     * 根据回复ID 和有效性获取评论列表
     *
     * @param $criteria
     *
     * @return array
     */
    public function getByReplyIdValid($criteria)
    {
        $url = 'comments?act=getByReplyIdValid';

        return $this->client->get($url, $criteria)->toArray();
    }

    /**
     * 根据父类ID 获取评论列表
     *
     * @param $criteria
     *
     * @return array
     */
    public function getByParentId($criteria)
    {
        $url = 'comments?act=getByParentId';

        return $this->client->get($url, $criteria)->toArray();
    }

    /**
     * getByBrandId
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getByBrandId($criteria)
    {
        $url = 'comments?act=getByBrandId';

        return $this->client->get($url, $criteria)->toArray();
    }

    /**
     * 根据订单ID 商品ID 用户ID 获取评论列表
     *
     * @param $criteria
     *
     * @return array
     */
    public function getListByOidPidUid($criteria)
    {
        $url = 'comments?act=getListByOidPidUid';

        return $this->client->get($url, $criteria)->toArray();
    }

    /**
     * 添加评论
     *
     * @param $comment
     *
     * @return array
     */
    public function create($comment, $assoc = true)
    {
        $url = 'comment';
        if ($assoc) {
            return $this->client->post($url, $comment)->toArray();
        }

        return $this->client->post($url, $comment);
    }

    /**
     * update
     *
     * @param mixed $comment
     * @param mixed $id
     *
     * @access public
     *
     * @return mixed
     */
    public function update($comment, $id)
    {
        $url = sprintf('comment/%d', $id);

        return $this->client->put($url, $comment)->toArray();
    }

    /**
     * 获取分销订单评论
     *
     * @param array $distributionIds
     *
     * @return array
     */
    public function getDistributionOrderComment(array $distributionIds)
    {
        $distributionIds = ! empty($distributionIds) ? implode(',', $distributionIds) : '';
        $url = '/?';
        $criteria = array(
            'method' => 'shop.distribution.order.comment',
            'format' => 'json',
            'data'   => $distributionIds,
        );

        return $this->client->post($url, $criteria)->toArray();
    }
}
