<?php

namespace DEPTRAC_1700753084\StubTests\TestData\Providers;

use DEPTRAC_1700753084\StubTests\Model\StubsContainer;
use DEPTRAC_1700753084\StubTests\Parsers\PHPReflectionParser;
class ReflectionStubsSingleton
{
    /**
     * @var StubsContainer|null
     */
    private static $reflectionStubs;
    /**
     * @return StubsContainer
     */
    public static function getReflectionStubs()
    {
        if (self::$reflectionStubs === null) {
            self::$reflectionStubs = PHPReflectionParser::getStubs();
        }
        return self::$reflectionStubs;
    }
}
