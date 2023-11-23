<?php

declare (strict_types=1);
namespace DEPTRAC_202311\PhpParser\Node\Expr\BinaryOp;

use DEPTRAC_202311\PhpParser\Node\Expr\BinaryOp;
class Coalesce extends BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '??';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Coalesce';
    }
}
