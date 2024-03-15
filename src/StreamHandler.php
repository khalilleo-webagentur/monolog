<?php

declare(strict_types=1);

namespace Khalilleo\Monolog;

use RuntimeException;

final class StreamHandler
{
    private const PATH = __DIR__ . "/../../../../storage/logs/";

    public function append(string $message, string $level)
    {
        $data = '# ' . date('Y-m-d H:i:s') . "\t" . $message;

        file_put_contents($this->fileName($level), $data . "\n", FILE_APPEND);
    }

    private function fileName(string $level): string
    {
        $this->makeDir();

        return self::PATH . '/' . ucfirst($level) . '_' . date('Y') . '.log';
    }

    private function makeDir(): void
    {
        if (!file_exists(self::PATH) && !mkdir(self::PATH, 0777, true) && !is_dir(self::PATH)) {
            throw new RuntimeException(sprintf('Directory "%s" was not created', self::PATH));
        }
    }
}
