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

namespace Nelmio\Alice\FixtureBuilder\ExpressionLanguage;

use Nelmio\Alice\Throwable\Exception\InvalidArgumentExceptionFactory;

/**
 * @internal
 */
final class TokenType
{
    public const STRING_TYPE = 'STRING_TYPE';
    public const PARAMETER_TYPE = 'PARAMETER_TYPE';
    public const ESCAPED_VALUE_TYPE = 'ESCAPED_VALUE_TYPE';
    public const FUNCTION_TYPE = 'FUNCTION_TYPE';
    public const IDENTITY_TYPE = 'IDENTITY_TYPE';
    public const OPTIONAL_TYPE = 'OPTIONAL_TYPE';

    public const DYNAMIC_ARRAY_TYPE = 'DYNAMIC_ARRAY_TYPE';
    public const STRING_ARRAY_TYPE = 'STRING_ARRAY_TYPE';

    public const SIMPLE_REFERENCE_TYPE = 'SIMPLE_REFERENCE_TYPE';
    public const LIST_REFERENCE_TYPE = 'LIST_REFERENCE_TYPE';
    public const WILDCARD_REFERENCE_TYPE = 'WILDCARD_REFERENCE_TYPE';
    public const RANGE_REFERENCE_TYPE = 'RANGE_REFERENCE_TYPE';
    public const PROPERTY_REFERENCE_TYPE = 'PROPERTY_REFERENCE_TYPE';
    public const METHOD_REFERENCE_TYPE = 'METHOD_REFERENCE_TYPE';
    public const VARIABLE_REFERENCE_TYPE = 'VARIABLE_REFERENCE_TYPE';

    public const VARIABLE_TYPE = 'VARIABLE_TYPE';

    private static $values = [
        self::STRING_TYPE => true,
        self::PARAMETER_TYPE => true,
        self::ESCAPED_VALUE_TYPE => true,
        self::FUNCTION_TYPE => true,
        self::IDENTITY_TYPE => true,
        self::OPTIONAL_TYPE => true,
        self::DYNAMIC_ARRAY_TYPE => true,
        self::STRING_ARRAY_TYPE => true,
        self::SIMPLE_REFERENCE_TYPE => true,
        self::LIST_REFERENCE_TYPE => true,
        self::WILDCARD_REFERENCE_TYPE => true,
        self::RANGE_REFERENCE_TYPE => true,
        self::PROPERTY_REFERENCE_TYPE => true,
        self::METHOD_REFERENCE_TYPE => true,
        self::VARIABLE_REFERENCE_TYPE => true,
        self::VARIABLE_TYPE => true,
    ];

    /**
     * @var string
     */
    private $value;

    public function __construct(string $type)
    {
        if (false === array_key_exists($type, self::$values)) {
            throw InvalidArgumentExceptionFactory::createForInvalidExpressionLanguageTokenType($type);
        }

        $this->value = $type;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
