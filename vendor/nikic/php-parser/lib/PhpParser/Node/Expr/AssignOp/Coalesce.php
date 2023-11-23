<?php

declare (strict_types=1);
namespace DEPTRAC_1700756462\PhpParser\Node\Expr\AssignOp;

use DEPTRAC_1700756462\PhpParser\Node\Expr\AssignOp;
class Coalesce extends AssignOp
{
    public function getType() : string
    {
        return 'Expr_AssignOp_Coalesce';
    }
}
