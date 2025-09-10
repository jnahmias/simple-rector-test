<?php

use Rector\Config\RectorConfig;
use Rector\PHPUnit\AnnotationsToAttributes\Rector\ClassMethod\DataProviderAnnotationToAttributeRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/tests',
    ])
    ->withRules([
        DataProviderAnnotationToAttributeRector::class,
    ]);
