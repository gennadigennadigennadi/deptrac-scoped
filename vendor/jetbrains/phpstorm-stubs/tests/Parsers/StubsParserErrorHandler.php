<?php

declare (strict_types=1);
namespace DEPTRAC_1700756462\StubTests\Parsers;

use DEPTRAC_1700756462\PhpParser\Error;
use DEPTRAC_1700756462\PhpParser\ErrorHandler;
class StubsParserErrorHandler implements ErrorHandler
{
    public function handleError(Error $error) : void
    {
        $error->setRawMessage($error->getRawMessage() . "\n" . $error->getFile());
    }
}
