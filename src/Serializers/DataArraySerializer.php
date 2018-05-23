<?php 
namespace Shonnzong\Api\Serializers;

use Shonnzong\Api\Serializers\Serializer;

/**
 * @author   Yang Shonnzong <Shonnzong@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/Shonnzong/think-api
 */
class DataArraySerializer extends Serializer
{

    protected $content;

    protected $key = 'data';

    function __construct($content, $meta = [], $adds = [])
    {
        $this->content = $content;
        $this->setContent();
        parent::__construct($meta, $adds);
    }
    /**
     * 将接口数据赋值给key
     */
    protected function setContent()
    {
        $this->data[$this->key] = $this->content;
    }

    /**
     * 修改key
     * @param [type] $key [description]
     */
    public function setKey($key)
    {
        $this->key = $key;
    }
}