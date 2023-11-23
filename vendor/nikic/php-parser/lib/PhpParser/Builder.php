<?php

declare (strict_types=1);
namespace DEPTRAC_1700753084\PhpParser;

interface Builder
{
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : Node;
}
