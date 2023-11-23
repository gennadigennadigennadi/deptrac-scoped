<?php

namespace DEPTRAC_1700756462\StubTests\Tools;

require_once 'ModelAutoloader.php';
ModelAutoloader::register();
use DEPTRAC_1700756462\StubTests\TestData\Providers\ReflectionStubsSingleton;
$reflectionFileName = $argv[1];
\file_put_contents(__DIR__ . "/../../{$reflectionFileName}", \serialize(ReflectionStubsSingleton::getReflectionStubs()));
