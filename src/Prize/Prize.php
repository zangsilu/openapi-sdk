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
class Vendor_Prize_Prize extends Vendor_Api
{
    /**
     * 波奇豆发放
     *
     * @param $criteria
     *
     * @return mixed
     */
    public function sendBeans($criteria)
    {
        $criteria['Act'] =  'SendBeans';

        return $this->client->post('', $criteria);
    }
}
