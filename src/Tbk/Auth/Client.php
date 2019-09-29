<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Tbk\Auth;

use ETaobao\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class Client extends BaseClient
{

    /**
     * taobao.top.auth.token.create (获取Access Token)
     * @line https://open.taobao.com/api.htm?docId=25388&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getAccessToken(array $params)
    {
        $res = $this->httpPost('taobao.top.auth.token.create', $params);
        return $res;
    }
    
}
