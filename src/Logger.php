<?php

declare(strict_types=1);

namespace Khalilleo\Monolog;

final class Logger implements LoggerInterface
{
    public function __construct(private readonly StreamHandler $streamHandler)
    {
    }

    public function debug(string $message): void
    {
        $this->streamHandler->append($message, Level::DEBUG);
    }
    public function info(string $message): void
    {
        $this->streamHandler->append($message, Level::INFO);
    }

    public function notice(string $message): void
    {
        $this->streamHandler->append($message, Level::NOTICE);
    }

    public function warning(string $message): void
    {
        $this->streamHandler->append($message, Level::WARNING);
    }

    public function error(string $message): void
    {
        $this->streamHandler->append($message, Level::ERROR);
    }

    public function critical(string $message): void
    {
        $this->streamHandler->append($message, Level::CRITICAL);
    }

    public function emergency(string $message): void
    {
        $this->streamHandler->append($message, Level::EMERGENCY);
    }
}
