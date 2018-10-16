<?php
/*
 * This file is part of the openapi package.
 *
 * (c) liugj<liugj@boqii.com> wangaibo<wangaibo@boqii.com> jijz<jijz@boqii.com>
 * (c) zhangsl<zhangsl@boqii.com> wangyt<wangyt@boqii.com> wangyw<wangyw@boqii.com>
 * (c) caowl<caowl@boqii.com> curry.zheng<curry.zheng@boqii.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
class Vendor_Activity_PullUser extends Vendor_Api
{
    /**
     * addOrderChange
     * @param $criteria
     * @return mixed
     */
    public function addPullUserRecord($criteria)
    {
        $criteria['Act'] = 'AddPullUserRecord';

        return $this->client->post('', $criteria);
    }
}
