## monolog

PHP library for simple Monolog to handle any kinds of logs.

### Requirements

* PHP `^8.1`

### Installation

`composer require khalilleo-webagentur/monolog`

### Usage

```php

// create this service as entry point

<?php

declare(strict_types=1);

namespace App\Service\Core;

use Khalilleo\Monolog\LoggerAbstruct;

final class MonologService extends LoggerAbstruct
{
    //
}

```

```php

// call your service 

use App\Service\MonologService;

public function __construct(private readonly MonologService $monolog) {}


// use monolog

$this->monolog->logger->info('any message ..');
$this->monolog->logger->debug('any message ..');
.
.


```

### Copyright

This project is licensed under the MIT License.
