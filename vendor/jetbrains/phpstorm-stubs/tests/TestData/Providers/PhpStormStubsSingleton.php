<?php

declare (strict_types=1);
namespace DEPTRAC_1700753084\StubTests\TestData\Providers;

use DEPTRAC_1700753084\StubTests\Model\StubsContainer;
use DEPTRAC_1700753084\StubTests\Parsers\StubParser;
class PhpStormStubsSingleton
{
    private static ?StubsContainer $phpstormStubs = null;
    public static function getPhpStormStubs() : StubsContainer
    {
        if (self::$phpstormStubs === null) {
            self::$phpstormStubs = StubParser::getPhpStormStubs();
        }
        return self::$phpstormStubs;
    }
}
