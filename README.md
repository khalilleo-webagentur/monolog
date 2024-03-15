## monolog

PHP library for simple Monolog to handle any kinds of logs.

### Requirements

* PHP `^8.1`

### Installation

`composer require khalilleo-webagentur/monolog`

### Usage

```php

use Khalilleo\Monolog\LoggerInterface;

public function __construct(
    private readonly LoggerInterface $logger
) {
}

$this->logger->info('Any kind of message or exception here..');

```

### Example

```php
<?php

require 'vendor/autoload.php';

use Khalilleo\Monolog\Logger;
use Khalilleo\Monolog\StreamHandler;

(new Logger(new StreamHandler()))->info('Any kind of message or exception here..'); // search for file `Info_2024.log`

```

### Copyright

This project is licensed under the MIT License.
