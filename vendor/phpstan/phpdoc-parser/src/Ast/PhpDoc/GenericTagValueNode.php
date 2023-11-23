<?php

declare (strict_types=1);
namespace DEPTRAC_1700756462\PHPStan\PhpDocParser\Ast\PhpDoc;

use DEPTRAC_1700756462\PHPStan\PhpDocParser\Ast\NodeAttributes;
class GenericTagValueNode implements PhpDocTagValueNode
{
    use NodeAttributes;
    /** @var string (may be empty) */
    public $value;
    public function __construct(string $value)
    {
        $this->value = $value;
    }
    public function __toString() : string
    {
        return $this->value;
    }
}
