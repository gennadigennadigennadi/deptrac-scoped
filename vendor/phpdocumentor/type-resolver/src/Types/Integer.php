<?php

declare (strict_types=1);
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */
namespace DEPTRAC_1700753084\phpDocumentor\Reflection\Types;

use DEPTRAC_1700753084\phpDocumentor\Reflection\Type;
/**
 * Value object representing Integer type
 *
 * @psalm-immutable
 */
class Integer implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'int';
    }
}
