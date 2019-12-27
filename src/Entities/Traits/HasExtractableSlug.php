<?php

namespace Angecode\LaravelIproSoft\Entities\Traits;

trait HasExtractableSlug
{
    public function extractSlug(): ?string
    {
        $methodName = 'slugProperties';
        if (method_exists($this, $methodName)) {
            $slugProperties = $this->{$methodName}();
        } else {
            $slugProperties = [
                'url',
                'propertyWebsite'
            ];
        }

        foreach ($slugProperties as $propName) {
            preg_match('/([^\/]+)\/?$/', $this->$propName, $matches);
            if (isset($matches[1])) {
                return $matches[1];
            }
        }

        return null;
    }
}
