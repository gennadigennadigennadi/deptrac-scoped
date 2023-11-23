<?php

declare (strict_types=1);
namespace DEPTRAC_1700753084\PhpParser\Node\Stmt;

use DEPTRAC_1700753084\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends Node\Stmt
{
    public function getSubNodeNames() : array
    {
        return [];
    }
    public function getType() : string
    {
        return 'Stmt_Nop';
    }
}