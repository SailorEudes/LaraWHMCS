<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection
    |--------------------------------------------------------------------------
    |
    | Define your default whmcs connection
    |
    */

    'default' => 'secondary',

    /*
    |--------------------------------------------------------------------------
    | WHMCS Connections
    |--------------------------------------------------------------------------
    |
    | Define your whmcs connections here.
    | Do not add the path `/includes/api.php` to the URL, it will be added automatically.
    |
    | Methods: "password", "token"
    |
    */

    'connections' => [

        'primary' => [
            'method' => env('WHMCS_AUTH_TYPE', 'password'),
            'url' => env('WHMCS_API_URL', 'https://host.foxcase.fr'),
            'username' => env('WHMCS_USERNAME', 'SailorEudes'),
            'password' => env('WHMCS_PASSWORD', '28101996'),
            'access_key' => env('WHMCS_ACCESSKEY')
        ],

        'secondary' => [
            'method' => env('WHMCS_AUTH_TYPE', 'token'),
            'url' => env('WHMCS_API_URL', 'https://host.foxcase.fr'),
            'identifier' => env('WHMCS_API_IDENTIFIER', 'TCbBaoMAqACtf6WyLobmK7HPmWgHsQuX'),
            'secret' => env('WHMCS_API_SECRET', 'ze4zaYYafOrCOH2LEnWxHoa9uSj29TzU'),
            'access_key' => env('WHMCS_API_ACCESSKEY')
        ]
    ]
];
