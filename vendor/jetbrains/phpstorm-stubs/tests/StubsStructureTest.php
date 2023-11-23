<?php

namespace DEPTRAC_1700756462\StubTests;

use RecursiveArrayIterator;
use RecursiveIteratorIterator;
use DEPTRAC_1700756462\StubTests\TestData\Providers\Stubs\PhpCoreStubsProvider;
class StubsStructureTest extends AbstractBaseStubsTestCase
{
    /**
     * @dataProvider \StubTests\TestData\Providers\Stubs\StubsTestDataProviders::stubsDirectoriesProvider
     */
    public function testStubsDirectoryExistInMap($directory)
    {
        self::assertContains($directory, \iterator_to_array(new RecursiveIteratorIterator(new RecursiveArrayIterator(PhpCoreStubsProvider::$StubDirectoryMap)), \false), "Stubs directories provider doesn't contain '{$directory}'. Please add '{$directory}' to 'PhpCoreStubsProvider::StubDirectoryMap'");
    }
}
