<?php


namespace Watcher\Endpoints;

use Elasticsearch\Endpoints\AbstractEndpoint;
use Elasticsearch\Common\Exceptions;

/**
 * Class Info
 *
 * @category Elasticsearch
 * @package Elasticsearch\Endpoints
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */

class Info extends AbstractEndpoint
{


    /**
     * @throws \Elasticsearch\Common\Exceptions\RuntimeException
     * @return string
     */
    protected function getURI()
    {
        return "/_watcher/";
    }


    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return array();
    }


    /**
     * @return string
     */
    protected function getMethod()
    {
        return "GET";
    }
}