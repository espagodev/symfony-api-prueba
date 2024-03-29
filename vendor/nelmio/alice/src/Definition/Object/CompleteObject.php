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

namespace Nelmio\Alice\Definition\Object;

use LogicException;
use Nelmio\Alice\ObjectInterface;

/**
 * Representation of a fixture object for which the instance has been completed.
 */
final class CompleteObject implements ObjectInterface
{
    /**
     * @var ObjectInterface
     */
    private $object;

    public function __construct(ObjectInterface $object)
    {
        $this->object = $object;
    }

    public function getId(): string
    {
        return $this->object->getId();
    }

    public function getInstance(): object
    {
        return $this->object->getInstance();
    }

    public function withInstance(object $newInstance): static
    {
        throw new LogicException('Cannot create a new object from a complete object.');
    }

    public function __clone()
    {
        $this->object = clone $this->object;
    }
}
