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
            if (property_exists($object, Str::camel($key))) {
                if (method_exists($object, 'parse' . $key)) {
                    $value = $object->{'parse' . $key}($value);
                }
                $object->{Str::camel($key)} = $value;
                unset($array[$key]);
            }
        }


        if (!empty($array)) {
            $object->notParsedData = $array;
        }

        return $object;
    }

    public function getIproId(): ?int
    {
        return $this->id ? ((int)$this->id) : null;
    }
}
