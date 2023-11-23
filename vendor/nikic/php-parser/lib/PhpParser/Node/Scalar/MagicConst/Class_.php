<?php

declare (strict_types=1);
namespace DEPTRAC_1700753084\PhpParser\Node\Scalar\MagicConst;

use DEPTRAC_1700753084\PhpParser\Node\Scalar\MagicConst;
class Class_ extends MagicConst
{
    public function getName() : string
    {
        return '__CLASS__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Class';
    }
}