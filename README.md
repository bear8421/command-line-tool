# Start Project use CLI

[![Latest Stable Version](http://poser.pugx.org/nguyenanhung/start-project-use-command/v)](https://packagist.org/packages/nguyenanhung/start-project-use-command) [![Total Downloads](http://poser.pugx.org/nguyenanhung/start-project-use-command/downloads)](https://packagist.org/packages/nguyenanhung/start-project-use-command) [![Latest Unstable Version](http://poser.pugx.org/nguyenanhung/start-project-use-command/v/unstable)](https://packagist.org/packages/nguyenanhung/start-project-use-command) [![License](http://poser.pugx.org/nguyenanhung/start-project-use-command/license)](https://packagist.org/packages/nguyenanhung/start-project-use-command)

Base Command Line Tool use Silly CLI micro-framework based on Symfony Console

## Donate Me

Buy me a coffee: https://paypal.me/nguyenanhung

## Sumary

| Key       | Value                                                        |
| --------- | ------------------------------------------------------------ |
| Project   | Start Project PHP CLI                                        |
| Framework | Silly CLI micro-framework                                    |
| GitHub    | https://github.com/nguyenanhung/start-project-use-command    |
| Packagist | https://packagist.org/packages/nguyenanhung/start-project-use-command |

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

```shell
composer create-project nguyenanhung/start-project-use-command [my-app-name]
```

or

```shell
php composer.phar create-project nguyenanhung/start-project-use-command [my-app-name]
```

Replace `[my-app-name]` with the desired directory name for your new application.

## Usage

Create `TestCommand` in namespace `Bear\App\Controllers`

```php
class TestCommand
{
    public function __invoke($name, $upper, OutputInterface $output)
    {
        if ($name) {
            $text = 'Hello, Iam ' . $name;
            $output->writeln("Nguyễn An Hưng");
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

```

And declare Command in `Bear` in `bear` file in root folder

```php
#!/usr/bin/env php
<?php
// Register Application Space
define('BEAR', $_SERVER['BEAR_ENV'] ?? 'production');

// Includes Composer Vendor Packages
require_once __DIR__ . '/vendor/autoload.php';

use Silly\Edition\PhpDi\Application;

$app = new Application();

// Routes list Command
$app->command('greet [name] [--upper]', 'Bear\App\Controllers\TestCommand');

try {
    $app->run();
}
catch (Exception $e) {
    echo $e->getMessage();
}

```

Running the application is the same as running any other Symfony Console application:

```
$ php bear greet
Hello
$ php bear greet john --yell
HELLO JOHN
$ php bear greet --yell john
HELLO JOHN
```

`Silly\Application` extends `Symfony\Console\Application` and can be used wherever Symfony's Application can.

## Documentation

Also see Official Document here: https://github.com/mnapoli/silly

## Contact

If any question & request, please contact following information

| Name        | Email                | Skype            | Facebook      |
| ----------- | -------------------- | ---------------- | ------------- |
| Hung Nguyen | dev@nguyenanhung.com | nguyenanhung5891 | @nguyenanhung |

From Hanoi with Love <3
