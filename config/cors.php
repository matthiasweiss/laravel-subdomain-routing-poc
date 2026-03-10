<?php

return [
    'paths' => ['*'],
    'allowed_methods' => ['*'],
    'allowed_headers' => ['*'],
    'allowed_origins' => [],
    'allowed_origins_patterns' => [
        '#^https?://([a-z0-9-]+\.)?account1\.subdomains\.test(:\d+)?$#i',
        '#^https?://([a-z0-9-]+\.)?account2\.subdomains\.test(:\d+)?$#i',
    ],
    'exposed_headers' => [
        'X-Inertia',
        'X-Inertia-Version',
        'X-Inertia-Location',
    ],
    'max_age' => 0,
    'supports_credentials' => true,
];
