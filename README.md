# Command Line Tool with PHP

[![Latest Stable Version](http://poser.pugx.org/bear8421/command-line-tool/v)](https://packagist.org/packages/bear8421/command-line-tool) [![Total Downloads](http://poser.pugx.org/bear8421/command-line-tool/downloads)](https://packagist.org/packages/bear8421/command-line-tool) [![Latest Unstable Version](http://poser.pugx.org/bear8421/command-line-tool/v/unstable)](https://packagist.org/packages/bear8421/command-line-tool) [![License](http://poser.pugx.org/bear8421/command-line-tool/license)](https://packagist.org/packages/bear8421/command-line-tool) [![PHP Version Require](http://poser.pugx.org/bear8421/command-line-tool/require/php)](https://packagist.org/packages/bear8421/command-line-tool)

Start Project Command Line Tool use PHP with Silly CLI micro-framework based on Symfony Console

## Donate Me

Buy me a coffee: [https://paypal.me/nguyenanhung](https://paypal.me/nguyenanhung)

## Summary

| Key       | Value                                                                                                                  |
|-----------|------------------------------------------------------------------------------------------------------------------------|
| Project   | Command Line Tool                                                                                                      |
| Framework | Silly CLI micro-framework                                                                                              |
| GitHub    | [https://github.com/bear8421/command-line-tool](https://github.com/bear8421/command-line-tool)                         |
| Packagist | [https://packagist.org/packages/bear8421/command-line-tool](https://packagist.org/packages/bear8421/command-line-tool) |

## Install the Application

Run this command from the directory in which you want to install your new CLI micro-framework application.

```shell
composer create-project bear8421/command-line-tool [my-app-name]
```

or

```shell
php composer.phar create-project bear8421/command-line-tool [my-app-name]
```

Replace `[my-app-name]` with the desired directory name for your new application.

## Usage

Create `TestCommand` in namespace `Bear\App\Command`

```php
class TestCommand
{
    public function __invoke($name, $upper, OutputInterface $output)
    {
        if ($name) {
            $text = 'Hello, Iam ' . $name;
            $output->writeln("Bear");
        } else {
            $text = 'Hello, Iam. BEAR';
        }
        if ($upper) {
            $text = strtoupper($text);
        }
        $output->writeln($text);
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
use Bear\App\Command\TestCommand;

$app = new Application();
$app->setName(ENV_APP_NAME);

// Routes list Command
$app->command(parseExpressionOptions('greet', [
		'u|upper',
		'r|randomFaker'
]), TestCommand::class)->descriptions(TestCommand::$desc, TestCommand::$optionsInfo);

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
$ php bear greet vietnam --upper
HELLO JOHN
$ php bear greet --upper vietnam
HELLO JOHN
```

`Silly\Application` extends `Symfony\Console\Application` and can be used wherever Symfony's Application can.

## Binaries Bash Setup

### Move file `bear` in `/your/path` to `/your/path/bin`

### Setup in to `.bash_profile` or `.zshrc`

```shell
export PATH="/your/path/bin:$PATH"
```

### Reload Bash session

```shell
source ~/.bash_profile
```

hoặc

```shell
source ~/.zshrc
```

### Use with Binaries

```shell
bear greet --upper vietnam
```

## Documentation

Also see Official Document
here: [https://github.com/bear8421/command-line-tool/tree/main/docs](https://github.com/bear8421/command-line-tool/tree/main/docs)

## Contact

If any question & request, please contact following information

| Name        | Email                | GitHub        | Facebook      |
|-------------|----------------------|---------------|---------------|
| Hung Nguyen | dev@nguyenanhung.com | @nguyenanhung | @nguyenanhung |

From Hanoi with Love ❤️
