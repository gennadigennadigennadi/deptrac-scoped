<?php

declare (strict_types=1);
namespace DEPTRAC_202311\PhpParser\Node\Expr\AssignOp;

use DEPTRAC_202311\PhpParser\Node\Expr\AssignOp;
class Mod extends AssignOp
{
    public function getType() : string
    {
        return 'Expr_AssignOp_Mod';
    }
}
