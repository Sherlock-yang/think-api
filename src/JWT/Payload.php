<?php 
namespace Shonnzong\Api\JWT;

use Shonnzong\Api\JWT\Factories\Claims\Collection;

/**
 * @author   Yang Shonnzong <Shonnzong@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/Shonnzong/think-api
 */
class Payload 
{
    private $claims;

    public function __construct(Collection $claims)
    {
        $this->claims = $claims;
    }

    // 转为数组
    public function toArray()
    {
        return $this->claims->toArray();
    }
}