<?php

declare (strict_types=1);
namespace DEPTRAC_1700756462\StubTests\TestData\Providers\Reflection;

use Generator;
use DEPTRAC_1700756462\StubTests\Model\PHPProperty;
use DEPTRAC_1700756462\StubTests\Model\StubProblemType;
use DEPTRAC_1700756462\StubTests\TestData\Providers\EntitiesFilter;
use DEPTRAC_1700756462\StubTests\TestData\Providers\ReflectionStubsSingleton;
class ReflectionPropertiesProvider
{
    public static function classPropertiesProvider() : Generator
    {
        return self::yieldFilteredMethodProperties();
    }
    public static function classStaticPropertiesProvider() : Generator
    {
        return self::yieldFilteredMethodProperties(StubProblemType::PROPERTY_IS_STATIC);
    }
    public static function classPropertiesWithAccessProvider() : Generator
    {
        return self::yieldFilteredMethodProperties(StubProblemType::PROPERTY_ACCESS);
    }
    public static function classPropertiesWithTypeProvider() : Generator
    {
        return self::yieldFilteredMethodProperties(StubProblemType::PROPERTY_TYPE);
    }
    public static function classReadonlyPropertiesProvider() : Generator
    {
        return self::yieldFilteredMethodProperties(StubProblemType::WRONG_READONLY);
    }
    private static function yieldFilteredMethodProperties(int ...$problemTypes) : ?Generator
    {
        $classesAndInterfaces = ReflectionStubsSingleton::getReflectionStubs()->getClasses();
        foreach (EntitiesFilter::getFiltered($classesAndInterfaces) as $class) {
            foreach (EntitiesFilter::getFiltered($class->properties, fn(PHPProperty $property) => $property->access === 'private', ...$problemTypes) as $property) {
                (yield "Property {$class->name}::{$property->name}" => [$class, $property]);
            }
        }
    }
}
