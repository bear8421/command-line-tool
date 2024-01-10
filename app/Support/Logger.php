<?php
/**
 * Project command-line-tool
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 14/07/2022
 * Time: 23:09
 */

namespace Bear\App\Support;

use nguyenanhung\MyDebug\Logger as BaseLogger;

/**
 * Class Logger
 *
 * @package   Bear\App\Support
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Logger
{
    /**
     * Function init
     *
     * @return BaseLogger
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 14/07/2022 10:12
     */
    public static function init(): BaseLogger
    {
        $logger = new BaseLogger();
        $logger->setDebugStatus(true)
               ->setGlobalLoggerLevel()
               ->setLoggerPath(dirname(__DIR__) . '/../storage')
               ->setLoggerSubPath('logs');

        return $logger;
    }

    public static function info($name = 'log', $message = '', $context = []): void
    {
        $logger = static::init();
        $logger->info($name, $message, $context);
    }

    public static function debug($name = 'log', $message = '', $context = []): void
    {
        $logger = static::init();
        $logger->debug($name, $message, $context);
    }

    public static function notice($name = 'log', $message = '', $context = []): void
    {
        $logger = static::init();
        $logger->notice($name, $message, $context);
    }

    public static function warning($name = 'log', $message = '', $context = []): void
    {
        $logger = static::init();
        $logger->warning($name, $message, $context);
    }

    public static function error($name = 'log', $message = '', $context = []): void
    {
        $logger = static::init();
        $logger->error($name, $message, $context);
    }

    public static function critical($name = 'log', $message = '', $context = []): void
    {
        $logger = static::init();
        $logger->critical($name, $message, $context);
    }

    public static function alert($name = 'log', $message = '', $context = []): void
    {
        $logger = static::init();
        $logger->alert($name, $message, $context);
    }

    public static function emergency($name = 'log', $message = '', $context = []): void
    {
        $logger = static::init();
        $logger->emergency($name, $message, $context);
    }
}
