<?php 
namespace Shonnzong\Api;

use Shonnzong\Api\Response\Factory as ResponseFactory;
use Shonnzong\Api\JWT\Factory as JWTFactory;
use think\Config;

/**
 * @author   Yang Shonnzong <Shonnzong@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/Shonnzong/think-api
 */
trait Api
{

    protected $response;
    protected $jwt;

    function __construct()
    {
        $this->init();
    }

    protected function init() {
        $this->response = new ResponseFactory;
        $this->jwt = new JWTFactory;
    }
}