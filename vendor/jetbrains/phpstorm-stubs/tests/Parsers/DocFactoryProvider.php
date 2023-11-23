<?php

declare (strict_types=1);
namespace DEPTRAC_1700756462\StubTests\Parsers;

use DEPTRAC_1700756462\phpDocumentor\Reflection\DocBlockFactory;
use DEPTRAC_1700756462\StubTests\Model\Tags\RemovedTag;
class DocFactoryProvider
{
    private static ?DocBlockFactory $docFactory = null;
    public static function getDocFactory() : DocBlockFactory
    {
        if (self::$docFactory === null) {
            self::$docFactory = DocBlockFactory::createInstance(['removed' => RemovedTag::class]);
        }
        return self::$docFactory;
    }
}
