<?php

namespace Angecode\LaravelIproSoft\Entities\Traits;

trait HasExtractableSlug
{
    public function extractSlugFromUrl(): ?string
    {
        preg_match('/([^\/]+)\/?$/', $this->url, $matches);
        if (isset($matches[1])) {
            return $matches[1];
        }

        preg_match('/([^\/]+)\/?$/', $this->propertyWebsite, $matches);

        return $matches[1] ?? null;
    }
}
