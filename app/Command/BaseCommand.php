<?php
/**
 * Project command-line-tool
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 14/07/2022
 * Time: 23:11
 */

namespace Bear\App\Command;

use Bear\App\Database\Model;
use Bear\App\Services\Cache;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

/**
 * Class BaseCommand
 *
 * @package   Bear\App\Command
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class BaseCommand
{
	protected function outputFormatterStyle(): array
	{
		return array(
			'fire' => new OutputFormatterStyle('red', '#ff0', ['bold', 'blink'])
		);
	}

	/**
	 * Function DB
	 *
	 * @return Model
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 * @time     : 14/07/2022 12:17
	 */
	protected static function DB(): Model
	{
		return new Model();
	}

	/**
	 * Function cache
	 *
	 * User: 713uk13m <dev@nguyenanhung.com>
	 * Copyright: 713uk13m <dev@nguyenanhung.com>
	 * @return \nguyenanhung\MyCache\Cache
	 */
	protected static function cache(): \nguyenanhung\MyCache\Cache
	{
		return (new Cache())::setup();
	}
}
