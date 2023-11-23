<?php

declare (strict_types=1);
/**
 * phpDocumentor
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */
namespace DEPTRAC_1700753084\phpDocumentor\GraphViz\PHPStan;

use DEPTRAC_1700753084\Mockery as m;
use DEPTRAC_1700753084\phpDocumentor\GraphViz\Graph;
use DEPTRAC_1700753084\phpDocumentor\GraphViz\Node;
use DEPTRAC_1700753084\PHPStan\Reflection\ClassReflection;
use DEPTRAC_1700753084\PHPStan\Type\FloatType;
use DEPTRAC_1700753084\PHPStan\Type\StringType;
use DEPTRAC_1700753084\PHPUnit\Framework\TestCase;
final class MethodReflectionExtensionTest extends TestCase
{
    /** @var MethodReflectionExtension */
    private $fixture;
    public function setUp() : void
    {
        $this->fixture = new MethodReflectionExtension();
    }
    /**
     * @dataProvider existingMethodProvider
     */
    public function testNodeHasMethodReturnsTrue(string $className, string $methodName) : void
    {
        $classReflection = m::mock(ClassReflection::class);
        $classReflection->shouldReceive('getName')->andReturn($className);
        $this->assertTrue($this->fixture->hasMethod($classReflection, $methodName));
    }
    /**
     * @return array<string, array<string, string>>
     */
    public function existingMethodProvider() : array
    {
        return ['node::getLabel' => ['className' => Node::class, 'methodName' => 'getLabel'], 'node::setLabel' => ['className' => Node::class, 'methodName' => 'setLabel'], 'graph::setFontSize' => ['className' => Graph::class, 'methodName' => 'setFontSize'], 'graph::getFontSize' => ['className' => Graph::class, 'methodName' => 'getFontSize']];
    }
    public function testAttributeType() : void
    {
        $classReflection = m::mock(ClassReflection::class);
        $classReflection->shouldReceive('getName')->andReturn(Node::class);
        $method = $this->fixture->getMethod($classReflection, 'setFontSize');
        $this->assertInstanceOf(FloatType::class, $method->getVariants()[0]->getParameters()[0]->getType());
    }
    public function testAttributeTypeOfNoneExisting() : void
    {
        $classReflection = m::mock(ClassReflection::class);
        $classReflection->shouldReceive('getName')->andReturn(Node::class);
        $method = $this->fixture->getMethod($classReflection, 'setColor');
        $this->assertInstanceOf(StringType::class, $method->getVariants()[0]->getParameters()[0]->getType());
    }
}