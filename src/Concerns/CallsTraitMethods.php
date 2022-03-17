<?php /** @noinspection PhpUnhandledExceptionInspection */

namespace DefStudio\Tools\Concerns;

use ReflectionClass;

trait CallsTraitMethods
{
    public function call_trait_method(string $method_name, array $params = []): void
    {
        $reflection = new ReflectionClass($this);

        foreach ($reflection->getTraitNames() as $trait) {
            $trait = class_basename($trait);

            $trait_method = "$method_name$trait";
            if(method_exists($this, $trait_method)){
                $this->$trait_method(...$params);
            }
        }
    }
}
