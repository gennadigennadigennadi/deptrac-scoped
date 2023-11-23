<?php

declare (strict_types=1);
namespace DEPTRAC_1700753084\StubTests\Parsers\Visitors;

use DEPTRAC_1700753084\JetBrains\PhpStorm\Pure;
use DEPTRAC_1700753084\StubTests\Model\StubsContainer;
class CoreStubASTVisitor extends ASTVisitor
{
    #[Pure]
    public function __construct(StubsContainer $stubs)
    {
        parent::__construct($stubs);
        $this->isStubCore = \true;
    }
}
