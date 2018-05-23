<?php 
namespace Shonnzong\Api\Serializers;

use Shonnzong\Api\Serializers\Serializer;

/**
 * @author   Yang Shonnzong <Shonnzong@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/Shonnzong/think-api
 */
class ArraySerializer extends Serializer
{

    protected $content;

    function __construct($content, $meta = [], $adds = [])
    {
        $this->content = $content;
        $this->setContent();
        parent::__construct($meta, $adds);
    }

    protected function setContent()
    {
        $this->data = $this->content;
    }
}