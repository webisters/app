<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Anti-CSRF config.
 *
 * @see App::antiCsrf()
 * @see https://webisters.com
 */
return [
    'default' => [
        'enabled' => true,
        'token_name' => 'csrf_token',
        'token_bytes_length' => 8,
        'generate_token_function' => 'base64_encode',
        'request_instance' => 'default',
        'session_instance' => 'default',
    ],
];
