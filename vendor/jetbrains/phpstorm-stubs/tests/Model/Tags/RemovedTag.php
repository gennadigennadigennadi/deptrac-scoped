<?php

namespace DEPTRAC_1700753084\StubTests\Model\Tags;

use DEPTRAC_1700753084\phpDocumentor\Reflection\DocBlock\Description;
use DEPTRAC_1700753084\phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use DEPTRAC_1700753084\phpDocumentor\Reflection\DocBlock\Tags\BaseTag;
use DEPTRAC_1700753084\phpDocumentor\Reflection\Types\Context;
class RemovedTag extends BaseTag
{
    const REGEX_VECTOR = '(?:\\d\\S*|[^\\s\\:]+\\:\\s*\\$[^\\$]+\\$)';
    private $version;
    /**
     * @param string|null $version
     * @param Description|null $description
     */
    public function __construct($version = null, Description $description = null)
    {
        $this->version = $version;
        $this->name = 'removed';
        $this->description = $description;
    }
    /**
     * @param string|null $body
     * @param DescriptionFactory|null $descriptionFactory
     * @param Context|null $context
     * @return RemovedTag
     */
    public static function create($body, $descriptionFactory = null, $context = null)
    {
        if (empty($body)) {
            return new self();
        }
        $matches = [];
        if ($descriptionFactory !== null) {
            if (!\preg_match('/^(' . self::REGEX_VECTOR . ')\\s*(.+)?$/sux', $body, $matches)) {
                return new self(null, $descriptionFactory->create($body, $context));
            }
            return new self($matches[1], $descriptionFactory->create(isset($matches[2]) ? $matches[2] : '', $context));
        }
        return new self();
    }
    /**
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * @return string
     */
    public function __toString()
    {
        return "PhpStorm internal '@removed' tag";
    }
}
