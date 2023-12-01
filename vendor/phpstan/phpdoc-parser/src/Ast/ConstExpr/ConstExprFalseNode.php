<?php

declare (strict_types=1);
namespace DEPTRAC_202312\PHPStan\PhpDocParser\Ast\ConstExpr;

use DEPTRAC_202312\PHPStan\PhpDocParser\Ast\NodeAttributes;
class ConstExprFalseNode implements ConstExprNode
{
    use NodeAttributes;
    public function __toString() : string
    {
        return 'false';
    }
}
