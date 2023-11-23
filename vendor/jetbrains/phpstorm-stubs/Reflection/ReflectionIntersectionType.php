<?php

namespace DEPTRAC_202311;

use DEPTRAC_202311\JetBrains\PhpStorm\Pure;
/**
 * @since 8.1
 */
class ReflectionIntersectionType extends \ReflectionType
{
    /** @return ReflectionType[] */
    #[Pure]
    public function getTypes() : array
    {
    }
}
/**
 * @since 8.1
 */
\class_alias('DEPTRAC_202311\\ReflectionIntersectionType', 'ReflectionIntersectionType', \false);
