<?php
/**
 * Project my-command
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 08/29/2021
 * Time: 00:39
 */

namespace Bear\App\Database;

use Exception;
use Bear\App\Support\GetConfig;

/**
 * Class Model
 *
 * @package   Bear\App\Database
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Model
{
	/**
	 * Function connection
	 *
	 * @param string $name
	 *
	 * @return QueryBuilder
	 * @throws Exception
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 * @time     : 09/22/2021 16:41
	 */
	public function connection(string $name = 'database_default'): QueryBuilder
	{
		if (empty($name)) {
			$database = GetConfig::getDb('database_default');
		} else {
			$database = GetConfig::getDb($name);
		}
		if (empty($database)) {
			throw new Exception('Database Connection Name Not Found');
		}
		$builder = new QueryBuilder($database);
		$builder->debugStatus = true;
		$builder->debugLevel = 'debug';
		$builder->debugLoggerPath = __DIR__ . '/../../storage/database/';
		$builder->debugLoggerFilename = 'Log-' . date('Y-m-d') . '.log';
		$builder->__construct();

		return $builder;
	}
}
