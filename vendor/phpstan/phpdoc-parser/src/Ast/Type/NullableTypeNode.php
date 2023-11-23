<?php

declare (strict_types=1);
namespace DEPTRAC_1700753084\PHPStan\PhpDocParser\Ast\Type;

use DEPTRAC_1700753084\PHPStan\PhpDocParser\Ast\NodeAttributes;
class NullableTypeNode implements TypeNode
{
    use NodeAttributes;
    /** @var TypeNode */
    public $type;
    public function __construct(TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
