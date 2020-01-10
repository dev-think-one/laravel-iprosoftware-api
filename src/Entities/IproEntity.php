<?php

namespace Angecode\LaravelIproSoft\Entities;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

abstract class IproEntity
{
    /** @var array */
    public $notParsedData = [];

    /**
     * @param array $list
     * @return Collection
     */
    public static function fromList(array $list): Collection
    {
        $collection = new Collection();

        foreach ($list as $array) {
            $collection->add(self::fromArray($array));
        }

        return $collection;
    }

    public static function fromArray(array $array): self
    {
        $object = new static();
        foreach ($array as $key => $value) {
            $originalKey = $key;
            $key = preg_replace('/[^A-Za-z0-9]/', '', $key);
            $propertyName = $object->getPropertyNameFromKey($key);
            if ($propertyName) {
                if (method_exists($object, 'parse'.$key)) {
                    $value = $object->{'parse'.$key}($value);
                }
                $object->$propertyName = $value;
                unset($array[$originalKey]);
            }
        }

        if (! empty($array)) {
            $object->notParsedData = $array;
        }

        return $object;
    }

    protected function getPropertyNameFromKey(string $key): ?string
    {
        $propertyName = (property_exists($this, Str::camel($key))) ? Str::camel($key) : null;
        if ($propertyName === null && method_exists($this, 'propName'.$key)) {
            $propertyName = $this->{'propName'.$key}();
        }

        return $propertyName;
    }

    public function getIproId(): ?int
    {
        return $this->{$this->getIproIdKeyName()} ? ((int) $this->{$this->getIproIdKeyName()}) : null;
    }

    public function getIproIdKeyName(): string
    {
        return 'id';
    }

    public function toArray()
    {
        // the "trick" is that get_object_vars is being called from the scope of call_user_func and not the scope of the object
        return call_user_func('get_object_vars', $this);
    }
}
