<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Autoloader config.
 *
 * @see App::autoloader()
 * @see https://webisters.com
 */
return [
    'default' => [
        'register' => true,
        'extensions' => '.php',
        'namespaces' => [
            'App' => APP_DIR,
        ],
        'classes' => [],
    ],
];
