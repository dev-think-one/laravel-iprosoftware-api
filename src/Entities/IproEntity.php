<?php

namespace Angecode\LaravelIproSoft\Entities;

use Illuminate\Support\Str;

abstract class IproEntity
{
    /** @var array */
    public $notParsedData = [];

    public static function fromArray(array $array): self
    {
        $object = new static();
        foreach ($array as $key => $value) {
            $key = preg_replace('/[^A-Za-z0-9]/', '', $key);
            $propertyName = (property_exists($object, Str::camel($key))) ? Str::camel($key) : null;
            if (! $propertyName && method_exists($object, 'propName'.$key)) {
                $propertyName = $object->{'propName'.$key}();
            }
            if ($propertyName) {
                if (method_exists($object, 'parse'.$key)) {
                    $value = $object->{'parse'.$key}($value);
                }
                $object->$propertyName = $value;
                unset($array[$key]);
            }
        }

        if (! empty($array)) {
            $object->notParsedData = $array;
        }

        return $object;
    }

    public function getIproId(): ?int
    {
        return $this->id ? ((int) $this->id) : null;
    }
}
