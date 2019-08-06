<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Tbk\Coupon;

use ETaobao\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class Client extends BaseClient
{

    /**
     * taobao.tbk.coupon.get (阿里妈妈推广券信息查询)
     * @line http://open.taobao.com/docs/api.htm?apiId=31106&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function get(array $params)
    {
        $res = $this->httpPost('taobao.tbk.coupon.get', $params);
        return $res;
    }
    
    /**
     * taobao.tbk.coupon.convert (淘宝客-推广者-单品券高效转链)
     * @line https://open.taobao.com/api.htm?docId=29289&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function convert(array $params)
    {
        $res = $this->httpPost('taobao.tbk.coupon.convert', $params);
        return $res;
    }

}
