<?php
/**
 * Project start-project-use-command
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/22/2021
 * Time: 06:15
 */

namespace Bear\App\Database;

use nguyenanhung\MyDatabase\Model\BaseModel;

/**
 * Class QueryBuilder
 *
 * @package   Bear\App\Database
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class QueryBuilder extends BaseModel
{
	/**
	 * QueryBuilder constructor.
	 *
	 * @param array $database
	 *
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 */
	public function __construct(array $database = array())
	{
		parent::__construct($database);
		if (!empty($database)) {
			$this->database = $database;
		}
		$this->logger->setLoggerSubPath(__CLASS__);
	}
}
