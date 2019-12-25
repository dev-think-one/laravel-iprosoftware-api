<?php

namespace Angecode\LaravelIproSoft\AccessToken;

use Angecode\IproSoftware\Contracts\AccessToken;
use Angecode\IproSoftware\Contracts\AccessTokenCacher;
use Illuminate\Contracts\Cache\Repository as Cache;
use Psr\SimpleCache\InvalidArgumentException;

class LaravelCacheAccessTokenCacher implements AccessTokenCacher
{
    /** @var string */
    protected $key;

    /** @var Cache */
    protected $cache;

    /**
     * LaravelCacheAccessTokenCacher constructor.
     * @param Cache $cache
     * @param string $key
     */
    public function __construct(Cache $cache, string $key = 'iprosoftware-api-access-token')
    {
        $this->key = $key;
        $this->cache = $cache;
    }

    /**
     * Store an item in the cache.
     *
     * @param mixed $accessToken
     * @param int $ttl - time in seconds
     *
     * @return bool
     * @static
     */
    public function put(AccessToken $accessToken, int $ttl = null)
    {
        return $this->cache->put($this->key, serialize($accessToken), $ttl ?? null);
    }

    /**
     * Retrieve an item from the cache by key.
     *
     * @return mixed
     * @static
     * @throws InvalidArgumentException
     */
    public function get(): ?AccessToken
    {
        $token = unserialize($this->cache->get($this->key));

        return ($token instanceof AccessToken) ? $token : null;
    }
}
