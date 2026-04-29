<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Console config.
 *
 * @see App::console()
 * @see App::run()
 * @see https://webisters.com
 */
$commands = [];

foreach ([
    Webisters\Commands\MakeController::class,
    Webisters\Commands\MakeModel::class,
    Webisters\Commands\MakeView::class,
    Webisters\Commands\RouteList::class,
] as $command) {
    if (\class_exists($command)) {
        $commands[] = $command;
    }
}

return [
    'default' => [
        'find_in_namespaces' => false,
        'directories' => [
            APLUS_DIR . 'dev-commands/src',
            APP_DIR . 'Commands',
        ],
        'commands' => $commands,
        'language_instance' => 'default',
        'locator_instance' => 'default',
    ],
];
