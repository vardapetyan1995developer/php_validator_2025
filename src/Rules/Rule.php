<?php

namespace ArmDevStack\Validator\Rules;

use ArmDevStack\Validator\Rules\Interfaces\RuleInterface;

abstract class Rule implements RuleInterface
{
    protected static string $defaultMessage = 'The :attribute must be :rule.';
    protected array $parameters = [];

    /**
     * @param ...$parameters
     */
    public function __construct(...$parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @param string $attribute
     * @return string
     */
    public function message(string $attribute): string
    {
        $message = static::$defaultMessage;

        $replacements = $this->getReplacements($attribute);

        foreach ($replacements as $key => $value)
        {
            $message = str_replace(":$key", (string) $value, $message);
        }

        return $message;
    }

    /**
     * @param string $attribute
     * @return array
     */
    protected function getReplacements(string $attribute): array
    {
        return [
            'attribute' => $attribute,
            'rule' => strtolower(basename(static::class)),
        ];
    }
}