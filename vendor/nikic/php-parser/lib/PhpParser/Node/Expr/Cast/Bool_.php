<?php

declare (strict_types=1);
namespace DEPTRAC_1700756462\PhpParser\Node\Expr\Cast;

use DEPTRAC_1700756462\PhpParser\Node\Expr\Cast;
class Bool_ extends Cast
{
    public function getType() : string
    {
        return 'Expr_Cast_Bool';
    }
}
