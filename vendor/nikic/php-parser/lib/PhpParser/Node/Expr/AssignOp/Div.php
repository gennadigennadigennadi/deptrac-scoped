<?php

declare (strict_types=1);
namespace DEPTRAC_1700753084\PhpParser\Node\Expr\AssignOp;

use DEPTRAC_1700753084\PhpParser\Node\Expr\AssignOp;
class Div extends AssignOp
{
    public function getType() : string
    {
        return 'Expr_AssignOp_Div';
    }
}
