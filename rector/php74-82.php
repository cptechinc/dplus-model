<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
    ])
    ->withPhpSets(php82: true)
    ->withParallel(timeoutSeconds: 800, maxNumberOfProcess: 4, jobSize: 20)
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
    );
