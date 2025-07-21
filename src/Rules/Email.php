<?php

namespace ArmDevStack\Validator\Rules;

class Email extends Rule
{
    protected static string $defaultMessage = 'The :attribute must be a valid :rule.';

    /**
     * @param string $input
     * @return bool
     */
    public function passes(string $input): bool
    {
        return filter_var($input, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * @param string $attribute
     * @return array
     */
    protected function getReplacements(string $attribute): array
    {
        return [
            'attribute' => $attribute,
            'rule' => 'email address',
        ];
    }
}
