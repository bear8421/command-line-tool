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

/**
 * Class TestCommand
 *
 * @package   Bear\App\Command
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class TestCommand
{
    public function __invoke($name, $upper, OutputInterface $output)
    {
        if ($name) {
            $text = 'Hello, Iam ' . $name;
            $output->writeln("Bear");
        } else {
            $text = 'Hello, Iam.' . $this->son();
        }
        if ($upper) {
            $text = strtoupper($text);
        }
        $output->writeln($text);
    }

    protected function son(): string
    {
        return "Bear";
    }
}
