<?php 
namespace Shonnzong\Api\JWT\Factories\Claims;

/**
 * @author   Yang Shonnzong <Shonnzong@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/Shonnzong/think-api
 */
class Custom extends Claim
{
    protected $name;

    public function __construct($name, $value)
    {
        $this->name = $name;
        parent::__construct($value);
    }
}
