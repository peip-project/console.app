<?php

/*
 * This file is part of the tydal package.
 *  (c) ${THIS_YEAR} Timo Michna <timomichna/yahoo.de>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


if (file_exists('vendor/autoload.php')) {
    require_once 'vendor/peip/bootstrap/bootstrap.php';

    return;
}

if (class_exists(\PEIP\Bootstrap::class, true)) {
    \PEIP\Bootstrap::run();

    return;
}

if (file_exists(__DIR__.'/vendor/peip/bootstrap/bootstrap.php')) {
    require_once __DIR__.'/vendor/peip/bootstrap/bootstrap.php';

    return;
}

throw new \RuntimeException('Could not resolve bootstrap');

