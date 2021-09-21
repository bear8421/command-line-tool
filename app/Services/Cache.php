<?php
/**
 * Project start-project-use-command
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/22/2021
 * Time: 06:13
 */

namespace Bear\App\Services;

use nguyenanhung\MyCache\Cache as BaseCache;

/**
 * Class Cache
 *
 * @package   Bear\App\Services
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Cache
{
    /**
     * Function setup
     *
     * @return \nguyenanhung\MyCache\Cache
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/22/2021 14:15
     */
    public static function setup(): BaseCache
    {
        $cachePath  = __DIR__ . '/../../storage/cache';
        $loggerPath = __DIR__ . '/../../storage/debug';
        $cache      = new BaseCache();
        $cache->setDebugStatus(true)
              ->setDebugLevel('info')
              ->setDebugLoggerPath($loggerPath)
              ->setCachePath($cachePath)
              ->setCacheSecurityKey('xxx')
              ->__construct();

        return $cache;
    }
}