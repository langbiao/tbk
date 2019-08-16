<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Tbk\Tpwd;

use ETaobao\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class Client extends BaseClient
{

    /**
     * taobao.tbk.tpwd.create (淘宝客淘口令)
     * @line http://open.taobao.com/docs/api.htm?apiId=31127&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function create(array $params)
    {
        $res = $this->httpPost('taobao.tbk.tpwd.create', $params);
        return $res;
    }
    
    /**
     * taobao.wireless.share.tpwd.query (查询解析淘口令)
     * @line https://open.taobao.com/api.htm?spm=a219a.7386797.0.0.77f5669aqlNRyb&source=search&docId=32461&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function parse(array $params)
    {
        $res = $this->httpPost('taobao.wireless.share.tpwd.query', $params);
        return $res;
    }

}
