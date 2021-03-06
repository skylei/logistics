<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2018/12/24
 * Time: 21:32
 */

namespace Wythe\Logistics\Channel;

use Wythe\Logistics\Exceptions\HttpException;
use Wythe\Logistics\Traits\HttpRequest;

abstract class Channel
{
    use HttpRequest;

    protected $url;

    protected $response;
    /**
     * 调用查询接口
     *
     * @param string $code
     * @return array
     */
    abstract public function get(string $code):array ;

    /**
     * 格式响应信息
     *
     * @param string|array $response
     * @return void
     */
    abstract protected function format($response);
}