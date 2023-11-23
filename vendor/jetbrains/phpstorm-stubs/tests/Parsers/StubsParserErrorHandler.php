<?php

declare (strict_types=1);
namespace DEPTRAC_1700753084\StubTests\Parsers;

use DEPTRAC_1700753084\PhpParser\Error;
use DEPTRAC_1700753084\PhpParser\ErrorHandler;
class StubsParserErrorHandler implements ErrorHandler
{
    public function handleError(Error $error) : void
    {
        $error->setRawMessage($error->getRawMessage() . "\n" . $error->getFile());
    }
}
