<?php

declare(strict_types=1);

namespace Khalilleo\Monolog;

abstract class LoggerAbstruct
{
    public Logger $logger;

    public function __construct()
    {
        $this->logger = new Logger();
    }
}
