<?php

namespace Angecode\LaravelIproSoft;

use Angecode\IproSoftware\IproSoftwareClient;

class IproSoftware extends IproSoftwareClient
{
    /**
     * IproSoftware constructor.
     * @throws \Angecode\IproSoftware\Exceptions\IproSoftwareApiException
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __construct()
    {
        parent::__construct([
            'api_host'             => config('iprosoftware-api.api_host'),
            'client_id'            => config('iprosoftware-api.client_id'),
            'client_secret'        => config('iprosoftware-api.client_secret'),
            'oauth_endpoint'       => config('iprosoftware-api.api_oauth_endpoint'),
            'requests_path_prefix' => config('iprosoftware-api.requests_path_prefix'),
            'access_token_class'   => config('iprosoftware-api.access_token_class'),
            'cache_manager'        => resolve(config('iprosoftware-api.access_token_cacher')),
            'client_conf'          => config('iprosoftware-api.default_client_conf'),
        ]);
    }
}
