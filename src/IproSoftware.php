<?php

namespace LaravelIproSoftwareApi;

use Illuminate\Support\Facades\Config;
use IproSoftwareApi\IproSoftwareClient;
use Psr\Http\Message\ResponseInterface;

class IproSoftware extends IproSoftwareClient
{
    /**
     * IproSoftware constructor.
     * @throws \IproSoftwareApi\Exceptions\IproSoftwareApiException
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __construct()
    {
        parent::__construct([
            'api_host'             => Config::get('iprosoftware-api.api_host'),
            'client_id'            => Config::get('iprosoftware-api.client_id'),
            'client_secret'        => Config::get('iprosoftware-api.client_secret'),
            'oauth_endpoint'       => Config::get('iprosoftware-api.api_oauth_endpoint'),
            'requests_path_prefix' => Config::get('iprosoftware-api.requests_path_prefix'),
            'access_token_class'   => Config::get('iprosoftware-api.access_token_class'),
            'cache_manager'        => app(Config::get('iprosoftware-api.access_token_cacher')),
            'client_conf'          => Config::get('iprosoftware-api.default_client_conf'),
        ]);
    }

    public function __call($method, $parameters)
    {
        $response = parent::__call($method, $parameters);
        if ($response instanceof ResponseInterface) {
            $response = new IproApiResponse($response);
        }

        return $response;
    }
}
