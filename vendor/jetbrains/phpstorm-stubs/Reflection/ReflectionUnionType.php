<?php

namespace DEPTRAC_1700753084;

use DEPTRAC_1700753084\JetBrains\PhpStorm\Pure;
/**
 * @since 8.0
 */
class ReflectionUnionType extends \ReflectionType
{
    /**
     * Get list of named types of union type
     *
     * @return ReflectionNamedType[]
     */
    #[Pure]
    public function getTypes() : array
    {
    }
}
/**
 * @since 8.0
 */
\class_alias('DEPTRAC_1700753084\\ReflectionUnionType', 'ReflectionUnionType', \false);
