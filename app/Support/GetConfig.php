<?php
/**
 * Project my-command
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 08/29/2021
 * Time: 00:35
 */

namespace Bear\App\Support;

/**
 * Class GetConfig
 *
 * @package   Bear\App\Support
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class GetConfig
{
	public const CONFIG_FILE = __DIR__ . '/../../config/config.php';

	/**
	 * Function loadConfig
	 *
	 * @return array|mixed
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 * @time     : 08/29/2021 38:03
	 */
	protected static function loadConfig()
	{
		if (is_file(self::CONFIG_FILE) && file_exists(self::CONFIG_FILE)) {
			return require self::CONFIG_FILE;
		}

		return [];
	}

	/**
	 * Function item
	 *
	 * @param $itemName
	 *
	 * @return mixed|null
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 * @time     : 08/29/2021 39:11
	 */
	public static function item($itemName)
	{
		$config = static::loadConfig();
		if (isset($config[$itemName])) {
			return $config[$itemName];
		}

		return null;
	}

	/**
	 * Function getDbConfig
	 *
	 * @return array
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 * @time     : 09/21/2021 01:07
	 */
	public static function getDbConfig(): array
	{
		$DB = include __DIR__ . '/../../config/database.php';

		return (array)$DB;
	}

	/**
	 * Function getDb
	 *
	 * @param string $name
	 *
	 * @return array
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 * @time     : 09/21/2021 02:20
	 */
	public static function getDb(string $name = ''): array
	{
		$config = static::getDbConfig();
		if (isset($config[$name])) {
			return (array)$config[$name];
		}

		return [];
	}
}
