<?php
/**
 * Project my-command
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 08/28/2021
 * Time: 22:32
 */

namespace Bear\App\Command;

use Symfony\Component\Console\Output\OutputInterface;
use Faker\Factory;

/**
 * Class TestCommand
 *
 * @package   Bear\App\Command
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class TestCommand extends BaseCommand
{
	public function __invoke($name, $upper, $randomFaker, OutputInterface $output)
	{
		$styles = $this->outputFormatterStyle();
		$output->getFormatter()->setStyle('fire', $styles['fire']);

		if ($name) {
			$text = 'Hello, Iam ' . $name;
		} else {
			$text = 'Hello, Iam ' . $this->son();
		}
		if ($upper) {
			$text = strtoupper($text);
		}
		if ($randomFaker) {
			$this->randomFaker($output);
		}
		$output->writeln($text);
	}

	protected function son(): string
	{
		return "Bear";
	}

	protected function randomFaker(OutputInterface $output): void
	{
		$faker = Factory::create();

		$max = 100;
		for ($i = 0; $i < $max; $i++) {
			$testMessage = $faker->ipv4() . ' | ' . $faker->name() . ' | ' . $faker->phoneNumber() . ' | ' . $faker->safeEmail() . ' | ' . $faker->uuid();

			$output->writeln('<fire>' . $testMessage . '</>');
		}
	}
}
