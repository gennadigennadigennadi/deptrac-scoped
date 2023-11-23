<?php

declare (strict_types=1);
namespace Qossmic\Deptrac\Contract\Dependency;

use DEPTRAC_1700753084\Symfony\Contracts\EventDispatcher\Event;
/**
 * Event triggered before all the dependencies have been resolved.
 */
final class PreEmitEvent extends Event
{
    public function __construct(public readonly string $emitterName)
    {
    }
}
