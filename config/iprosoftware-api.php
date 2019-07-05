<?php

return [

    'client_id' => env('IPROSOFTWARE_CLIENT_ID', ''),
    'client_secret' => env('IPROSOFTWARE_CLIENT_SECRET', ''),
    'api_host' => env('IPROSOFTWARE_API_HOST', ''),
    'api_oauth_endpoint' => env('IPROSOFTWARE_API_OAUTH_ENDPOINT', '/oauth/2.0/token'),
    'requests_path_prefix' => env('IPROSOFTWARE_REQUESTS_PATH_PREFIX', 'apis/'),

    'access_token_class' => \Angecode\IproSoftware\AccessToken\AccessToken::class,
    'access_token_cacher' => \Angecode\LaravelIproSoft\LaravelCacheAccessTokenCacher::class,

    'default_client_conf' => [
        'timeout' => 15.0,
        'http_errors' => false,
        'headers' => [
            'Accept' => 'application/json',
        ]
    ]
];