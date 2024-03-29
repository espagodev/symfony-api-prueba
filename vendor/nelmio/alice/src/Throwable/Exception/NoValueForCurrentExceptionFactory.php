<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nelmio\Alice\Throwable\Exception;

use Nelmio\Alice\FixtureInterface;

/**
 * @private
 */
final class NoValueForCurrentExceptionFactory
{
    public static function create(FixtureInterface $fixture): NoValueForCurrentException
    {
        return new NoValueForCurrentException(
            sprintf(
                'No value for \'<current()>\' found for the fixture "%s".',
                $fixture->getId(),
            ),
        );
    }

    private function __construct()
    {
    }
}
