<?php

namespace Angecode\LaravelIproSoft\Entities\Traits;

trait HasExtractableSlug
{
    public function extractSlugFromUrl(): ?string
    {
        if (method_exists($this, 'slugProperties')) {
            $slugProperties = $this->slugProperties();
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
